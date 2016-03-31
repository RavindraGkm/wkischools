var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageAdminAccount=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageAdminAccount.prototype = {
    initialize: function () {
        this.notify();
        //this.basicSetups();
        this.addNewAdminUser();
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
        if($("#active_tab_val").val()=='mng_codes') {
            $('#header_title').html('Manage Code');
        }
        else if($("#active_tab_val").val()=='merge_codes') {
            $('#header_title').html('Merge COdes');
        }

        $('.tab_val_header_class').click(function(){
            $('#header_title').html('Manage Codes');
        });
        $('.tab_val_header_sub').click(function(){
            $('#header_title').html('Merge Codes');
        });
    },

    addNewAdminUser:function () {
        var self = this;
        var role, schoolName
        $('#chk_role').click(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                role=$(this).val();
            }
        });
        $('#chk_school_name').click(function() {
            var checkButton = $(this);
            if (checkButton.is(':checked')) {
                schoolName=$(this).val();
            }
        });
        $("#save_admin_info").click(function(){
            var name = $('#admin_name').val();
            var userName = $('#admin_user_name').val();
            var pass = $('#admin_acc_pass').val();
            var saveAdminInfo = $('#save_admin_info');
            $.ajax({
                url: self.base_url + "manage_admin_acc_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:name, username: userName,
                    password:pass,belong_school:schoolName,
                    role: role
                },
                beforeSend: function () {
                    saveAdminInfo.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveAdminInfo.html('Save Admin Account Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Admin info saved successfully','inverse');
                    saveAdminInfo.html('<i class="fa fa-save"></i> &nbsp; Save Admin Account Info');
                }
            });
        });
    }
}
