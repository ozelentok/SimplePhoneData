<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Oz's Phones Dataviewer - Phone Comparison</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="wrapper">
	  <h1>Oz's Phones Dataviewer - Phone Comparison</h1>
	  <?php
	  include 'templates/navi.html';
  	$dbc = mysqli_connect('localhost', 'root', 'toor', 'phonedata');
	  $printFormFlag = true;
	  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  	if(count($_POST) > 1) {
				$printFormFlag = false;
				$query = 'SELECT * from phonespecs WHERE id IN';
				$arrayIn = array();
				foreach ($_POST as $id => $key) {
					if(is_numeric($id)) {
						$arrayIn[] = $id;
					}
				}
				$arrayIn = implode(", ", $arrayIn);
				$query = "$query ($arrayIn)";
				$result = mysqli_query($dbc, $query);
				$rows = array(0);
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
				while ($currentRow = mysqli_fetch_row($result)) {
					$rows[] = $currentRow;
				}
				echo "<div class=\"phoneSpec\">";
				echo "<table border=\"1\">";
				for ($tableRow = 1; $tableRow < count($tableHeaders); $tableRow++) {
					echo "<tr><th>" . $tableHeaders[$tableRow] . "</th>";
					for ($i = 1; $i < count($rows); $i++) {
						echo "<td>" . $rows[$i][$tableRow] . "</td>";
					}
					echo "</tr>";
				}
				echo "</table></div>";
			} // if(count($_POST) > 1) {
			else {
				echo "<p>No phones have been selected, please choose at least one phone</p>";
			}
	  } // POST
	  if($printFormFlag) {
	  	$query = "SELECT id, name FROM phonespecs";
	  	$result = mysqli_query($dbc, $query);
		?>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<p>Select phones for comparison</p>
		<?php
			while ($row = mysqli_fetch_row($result)) {
				echo "<input type=\"checkbox\" name=\"$row[0]\" />$row[1]<br />";
			}
		?>
				<input type="submit" value="Submit" name="submit" />
			</form>
		<?php
	  }
	  ?>
	</div>
	<?php
	include 'templates/footer.html';
	?>
</body> 
</html>
