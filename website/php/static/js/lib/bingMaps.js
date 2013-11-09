var BingMaps = function (id, apiKey) {
  var $this = this;
  this.dom = document.getElementById(id);
  this.map = new Microsoft.Maps.Map(this.dom, {
    credentials: apiKey,
    enableSearchLogo: false
  });

  this.addPushpin = function (lat, lng, image, width, height) {
    var pushpinOptions = { 
      icon: image, 
      width: width || 30, 
      height: height || 50
    };
    var loc = new Microsoft.Maps.Location(lat, lng);
    var pushpin = new Microsoft.Maps.Pushpin(loc, pushpinOptions);
    $this.map.entities.push(pushpin); 
  };
};
