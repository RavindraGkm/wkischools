var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageFee=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageFee.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.getCompanyName();
        this.getFeeHeadFor();
        this.addDropdown();
        this.createNewReceiptBook();
    },
    notify:function(message,type) {
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
        if($("#active_tab_val").val()=='manage_fee_head') {
            $('#header_title').html('Manage Fee Head');
        }

        $('.tab_val_header_fee_head').click(function(){
            $('#header_title').html('Manage Fee Head');
        });
    },
    getCompanyName:function () {
        var self= this;
        $.ajax({
            url: self.base_url+"company_manage",
            type: 'GET',
            dataType: 'JSON',
            success:function(data) {
                var results = data.result;
                var row;
                for(var i=0;i<results.length;i++) {
                    row="<option value="+results[i].id+">"+results[i].name+"</option>";
                    $("#drop_company_name").append(row);
                }
            }
        });
    },
    addDropdown:function () {
        $('#add_option').click(function(){
            var dropVal=$('#drop_val').val();
            var row;
            var rows;
            row="<option value="+$('#drop_val').val()+">"+dropVal+"</option>";
            rows="<tr><td>"+dropVal+"</td></tr>";
            $("#drop_down_add").append(row);
            $("#table_drop_down_add").append(rows);
        });
    },
    getFeeHeadFor:function () {
        var self= this;
        $.ajax({
            url: self.base_url+"company_manage",
            type: 'GET',
            dataType: 'JSON',
            success:function(data) {
                var results = data.result;
                var row;
                for(var i=0;i<results.length;i++) {
                    row="<option value="+results[i].id+">"+results[i].name+"</option>";
                    $("#drop_fee_head_for").append(row);
                }
            }
        });
    },
    createNewReceiptBook:function () {
        var self = this;
        var incomeStatus="Yes";

        $('#radio_income_yes').change(function() {
            var radioButton = $(this);
            if (radioButton.is(':checked')) {
                incomeStatus=$(this).val();
            }
        });
        $('#radio_income_no').change(function() {
            var radioButton = $(this);
            if (radioButton.is(':checked')) {
                incomeStatus=$(this).val();
            }
        });


        $("#save_fee_head_info").click(function(){
            var companyName = $('#drop_company_name').val();
            var feeHeadName = $('#fee_head_name').val();
            var feeCode = $('#fee_code').val();
            var feeHeadFor = $('#drop_fee_head_for').val();
            var feeGroupName = $('#fee_group_name').val();
            var saveFeeHeadInfo = $('#save_fee_head_info');
            $.ajax({
                url: self.base_url + "fee_head_manage",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:feeHeadName, company_id: companyName,
                    code:feeCode,fee_head_for:feeHeadFor,
                    group_name: feeGroupName, income: incomeStatus
                },
                beforeSend: function () {
                    console.log(incomeStatus);
                    saveFeeHeadInfo.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveFeeHeadInfo.html('Save Fee Head Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Fee Head info saved successfully','inverse');
                    saveFeeHeadInfo.html('<i class="fa fa-save"></i> &nbsp; Save Fee Head Info');
                }
            });
        });
    }
}

