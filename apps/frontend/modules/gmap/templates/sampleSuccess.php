

<div id="mapContainer" style="width: 100%; height: 400px;"></div>

<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAEJm4vOMvpdDEHq1V1A6Kt5wM26MtXZs4&sensor=true">
</script>
<script type="text/javascript">
  function initialize() {
    var myOptions = {
      center: new google.maps.LatLng(-34.397, 150.644),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapContainer"),
        myOptions);
  }
  
  window.onload = initialize();
</script>