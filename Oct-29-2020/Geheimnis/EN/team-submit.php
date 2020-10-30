<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	
		$SL_ID = $_POST["SL_ID"];
		$Name = $_POST["Name"];
		$Position = $_POST["Position"];
		$Tele = $_POST["Tele"];
		$Fax = $_POST["Fax"];
		$EMail = $_POST["EMail"];
		$Edu = $_POST["Edu"];
		$Qualification = $_POST["Qualification"];
		$Resume = $_POST["Resume"];
		$RepresentativeCase = $_POST["RepresentativeCase"];
	
	

	
	
		$Sql =  "INSERT INTO TEAM_EN (SL_ID,NAME,Position,TELE,FAX,EMAIL,EDU,Qualification,RESUME,RepresentativeCase,Date) VALUES  ('{$SL_ID}','{$Name}','{$Position}','{$Tele}','{$Fax}','{$EMail}','{$Edu}','{$Qualification}','{$Resume}','{$RepresentativeCase}',NOW())" ;
		echo $Sql;
		if(strlen($Name)>2)
		{
			$uresult = $mysqli->query($Sql);
		}
		    
	
		$BackURL = "teamlist.php";
		header(sprintf("Location: ./".$BackURL));
?>
<body>
</body>
</html>