<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
		
		$SL_ID = $_POST["SL_ID"];
		$LANGUAGE = $_POST["LANGUAGE"];
		$TELE = $_POST["Tele"];
		$FAX = $_POST["Fax"];
		$NAME = $_POST["Name"];
		$EDU = $_POST["Edu"];
		$Qualification = $_POST["Qualification"];
		$Position=$_POST["Position"];


	
		$LANGUAGE =str_replace('"','\"',$LANGUAGE);
		$LANGUAGE =str_replace("'","\'",$LANGUAGE);

		
		$Resume = $_POST["Resume"];
		$Resume = str_replace(chr(13),'',$Resume);
		$Resume =str_replace('<','\<',$Resume);
		$Resume =str_replace('>','\>',$Resume);
		$Resume =str_replace('.','\.',$Resume);
		$Resume =str_replace('/','\/',$Resume);
		$Resume =str_replace('\\','\\',$Resume);
		$Resume =str_replace('"','\"',$Resume);
		$Resume =str_replace("'","\'",$Resume);
	

	
			
		$RepresentativeCase = $_POST["RepresentativeCase"];
		$RepresentativeCase = str_replace(chr(13),'',$RepresentativeCase);
		$RepresentativeCase =str_replace('<','\<',$RepresentativeCase);
		$RepresentativeCase =str_replace('>','\>',$RepresentativeCase);
		$RepresentativeCase =str_replace('.','\.',$RepresentativeCase);
		$RepresentativeCase =str_replace('/','\/',$RepresentativeCase);
		$RepresentativeCase =str_replace('\\','\\',$RepresentativeCase);
		$RepresentativeCase =str_replace('"','\"',$RepresentativeCase);
		$RepresentativeCase =str_replace("'","\'",$RepresentativeCase);
	

	
	
		$Sql =  " UPDATE TEAM_EN SET LANGUAGE ='{$LANGUAGE}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);
		$Sql =  " UPDATE TEAM_EN SET Resume ='{$Resume}' WHERE SL_ID ='".$SL_ID."';" ;
		
		$uresult = $mysqli->query($Sql);
		$Sql =  " UPDATE TEAM_EN SET RepresentativeCase ='{$RepresentativeCase}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);
	
		$Sql =  " UPDATE TEAM_EN SET TELE ='{$TELE}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);
		$Sql =  " UPDATE TEAM_EN SET FAX ='{$FAX}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);

		$Sql =  " UPDATE TEAM_EN SET Qualification ='{$Qualification}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);
		echo $Sql;
		    
		$Sql =  " UPDATE TEAM_EN SET NAME ='{$NAME}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);
		$Sql =  " UPDATE TEAM_EN SET EDU ='{$EDU}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);

		
		$Sql =  " UPDATE TEAM_EN SET Position ='{$Position}' WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);



		$Sql =  " UPDATE TEAM_EN SET DATE = NOW() WHERE SL_ID ='".$SL_ID."';" ;
		$uresult = $mysqli->query($Sql);

	
	 
		$BackURL = "../../en/saelink-team-en.php?id=".$SL_ID;
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>