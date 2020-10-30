<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINKPROJECT");
	
		$CONTENT = $_POST["CONTENT"];
	
		$SL_ID = $_POST["SL_ID"];	
		$ID = $_POST["ID"];	


	
		$Sql= "INSERT INTO PROJECT01 (CONTENT,SL_ID,PID,Date) VALUES  ('{$CONTENT}','{$SL_ID}',$ID,NOW())";
		echo $Sql;

		$uresult = $mysqli->query($Sql);
	
		$Sql= "UPDATE PROJECT01 SET DATE=NOW() WHERE ID = ".$ID;
		$uresult = $mysqli->query($Sql);
	
		$BackURL = "list.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>