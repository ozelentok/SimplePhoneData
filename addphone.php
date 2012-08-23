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
	  <div id="navigator">
	  	<a href="addphone.php">Add a Phone</a>
	  </div>
	  <hr />
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		  <label>Name: <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Length(mm): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Width(mm): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Height(mm): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Weight(grams): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Resolution(Height): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Resolution(Width): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Screen Size(Inch): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Internal Storage(GB): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>MicroSD Capacity(GB): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Camera(MP): <br /><input name="name" type="text" /></label>
		  <br />
		  <label>LED Flash:</label><br />
		  <input name="LED" value="1" type="radio" />Yes
		  <input name="LED" value="0" type="radio" />No
		  <br />
		  <label>Operating System: <br /><input name="name" type="text" /></label>
		  <br />
		  <label>OS Version: <br /><input name="name" type="text" /></label>
		  <br />
		  <label>Battery Capacity(mAh): <br /><input name="name" type="text" /></label>
		  <br />
		  <input type="submit" value="Add" name="submit" />
		</form>
	</div>
	<footer>
		Copyrights &copy Oz Elentok. All Rights Reserved.
	</footer>
</body> 
</html>
