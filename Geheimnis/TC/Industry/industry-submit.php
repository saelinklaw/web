<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php include("db.php"); ?>

	<?php
	
		$NAME = $_POST["NAME"];
	
	
		$Sql =  "INSERT INTO SL_INDUSTRY_CT (NAME,Date) VALUES  ('{$NAME}',NOW())" ;
		echo $Sql;
		if(strlen($NAME)>5)
		{
			$uresult = $mysqli->query($Sql);
		}
		    

		#$uresult = $mysqli->query($SQL);
	
		$BackURL = "industry-list.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>