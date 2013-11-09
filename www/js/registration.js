$(document).ready(function () {
	$("#submit").click(fuction(){

        var $defer = $.ajax({
            url: 'http://' + server + '/api/saveUser.php?first_name'+first_name+'&last_name'+last_name+'&password'+password+'&email='+email+'&company'+company+'&position'+position+'&address'+address+'&website'+url+'&phone'+phone+'&fax'+fax+'&description'+description';
            type: 'POST',
            dataType: 'jsonp',
            success: function (data) {
                window.location.href="main.html?id="+data[0].id;
            },
            error: function (data) {
                //console.log('error');
            }
        });
	});
});