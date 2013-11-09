$.map($('.hasDefault'), function(val, i) {
  setDefault(format("#{0}", [$(val).attr('id')]));
});

$('#submit').click(function () {
  var data = {}
  var $hasDefault = $('.hasDefault');
  for (var i = 0; i < $hasDefault.length; i++) {
    var field = $('.hasDefault')[i];
    var $field = $(field);
    if ($field.val() != $field.attr('default')) {
      data[$field.attr("id")] = $field.val();
    }
  }
  $.ajax({
    type: "POST",
    data: data,
    url: "/api/saveUser.php",
    success: function (response) {
      window.location.href = "/";
    },
    error: function (err) {
      alert("Make sure you fill in the required parameters.");
    }
  });
});
