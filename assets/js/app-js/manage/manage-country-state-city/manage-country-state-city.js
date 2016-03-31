var WKISCHOOL = WKISCHOOL ||{};
WKISCHOOL.ManageCountryStateCity=function(base_url){
    this.base_url=base_url;
    this.initialize();
};

WKISCHOOL.ManageCountryStateCity.prototype = {
    initialize: function () {
        this.notify();
        this.basicSetups();
        this.getCountry();
        this.getState();
        this.createNewCity();
        this.createNewState();
        this.createNewCountry();
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
    createNewCity:function () {
        var self = this;
        $("#create_city").click(function(){
            var stateId = $('#drop_state_name').val();
            var cityName = $('#city_name').val();
            var createCity = $('#create_city');
            $.ajax({
                url: self.base_url + "city_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:cityName, state_id: stateId
                },
                beforeSend: function () {
                    createCity.html('City Creating... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createCity.html('Create City &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('City Created successfully','inverse');
                    createCity.html('<i class="fa fa-save"></i> &nbsp; Create City');
                }
            });
        });
    },
    createNewState:function () {
        var self = this;
        $("#create_state").click(function(){
            var countryId = $('#drop_country_name').val();
            var stateName = $('#state_name').val();
            var createState = $('#create_state');
            $.ajax({
                url: self.base_url + "state_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:stateName, country_id: countryId
                },
                beforeSend: function () {
                    createState.html('State Creating... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createState.html('Create State &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('State Created successfully','inverse');
                    createState.html('<i class="fa fa-save"></i> &nbsp; Create State');
                }
            });
        });
    },
    createNewCountry:function () {
        var self = this;
        $("#save_country_name").click(function(){
            var countryName = $('#country_name').val();
            var createCountry = $('#save_country_name');
            $.ajax({
                url: self.base_url + "country_mng",
                type: "POST",
                dataType: "JSON",
                data: {
                    name:countryName
                },
                beforeSend: function () {
                    createCountry.html('Country Creating... &nbsp;<i class="zmdi zmdi-edit"></i>');
                },
                error: function (data) {
                    //console.log(data);
                    var obj = jQuery.parseJSON(data.responseText);//<<----<< this object convert responseText into JSON
                    if (data.status == 422) {
                        self.notify(obj.msg,'inverse');
                    }
                    else if (data.status == 500) {
                        self.notify('Error! ','Something went wrong on server !','inverse');
                        createCountry.html('Create Country &nbsp;<i class="zmdi zmdi-edit"></i>');
                    }
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    self.notify('Country Created successfully','inverse');
                    createCountry.html('<i class="fa fa-save"></i> &nbsp; Create Country');
                }
            });
        });
    },
}

