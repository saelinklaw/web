<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php include("db.php"); ?>

	<?php

	
		$NAME = $_POST["NAME"];
	
	
		$Sql =  "INSERT INTO SL_SERVICES_CT (NAME,DATE) VALUES  ('{$NAME}',NOW())" ;
		echo $Sql;
		if(strlen($NAME)>5)
		{
			$uresult = $mysqli->query($Sql);
		}
		    

		#$uresult = $mysqli->query($SQL);
	
		$BackURL = "services-list.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>