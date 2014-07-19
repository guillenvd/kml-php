<html>
<head>
   <title>PHP+KML+HTML</title>
   <script src="//www.google.com/jsapi?key=ABQIAAAA5El50zA4PeDTEMlv-sXFfRSsTL4WIgxhMZ0ZK_kHjwHeQuOD4xTdBhxbkZWuzyYTVeclkwYHpb17ZQ"></script>
   <script type="text/javascript">
      var ge;
      google.load("earth", "1", {"other_params":"sensor=false"});

      function init()
	  {
         google.earth.createInstance('map3d', initCB, failureCB);
      }

      function initCB(instance) {
         ge = instance;
         ge.getWindow().setVisibility(true);
         var link = ge.createLink('');
         var href = 'http://127.0.0.1/php+kml/kml.php'
         link.setHref(href);
         var networkLink = ge.createNetworkLink('');
         networkLink.set(link, true, true); // Sets the link, refreshVisibility, and flyToView.
         ge.getFeatures().appendChild(networkLink);
      }
      function failureCB(errorCode)
	  {
      }
      google.setOnLoadCallback(init);
   </script>

</head>
<body>
<center>
   <div id="map3d" style="height:600px; width:800;"></div>
</center>
</body>
</html>