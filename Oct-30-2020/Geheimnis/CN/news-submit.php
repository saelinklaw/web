<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	
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

		echo $CONTENTHTML;
	
		$Sql =  "INSERT INTO NEWS (TITLE,CONTENTHTML,Date) VALUES  ('{$TITLE}','{$CONTENTHTML}',NOW())" ;
		#echo $Sql;
		if(strlen($TITLE)>2)
		{
			$uresult = $mysqli->query($Sql);
		}
		    

		#$uresult = $mysqli->query($SQL);
	
		$BackURL = "newslist.php";
		header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>