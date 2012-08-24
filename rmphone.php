<?php
	require 'templates/login.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Oz's Phones Dataviewer - Phone Removal</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="wrapper">
	  <h1>Oz's Phones Dataviewer - Phone Removal</h1>
	  <?php
	  include 'templates/navi.html';
  	$dbc = mysqli_connect('localhost', 'root', 'toor', 'phonedata');
	  $printFormFlag = true;
	  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  	if(count($_POST) > 1) {
				$printFormFlag = false;
				$queryPart = 'DELETE FROM phonespecs WHERE id=';
				foreach ($_POST as $id => $key) {
					if(is_numeric($id)) {
						$result = mysqli_query($dbc, $queryPart . $id);
					}
				}
				echo "Selected phones have been removed";
			}
			else {
				echo "<p>No phones have been selected, please choose at least one phone</p>";
			}
	  }
	  if($printFormFlag) {
	  	$query = "SELECT id, name FROM phonespecs";
	  	$result = mysqli_query($dbc, $query);
		?>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<p>Select phones for removal</p>
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
