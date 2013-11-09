<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
   <head>
      <title>Map with search box off</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
      <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
      <script type="text/javascript">
        var map = null;
        function setPushpin(map, lat, lng, image) {
          var pushpinOptions = {icon: image, width: 30, height: 50}; 
          var loc = new Microsoft.Maps.Location(lat, lng);
          var pushpin= new Microsoft.Maps.Pushpin(loc, pushpinOptions);
          map.entities.push(pushpin);
        }   

        $('document').ready(function () {
          map = new Microsoft.Maps.Map(document.getElementById('myMap'), {credentials: 'Atfvzg0fcsby0NIxAo6aOjUlHNfALGhGsu1wQPOZWmIw2JRf8pomRxI6zOuO3jbu', enableSearchLogo: false});
        });

      </script>
   </head>
   <body>
      <div id='myMap' style="position:relative; width:400px; height:400px;"></div>
   </body>
</html>

