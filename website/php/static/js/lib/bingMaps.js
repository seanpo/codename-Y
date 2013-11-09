var BingMaps = function (id, apiKey, locationRect) {
  var $this = this;
  this.infoboxList = [];
  this.dom = document.getElementById(id);
  this.map = new Microsoft.Maps.Map(this.dom, {
    credentials: apiKey,
    enableSearchLogo: false,
    bounds: locationRect 
  });

  this.createInfoBox = function (id, elem) {
    var html = $(format('#{0}_infobox', [id])).html();
    var infobox = new Microsoft.Maps.Infobox(new Microsoft.Maps.Location(0,0), { htmlContent: html, visible: false});
    infobox.element = elem;
    return infobox;
  }

  this.addPushpin = function (lat, lng, infobox, image, width, height) {
    if (image) {
      var pushpinOptions = { 
        icon: image, 
        width: width || 30, 
        height: height || 50
      };
    }

    var loc = new Microsoft.Maps.Location(lat, lng);
    var pushpin = new Microsoft.Maps.Pushpin(loc, pushpinOptions);

    if (infobox) {
      infobox.displayInfobox = function(e)
      {
        infobox.setOptions({ visible:true });
      };

      infobox.hideInfobox = function(e)
      {
        infobox.setOptions({ visible: false });
      };

      Microsoft.Maps.Events.addHandler(pushpin, 'click', infobox.displayInfobox);
      infobox.element.click(function() {
        for (var i = 0; i < $this.infoboxList.length; i++) {
          $this.infoboxList[i].hideInfobox();
        }
        if ($(this).hasClass('selected')) {
          $('.selected').removeClass('selected'); 
        } else {
          infobox.displayInfobox();
          $('.selected').removeClass('selected'); 
          $(this).addClass('selected'); 
        }
      });
      $this.map.entities.push(infobox);
      $this.infoboxList.push(infobox);
    }

    $this.map.entities.push(pushpin); 
  };
};
