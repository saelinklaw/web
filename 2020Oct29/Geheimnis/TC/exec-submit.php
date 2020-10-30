<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	
		$SQL = $_POST["SQL"];

	
		echo $SQL;

		$uresult = $mysqli->query($SQL);
	
		$BackURL = "teamlist.php";
		#header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>