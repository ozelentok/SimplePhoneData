<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Oz's Phones Dataviewer - Phone Addition</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="wrapper">
	  <h1>Oz's Phones Dataviewer - Phone Addition</h1>
	  <?php
	  include 'templates/navi.html';
	  $printFormFlag = true;
	  $printErrorFlag = false;
	  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  	$dbc = mysqli_connect('localhost', 'root', 'toor', 'phonedata');
	  	$valsArray = array(0);
	  	$printFormFlag = false;
	  	
	  	// check for empty fields
	  	foreach($_POST as $key => $val) {
				if (empty($val)) {
					$printFormFlag = true;
					$printErrorFlag = true;
					break 1;
				}
				else if ($key != 'submit') {
					$valsArray[] = "'" . mysqli_real_escape_string($dbc, $val) . "'";
				}
			}
			// if no empty field has been found, submit to server
			if(!$printFormFlag) {
				$valsQuery = implode(", ", $valsArray);
				$query = "INSERT INTO phonespecs VALUES ($valsQuery)";
				$result = mysqli_query($dbc, $query);
				if ($result) {
					echo "Phone Addition has been sucessful!";
				}
				else {
					echo "ERROR!, Phone Addition aborted";
				}
	  	}
	  }
	  if ($printFormFlag) {
	  	if($printErrorFlag) {
	  		echo '<span id="error">Sorry, but the form is not valid, ';
  			echo 'You have forgotten to fill at least one of the fields</span>';
  		}
	  ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		  <label>Name: <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Length(mm): <br /><input name="length" type="text" /></label>
		  <br />
		  <label>Width(mm): <br /><input name="width" type="text" /></label>
		  <br />
		  <label>Depth(mm): <br /><input name="depth" type="text" /></label>
		  <br />
		  <label>Weight(grams): <br /><input name="weight" type="text" /></label>
		  <br />
		  <label>Resolution(Height): <br /><input name="rslHeight" type="text" /></label>
		  <br />
		  <label>Resolution(Width): <br /><input name="rslWidth" type="text" /></label>
		  <br />
		  <label>Screen Size(Inch): <br /><input name="size" type="text" /></label>
		  <br />
		  <label>Internal Storage(GB): <br /><input name="intStorage" type="text" /></label>
		  <br />
		  <label>MicroSD Capacity(GB): <br /><input name="cardStorage" type="text" /></label>
		  <br />
		  <label>Camera(MP): <br /><input name="cameraMP" type="text" /></label>
		  <br />
		  <label>LED Flash:</label><br />
		  <input name="led" value="1" type="radio" />Yes
		  <input name="led" value="0" type="radio" />No
		  <br />
		  <label>Operating System: <br /><input name="os" type="text" /></label>
		  <br />
		  <label>OS Version: <br /><input name="osv" type="text" /></label>
		  <br />
		  <label>Battery Capacity(mAh): <br /><input name="battery" type="text" /></label>
		  <br />
		  <input type="submit" value="Submit" name="submit" />
		</form>
		
		<?php
		}
		?>
	</div>
	<footer>
		Copyrights &copy Oz Elentok. All Rights Reserved.
	</footer>
</body> 
</html>
