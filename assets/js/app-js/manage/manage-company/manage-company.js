var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageCompany=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageCompany.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.createCompany();
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
            url: self.base_url+"company_manage",
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
    createCompany:function () {
        var self = this;
        var  isOwnVoucher, postDatedCheque, status, schoolRelation
        $('#chk_is_own_voucher').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                isOwnVoucher=$(this).val();
                alert(isOwnVoucher);
            }
        });
        $('#chk_post_dated_cheque').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                postDatedCheque=$(this).val();
                alert(postDatedCheque);
            }
        });
        $('#chk_status').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                status=$(this).val();
                alert(status);
            }
            else{
                status="Enable";
                alert(status);
            }
        });
        $('#chk_b_n_p_s').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                schoolRelation=$(this).val();
                alert(schoolRelation);
            }
        });
        $("#save_company_info").click(function(){
            var companyName = $('#company_name').val();
            var companyContactPerson = $('#company_contact_person').val();
            var companyCode = $('#company_code').val();
            var companyEmail = $('#company_email').val();
            var companyWebsite = $('#company_website').val();
            var companyAddress = $('#company_address').val();
            var companyRegistration = $('#company_registration_no').val();
            var companyPFno = $('#company_pf_no').val();
            var companyTIN = $('#company_tin_no').val();
            var companyPAN = $('#company_pan_no').val();
            var companyMobile = $('#company_mobile').val();
            var companyPhone = $('#company_phone_no').val();
            var companyStart = $('#drop_company_start_year').val();
            var companyEnd = $('#drop_company_end_year').val();
            var saveCompanyInfo = $('#save_company_info');
            $.ajax({
                url: self.base_url + "company_manage",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:companyName, contact_person: companyContactPerson,code:companyCode,email:companyEmail,
                    web_address:companyWebsite,address:companyAddress,registration_no:companyRegistration,
                    pf_no: companyPFno, tin_no: companyTIN, pan_no: companyPAN, mobile:companyMobile,
                    phone:companyPhone, start_year:companyStart, end_year:companyEnd,is_own_voucher_no:isOwnVoucher,
                    post_dated_cheque:postDatedCheque,status:status,school_relation:schoolRelation
                },
                beforeSend: function () {
                    saveCompanyInfo.html('Company Info Saving... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveCompanyInfo.html('Save Company Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Company Info saved successfully','inverse');
                    saveCompanyInfo.html('<i class="fa fa-save"></i> &nbsp; Save Company Info');
                }
            });
        });
    }
}

