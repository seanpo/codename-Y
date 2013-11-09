var north;
var south;
var east;
var west;
var $locations = $('[location]');
for (var i = 0; i < $locations.length; i++) {
  var $loc = $($locations[i]).attr("location").split(",");
  if (i == 0) {
    east = west = $loc[0];
    north = south = $loc[1];
  } else {
    if (east < $loc[0]) {
      east = $loc[0];
    } 
    if (west > $loc[0]) {
      west = $loc[0];
    }
    if (north < $loc[1]) {
      north = $loc[1];
    }
    if (south > $loc[1]) {
      south = $loc[1];
    }
  }
}

var locationRect = Microsoft.Maps.LocationRect.fromCorners(new Microsoft.Maps.Location(east, south-10), new Microsoft.Maps.Location(west, north+10));

var bingMap = new BingMaps("map", "Atfvzg0fcsby0NIxAo6aOjUlHNfALGhGsu1wQPOZWmIw2JRf8pomRxI6zOuO3jbu", locationRect);

var $users = $('.user');
for (var i = 0; i < $users.length; i++) {
  var $user = $($users[i]);
  var loc = $user.attr("location");
  if (loc) {
    loc = loc.split(",");
    var id = $user.attr("id");
    infobox = bingMap.createInfoBox(id, $user, loc[0], loc[1]);
    bingMap.addPushpin(loc[0], loc[1], infobox, $user.attr("image"));
  }
}
