<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
		
		$ID = $_POST["ID"];
		$TITLE = $_POST["TITLE"];
		
	
		$TITLE =str_replace('"','\"',$TITLE);
		$TITLE =str_replace("'","\'",$TITLE);
	
		$CONTENTHTML = $_POST["CONTENTHTML"];

		$CONTENTHTML = str_replace(chr(13),'',$CONTENTHTML);
		$CONTENTHTML =str_replace('<','\<',$CONTENTHTML);
		$CONTENTHTML =str_replace('>','\>',$CONTENTHTML);
		$CONTENTHTML =str_replace('.','\.',$CONTENTHTML);
		$CONTENTHTML =str_replace('/','\/',$CONTENTHTML);
		$CONTENTHTML =str_replace('\\','\\',$CONTENTHTML);
		$CONTENTHTML =str_replace('"','\"',$CONTENTHTML);
		$CONTENTHTML =str_replace("'","\'",$CONTENTHTML);


	
		$Sql =  " UPDATE NEWS SET TITLE ='{$TITLE}' WHERE ID ='".$ID."';" ;
		$uresult = $mysqli->query($Sql);
		$Sql =  " UPDATE NEWS SET CONTENTHTML ='{$CONTENTHTML}' WHERE ID ='".$ID."';" ;
		#echo $Sql;
		$uresult = $mysqli->query($Sql);

		    

		#$uresult = $mysqli->query($SQL);
	
		$BackURL = "newslist.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>