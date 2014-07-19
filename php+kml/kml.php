<?php 
// definimos la base de datos//
define("DB_SERVER", "127.0.0.1"); define("DB_USER", "root"); define("DB_PASS", ""); define("DB_NAME", "pro"); define("DB_TABLE", "terrenos"); 
// encabezamos xml para kml
header("Content-type: application/xml"); 
printf("<?xml version=\"1.0\" encoding=\"UTF-8\"?> <kml xmlns=\"http://earth.google.com/kml/2.0\"> <Document>"); 
//enfocamos en el terreno a utilizar 
printf("<LookAt> <latitude>31.806336</latitude> <longitude>-116.590879</longitude> <range>300</range> <tilt>0</tilt> <heading>80</heading> </LookAt>"); 
if ($db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS)) 
 {
	mysqli_select_db($db, DB_NAME); $query = "SELECT * FROM " . DB_TABLE;																				
	// si desearamos acomodar por ID  $query .= " ORDER BY id DESC"; 
	// guardamos el resultado de la bd 
	$result = mysqli_query($db, $query); 
 	// hacemos un while para crear el documento con todos los datos de la bd	 
 	while ($row = mysqli_fetch_object($result)) 
	{ 
	// This writes out a placemark with some data // -- Modify for your case -- 
 	printf('<Style id="COMPUTO">
		 				<LineStyle>
   						<width>3.0</width>
		 				 </LineStyle>			
						 <PolyStyle>
   						 <color>7f00ffff</color>
    					 </PolyStyle>
   						 </Style>
						 <Placemark id="%d">
                         <name>%s</name>  
		                 <description>
  						 <![CDATA[
		                 <hr>
						 <font color="Blue">%s</font>, 
						 <hr>
	                       ]]> </description>
                         <styleUrl>#COMPUTO</styleUrl>
                         <Polygon>
                         <extrude>2.0</extrude>
                         <altitudeMode>relativeToGround</altitudeMode>
                         <outerBoundaryIs>
                             <LinearRing>
                             <coordinates>
                      %s
                              </coordinates>
                              </LinearRing>
                              </outerBoundaryIs>
                           </Polygon>
                           </Placemark>', 	
		 htmlspecialchars($row->id), htmlspecialchars($row->name),//%d->id.....%s->name
		 htmlspecialchars($row->des), htmlspecialchars($row->cordenadas)//%s->addres(descri).....%f->lat
		 );     
	}; 
 // cerramos conexion a bd
 mysqli_close($db); }; 
// cerramos el doc kml y xml
printf(" </Document> </kml>"); ?>
