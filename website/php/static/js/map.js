$('#facebook_connect').click(function () {
  FB.login(function(response) {
    var genderLookup = { "male": 2, "female": 1 };
    if (response.authResponse) {
      FB.api('/me', function(response) {
        var data = {
          id: response.id,
          first_name: response.first_name,
          last_name: response.last_name,
          email: response.email,
          locale: response.locale,
          gender: genderLookup[response.gender] || 0,
          birthday: response.birthday 
        };
          
        data = response;
        $.ajax({
          url: "/saveUser.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function(response) {
            console.log("User successfully saved : " + response);
            window.location = "/palette.php";
          }, 
          error: function(response) {
            console.log("User unsuccessfully saved : " + response);
          }
        });
      }); 
    } else {
      console.log('User cancelled login or did not fully authorize.');
    }   
  }, { scope : "email, user_birthday" }); 
});
