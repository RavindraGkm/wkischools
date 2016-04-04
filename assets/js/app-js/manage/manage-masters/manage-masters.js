var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageMasters=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageMasters.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        //this.getCountry();
        this.createProspectusFormMaster();
        this.createProvisionalFeeMaster();
        this.createMediaMaster();
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
        if($("#active_tab_val").val()=='prospectus_form_master') {
            $('#header_title').html('Manage Prospectus/Form Master');
        }
        else if($("#active_tab_val").val()=='provisional_fee_master') {
            $('#header_title').html('Manage Provisional/Fee Master');
        }
        else if($("#active_tab_val").val()=='media_master') {
            $('#header_title').html('Manage Media Master');
        }

        $('.tab_val_header_prospectus_form').click(function(){
            $('#header_title').html('Manage Prospectus/Form Master');
        });
        $('.tab_val_header_provisional_fee').click(function(){
            $('#header_title').html('Manage Provisional/Fee Master');
        });
        $('.tab_val_header_media_master').click(function(){
            $('#header_title').html('Manage Media Master');
        });
    },
    getState:function () {
        var self= this;
        $.ajax({
            url: self.base_url+"state_mng",
            type: 'GET',
            dataType: 'JSON',
            success:function(data) {
                var results = data.result;
                console.log(data);
                var row;
                for(var i=0;i<results.length;i++) {
                    row="<option value="+results[i].id+">"+results[i].name+"</option>";
                    $("#drop_state_name").append(row);
                }
            }
        });
    },
    createProspectusFormMaster:function () {
        var self = this;
        var status, prospectusApplyIn
        $('#chk_is_completed').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                status=$(this).val();
            }
        });
        $('#chk_b_n_p_s').change(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                prospectusApplyIn=$(this).val();
            }
        });
        $("#create_prospectus_form_master").click(function(){
            var currentSession = $('#prospectus_session').val();
            var prospectusTitle = $('#prospectus_title').val();
            var prospectusFromNo = $('#prospectus_from_no').val();
            var prospectusToNo = $('#prospectus_to_no').val();
            var prospectusAmount = $('#prospectus_amount').val();
            var prospectusRemarks = $('#prospectus_remarks').val();
            var createProspectusFormMaster = $('#create_prospectus_form_master');
            $.ajax({
                url: self.base_url + "prospectus_manage_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    session:currentSession, title:prospectusTitle, from_no: prospectusFromNo,
                    to_no:prospectusToNo, amount:prospectusAmount,remarks:prospectusRemarks,
                    status:status,applicable:prospectusApplyIn
                },
                beforeSend: function () {
                    createProspectusFormMaster.html('Prospectus Saving... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createProspectusFormMaster.html('Save Prospectus &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Save Prospectus successfully','inverse');
                    createProspectusFormMaster.html('<i class="fa fa-save"></i> &nbsp; Save Prospectus');
                }
            });
        });
    },
    createProvisionalFeeMaster:function () {
        var self = this;
        var provisionalFeeApplyIn
        $('#chk_prov_b_n_p_s').click(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                provisionalFeeApplyIn=$(this).val();
                alert(provisionalFeeApplyIn);
            }
        });
        $("#create_provisional_fee_master").click(function(){
            var companyName = $('#drop_company_name').val();
            var currentSession = $('#provisional_session').val();
            var provisionalTitle = $('#provisional_title').val();
            var provisionalAmount = $('#provisional_amount').val();
            var provisionalRemarks = $('#provisional_remarks').val();
            var createProvisionalFeeMaster = $('#create_provisional_fee_master');
            $.ajax({
                url: self.base_url + "provisional_fee_manage",
                type: "POST",
                dataType: "JSON",
                data: {
                    company_name:companyName, session:currentSession, title:provisionalTitle,
                    amount:provisionalAmount,remarks:provisionalRemarks,
                    applicable:provisionalFeeApplyIn
                },
                beforeSend: function () {
                    createProvisionalFeeMaster.html('Provisional Info Saving... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createProvisionalFeeMaster.html('Save Provisional Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Save Prospectus successfully','inverse');
                    createProvisionalFeeMaster.html('<i class="fa fa-save"></i> &nbsp; Save Provisional Info');
                }
            });
        });
    },
    createMediaMaster:function () {
        var self = this;
        $("#create_media_master").click(function(){
            var mediaCode = $('#media_code').val();
            var mediaType = $('#drop_media_type').val();
            var mediaName = $('#media_name').val();
            var mediaPerson = $('#contact_person').val();
            var mediaPhone = $('#media_phone').val();
            var mediaMobile = $('#media_mobile').val();
            var mediaAddress = $('#media_address').val();
            var createMediaMaster = $('#create_media_master');
            $.ajax({
                url: self.base_url + "media_master_manage",
                type: "POST",
                dataType: "JSON",
                data: {
                    code:mediaCode, type:mediaType, name:mediaName,
                    contact_person:mediaPerson ,phone_no:mediaPhone,
                    mobile:mediaMobile, address:mediaAddress
                },
                beforeSend: function () {
                    createMediaMaster.html('Media Info Saving... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createMediaMaster.html('Save Media Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Media info Saved successfully','inverse');
                    createMediaMaster.html('<i class="fa fa-save"></i> &nbsp; Save Media Info');
                }
            });
        });
    }
}

