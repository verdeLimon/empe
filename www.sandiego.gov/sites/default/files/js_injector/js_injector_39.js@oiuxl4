jQuery('div.view-events a, div.view-attractions-list a').hover( function(e) {
 e.preventDefault();
 // Get the map using getMap() which needs the maps ID
  var mapID = jQuery('.gmap').attr('id');
  var map = Drupal.gmap.getMap(mapID);
  map = map.map;
  // Get the map's current markers
  var markers = map.markers;
title = jQuery(this).text();
title = title.replace("&","\u0026amp;");
title = title.replace("'","\u0027");
title = title.replace(" (link is external)","");
var pos = markers.map(function(x) { return x.title }).indexOf(title);
//var pos = markers.map(x => x.title).indexOf(title);
//alert(title);
google.maps.event.trigger(markers[parseInt(pos)], 'click');
//map.panTo(markers[parseInt(pos)].getPosition());
});