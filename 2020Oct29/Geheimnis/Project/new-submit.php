<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINKPROJECT");
	
		$TITLE = $_POST["TITLE"];
	
		$SL_ID = $_POST["SL_ID"];	
	


	
		$Sql= "INSERT INTO PROJECT01 (TITLE,SL_ID,Date) VALUES  ('{$TITLE}','{$SL_ID}',NOW())";
		echo $Sql;

			$uresult = $mysqli->query($Sql);

	
		$BackURL = "list.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>