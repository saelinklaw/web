<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<?php
	    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	
		$SQL = $_POST["SQL"];

        $SQL = str_replace(chr(13),'',$SQL);
		$SQL =str_replace('<br>','brbrbr',$SQL);
		$SQL =str_replace('<p>','ppppppp',$SQL);
		$SQL =str_replace('</p>','p1p1p1p1p1p1p1',$SQL); 
		$SQL = str_replace('<a>','aaaaaaa',$SQL);
		$SQL = str_replace('</a>','a1a1a1a1a1a1a1',$SQL);
	
		echo $SQL;

		#$uresult = $mysqli->query($SQL);
	
		#$BackURL = "teamlist.php";
		#header(sprintf("Location: ./".$BackURL));
?>
</head>

<body>
</body>
</html>