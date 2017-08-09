jQuery(function($){
  $(document).ready(function() {
//      $('div.stejnykontakt').css({"background-color":"green"});
      initialize_gmap();
  });
});

function initialize_gmap() {
  //https://maps.google.com/?ll=50.16156,12.280741&spn=0.047122,0.077162&t=m&z=14
    var mapCanvas = document.getElementById('map_canvas');
    var myLatlng = new google.maps.LatLng(50.162308,12.284679);
    directionsDisplay = new google.maps.DirectionsRenderer();
    var abydos = new google.maps.LatLng(50.162308,12.284679);
    var mapOptions = {
	zoom:10,
	disableDefaultUI: true,
	zoomControl: true,
	zoomControlOptions: {
	    style: google.maps.ZoomControlStyle.SMALL
	},
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	center: abydos
  }
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Abydos s.r.o.'
  });
  
  directionsDisplay.setMap(map);
}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57913203-1', 'auto');
  ga('send', 'pageview');

