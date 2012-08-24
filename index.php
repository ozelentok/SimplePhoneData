<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Oz's Phones Dataviewer</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="wrapper">
	  <h1>Oz's Phones Dataviewer</h1>
	  <?php
	  include 'templates/navi.html';
	  $tableHeaders = array(
	  	'id',
	  	'Name',
	  	'Length',
	  	'Width(mm)',
	  	'Depth(mm)',
	  	'Weight(g)',
	  	'Resolution(Height)',
	  	'Resolution(Width)', 
	  	'Screen Size(Inch)',
	  	'Internal Storage(GB)',
	  	'MicroSD Capacity(GB)',
	  	'Camera(MP)',
	  	'LED Flash',
	  	'Operating System',
	  	'OS Version',
	  	'Battery Capacity(mAh)'
	  );
	  $dbc = mysqli_connect('localhost', 'root', 'toor', 'phonedata');
	  $query = 'SELECT * from phonespecs';
	  $result = mysqli_query($dbc, $query);
	  while ($row =  mysqli_fetch_row($result)) {
	  	echo "<div class=\"phoneSpec\">";
	  	echo "<h2>" . $row[1] . "</h2>";
	  	echo "<table border=\"1\">";
	  	for ($i = 2; $i < count($row); $i++) {
	  		echo "<tr><th>" . $tableHeaders[$i] . "</th>";
	  		echo "<td>" . $row[$i] . "</td></tr>";
	  	}
	  	echo "</table>";
	  	echo "</div>";
	  }
	  ?>
	</div>
	<?php
	include 'templates/footer.html';
	?>
</body> 
</html>
