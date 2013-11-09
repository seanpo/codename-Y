//functions


function GetCurrUserInfo(guid)
{
    return {
        firstname: "Sahil",
        lastname: "Panwar",
        middleInitial: "",
        companyAddress: "123 Fake St",
        city: "Hamden",
        state: "CT",
        country: "USA",
        email: "sahil.panwar@gmail.com",
        phone: "203-393-5373",
        fax: "",
        blurb: "Finally, no more business cards going through the washing machine.",
        url: "http://www.bing.com",
        imageURL: ""
    };
}


//api calls







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