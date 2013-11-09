var contacts = null;
$(document).ready(function () {
    var id = getQueryStringParameterByName("id");
    //alert('http://' + server + '/listUser.php?id=' + id);
    id = 1;
    main.init(id);
});
var main = {
    init: function (id) {
        var $defer = $.ajax({
            url: 'http://' + server + '/api/user.php?id=' + id,
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var j = data;
                var dVal = data[0];
                $('#fName').text(dVal.first_name);
                $('#lName').text(dVal.last_name);
                $('#email').text(dVal.email);
                $('#company').text(dVal.company);
                $('#addressLn').text(dVal.address);
                $('#website').text(dVal.url);
                //$('#businessPhotoImg').attr('src', dVal.image);
                $('#phone').text(dVal.phone);
                $('#fax').text(dVal.fax);
                $('#blurb').text(dVal.description);
                //need fields: city, state, country, MI
            },
            error: function (data) {
                //console.log('error');
            }
        });

        var $defer2 = $.ajax({
            url: 'http://' + server + '/api/listUser.php?id=' + id,
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {
                var s = "";
                for (var i = 0; i < data.length; i++) {
                    contacts = data;
                    var dVal = data[i];
                    s += "<div class=\"fName\">" + dVal.first_name + "</div>";
                    s += "<div class=\"lName\">" + dVal.last_name + "</div>";
                    s += "<div class=\"email\">" + dVal.email + "</div>";
                    s += "<div class=\"company\">" + dVal.company + "</div>";
                    s += "<div class=\"addressLn\">" + dVal.address + "</div>";
                    s += "<div class=\"website\">" + dVal.url + "</div>";
                    //s += "<div class=\"businessPhoto\"><img src=\"" + dVal.image + "\" class=\"businessPhotoImg\" /></div>";
                    s += "<div class=\"phone\">" + dVal.phone + "</div>";
                    s += "<div class=\"fax\">" + dVal.fax + "</div>";
                    s += "<div class=\"blurb\">" + dVal.description + "</div>";

                    //add pushpin to bing api
                    var latLong = dVal.location.split(',');
                    latLong = new VELatLong(latLong[0], latLong[1]);
                    var pushpin = new VEShape(VEShapeType.Pushpin, latLong);
                    map.AddShape(pushpin);
                    //map.SetView(Microsoft.Maps.LocationRect.CreateLocationRect(latLong));
                }
                //getMapCentering();
                $('#Contacts').append(s);
            },
            error: function (data) {
                //console.log('error');
            }
        });

    },
};

