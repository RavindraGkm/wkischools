var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageReceiptBook=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageReceiptBook.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.createNewReceiptBook();
    },
    notify: function(message,type) {
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: false,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'top',
                align: 'right'
            },
            timer:4000,
            animate: {
                enter: 'animated fadeIn',
                exit: 'animated fadeOut'
            },
            offset: {
                x: 20,
                y: 85
            }
        });
    },
    basicSetups : function () {
        // Active tabs
        var active_tab = $("#active_tab_val").val();
        //$('#a_'+active_tab).addClass('active');
        $('#tab_'+active_tab).addClass('active');
        $('#'+active_tab).addClass('active');
        if($("#active_tab_val").val()=='mng_country') {
            $('#header_title').html('Manage Country');
        }
        else if($("#active_tab_val").val()=='mng_state') {
            $('#header_title').html('Manage State');
        }
        else if($("#active_tab_val").val()=='mng_city') {
            $('#header_title').html('Manage City');
        }

        $('.tab_val_header_country').click(function(){
            $('#header_title').html('Manage Country');
        });
        $('.tab_val_header_state').click(function(){
            $('#header_title').html('Manage State');
        });
        $('.tab_val_header_city').click(function(){
            $('#header_title').html('Manage City');
        });
    },
    getCountry:function () {
        var self= this;
        $.ajax({
            url: self.base_url+"country_mng",
            type: 'GET',
            dataType: 'JSON',
            success:function(data) {
                var results = data.result;
                console.log(data);
                var row;
                for(var i=0;i<results.length;i++) {
                    row="<option value="+results[i].id+">"+results[i].name+"</option>";
                    $("#drop_country_name").append(row);
                }
            }
        });
    },
    createNewReceiptBook:function () {
        var self = this;
        var status, schoolRelation
        $('#chk_receipt_book_completed').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                status=$(this).val();
            }
        });
        $('#chk_b_n_p_s').click(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                schoolRelation=$(this).val();
            }
        });
        $("#save_fee_receipt_book").click(function(){
            var receiptBookName = $('#receipt_book_name').val();
            var companyName = $('#drop_company_name').val();
            var receiptFor = $('#receipt_for').val();
            var startSerial = $('#start_serial_no').val();
            var endSerial = $('#end_serial_no').val();
            var prefix = $('#receipt_prefix').val();
            var suffix = $('#receipt_suffix').val();
            var saveFeeReceiptBook = $('#save_fee_receipt_book');
            $.ajax({
                url: self.base_url + "receipt_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:receiptBookName, company_name: companyName,
                    receipt_for:receiptFor,start_serial:startSerial,
                    end_serial: endSerial, prefix: prefix, suffix: suffix,
                    status:status, school_relation:schoolRelation
                },
                beforeSend: function () {
                    saveFeeReceiptBook.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveFeeReceiptBook.html('Save Fee Receipt Book &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Fee Receipt Book saved successfully','inverse');
                    saveFeeReceiptBook.html('<i class="fa fa-save"></i> &nbsp; Save Fee Receipt Book');
                }
            });
        });
    }
}

