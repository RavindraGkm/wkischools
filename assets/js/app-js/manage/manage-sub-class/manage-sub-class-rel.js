var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageSubjectClassRelation=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageSubjectClassRelation.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.addNewClass();
        this.addNewSubject();
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
        if($("#active_tab_val").val()=='mng_class') {
            $('#header_title').html('Manage Class');
        }
        else if($("#active_tab_val").val()=='mng_subject') {
            $('#header_title').html('Manage Subject');
        }
        else if($("#active_tab_val").val()=='mng_sub_class_rel') {
            $('#header_title').html('Manage Subject Class Relation');
        }
        $('.tab_val_header_class').click(function(){
            $('#header_title').html('Manage Class');
        });
        $('.tab_val_header_sub').click(function(){
            $('#header_title').html('Manage Subject');
        });
        $('.tab_val_header_sub_rel').click(function(){
            $('#header_title').html('Manage Subject Class Relation');
        });

    },

    addNewClass:function () {
        var self = this;
        $("#save_class_info").click(function(){
            var className = $('#class_name').val();
            var classSegment = $('#drop_class_segment').val();
            var classStream = $('#drop_class_stream').val();
            var classCode = $('#class_code').val();
            var classLevel = $('#class_level').val();
            var saveClassInfo = $('#save_class_info');
            $.ajax({
                url: self.base_url + "class_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:className, segment: classSegment,
                    stream: classStream, code: classCode,
                    level: classLevel
                },
                beforeSend: function () {
                    saveClassInfo.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');

                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.error[0],'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveClassInfo.html('Save Class Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Class info saved successfully','inverse');
                    saveClassInfo.html('<i class="fa fa-save"></i> &nbsp; Save Class Info');
                }
            });
        });
    },

    addNewSubject:function () {
        var self = this;
        var subjectType='Class';
        $('.rdb_school_type').change(function() {
            var radioButton = $(this);
            if (radioButton.is(':checked')) {
                subjectType=$(this).val();
            }
        });
        $("#save_subject_info").click(function(){
            console.log("Hii");
            var subjectCode = $('#subject_code').val();
            var subjectName = $('#subject_name').val();
            var saveSubjectInfo = $('#save_subject_info');
            $.ajax({
                url: self.base_url + "subject_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    code:subjectCode, name: subjectName,
                    type: subjectType
                },
                beforeSend: function () {
                    saveSubjectInfo.html('Uploading... &nbsp;<i class="zmdi zmdi-edit"></i>');

                },
                error: function (data) {
                    console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.error[0],'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        saveSubjectInfo.html('Save Subject Info &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Subject info saved successfully','inverse');
                    saveSubjectInfo.html('<i class="fa fa-save"></i> &nbsp; Save Subject Info');
                }
            });
        });
    }
}
