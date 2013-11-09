
$(document).ready(function () {
    var id = getQueryStringParameterByName("id");
    main.init(id);
});
var main = {
    init: function (id) {
        var $defer = $.ajax({
            url: 'http://data.gonation.com/pl/get?profile_id=' + id,
            type: 'GET',
            dataType: 'jsonp',
            success: function (data) {

            },
            error: function (data) {
                //console.log('error');
            }
        });

    },



};


function getUserInfo() {
    var dataPointer = new Object();

    var $defer = $.ajax({
        url: 'http://data.gonation.com/pl/get?profile_id='+gonationID,
        type: 'GET',
        dataType: 'jsonp',
        success: function(data){
            dataPointer.data
            //console.log(data);
        },
        error: function(data){
            //console.log('error');
        }
    });

    $defer.success(function(){

        //console.log($('#menu-selection select'));
    });
}