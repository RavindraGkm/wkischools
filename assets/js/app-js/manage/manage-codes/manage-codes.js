var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageCodes=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageCodes.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.getCodeCategoryId();
        this.createNewCode();
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
            $('#header_title').html('Merge Codes');
        }

        $('.tab_val_header_class').click(function(){
            $('#header_title').html('Manage Codes');
        });
        $('.tab_val_header_sub').click(function(){
            $('#header_title').html('Merge Codes');
        });
    },

    getCodeCategoryId:function () {
        var self= this;
        $.ajax({
            url: self.base_url+"code_mng",
            type: 'GET',
            dataType: 'JSON',
            success:function(data) {
                var results = data.result;
                console.log(data);
                var row;
                for(var i=0;i<results.length;i++) {
                    row="<option value="+results[i].id+">"+results[i].category_name+"</option>";
                    $("#drop_code_category_name").append(row);
                }

            }
        });
    },

    createNewCode:function () {
        var self = this;
        $("#create_code").click(function(){
            var codeCategoriesId = $('#drop_code_category_name').val();
            var codeName = $('#code_name').val();
            var createCode = $('#create_code');
            $.ajax({
                url: self.base_url + "code_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    code_name:codeName, code_categories_id: codeCategoriesId
                },
                beforeSend: function () {
                    createCode.html('Code Creating... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createCode.html('Create Code &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Code Created successfully','inverse');
                    createCode.html('<i class="fa fa-save"></i> &nbsp; Create Code');
                }
            });
        });
    },
}
