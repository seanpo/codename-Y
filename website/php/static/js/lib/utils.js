/*********************************************************** 
* Utility functions
***********************************************************/

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else 
    var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name,"",-1);
}

function getBaseURL() {
  var location = window.location;
  return location.protocol + "//" + location.hostname;
}

// Call back is needed because this function is asynchronous.
function getContent(path, cb) {
  $.ajax({
    type: 'GET',
    traditional: true,
    url: getBaseURL() + "/" + path,
    success: function (data){
      cb(data);
    }
  });
}

// Sets text input areas to take on the default class, and have a default value,
// Which will disappear upon focus. and will reappear upon blur if the value
// is nothing.

function setDefault(selector) {
  var $element = $(selector);

  $element.val($element.attr('default')).addClass('default');
  $element.focus( function () { 
    if ($element.val() == $element.attr('default')) {
      $element.removeClass('default');
      $element.val('');
    }   
  }); 

  $element.blur( function () { 
    if (!$element.val()) {
      $element.addClass('default');
      $element.val($element.attr('default'));
    }   
  }); 
}

// This function sets the dom element to run the call back if
// enter is pressed.

function onEnter( id, cb ) {
  var $element = $('#' + id);
  $element.keyup( function (e)  {
    if (e.keyCode === 13) {
      cb();
    }
  });
}
  
function getCenter() {
  return {"x": $(window).width()/2,
          "y": $(window).height()/2}
}

function randomize ( myArray ) {
  var i = myArray.length;
  if ( i == 0 ) return false;
  while ( --i ) {
     var j = Math.floor( Math.random() * ( i + 1 ) );
     var tempi = myArray[i];
     var tempj = myArray[j];
     myArray[i] = tempj;
     myArray[j] = tempi;
   }
}

function getKeys (obj) {
  var keys = [];
  for(var k in obj) keys.push(k); 
  return keys;
}

function toTitleCase(str) {
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function getResolution() {
	var width = window.innerWidth > 1024? window.innerWidth: 1024;
	var height = window.innerHeight > 640? window.innerHeight: 640;

	$("body").width(width);
	$("body").height(height);
}

function format(str, array) {
  replacements = str.match(/{[0-9]+}/g); 
  for (var i = 0; i < replacements.length; i++) {
    var replacement = replacements[i];
    var index = parseInt(replacement.match(/[0-9]+/)[0]);
    str = str.replace(replacement, array[index]);
  }
  return str;
}
