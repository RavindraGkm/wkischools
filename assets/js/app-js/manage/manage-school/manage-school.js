var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageSchool=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageSchool.prototype = {
    initialize: function () {
        this.notify();
        this.uploadNewSchool();
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
    uploadNewSchool:function () {
        var self = this;
        $("#save_school_info").click(function(){
            //console.log("Hii");
            var schoolName = $('#school_name').val();
            var schoolPhone = $('#school_phone_no').val();
            var schoolFax = $('#school_fax').val();
            var schoolAffiliation = $('#school_affiliation').val();
            var schoolAdmissionNo = $('#school_admission_no').val();
            var schoolAddress = $('#school_address').val();
            var schoolWebsite = $('#school_website').val();
            var schoolEmail = $('#school_email').val();
            var schoolCode = $('#school_code').val();
            //var schoolType=$().val();
            var saveSchoolInfo = $('#save_school_info');
            $.ajax({
                url: self.base_url + "school_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:schoolName, phone: schoolPhone,
                    fax: schoolFax, affiliation: schoolAffiliation,
                    admission_no: schoolAdmissionNo,address:schoolAddress,
                    website: schoolWebsite, email: schoolEmail,code:schoolCode
                },
                beforeSend: function () {
                    saveSchoolInfo.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');

                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.error[0],'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveSchoolInfo.html('Save Book Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Book info saved successfully','inverse');
                    saveSchoolInfo.html('<i class="fa fa-save"></i> &nbsp; Save School Info');
                }
            });
        });
    }
}
