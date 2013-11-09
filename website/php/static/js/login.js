setDefault('#email');
setDefault('#password');

$('#submit').click(function () {
  window.location.href = format("/map.php?email={0}&password={1}", [$('#email').val(), $('#password').val()]);
});
