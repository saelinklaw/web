<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SL</title>
</head>
	
<?php include("db.php"); ?>
	
	
	
<?php

	
	$SL_ID = $_POST["SL_ID"];
	$SL_NEWS = $_POST["SL_NEWS"];
	

	
	$Sql =  "INSERT INTO SL_ID_NEWS_ID  (SL_ID,SL_NEWS_ID,Date) VALUES  ('{$SL_ID}','{$SL_NEWS}',NOW())" ;
	echo $Sql;
	$uresult = $mysqli->query($Sql);
	
?>
	

<body>
<form id="form1" name="form1" method="post">
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="116">&nbsp;</td>
        <td width="770">&nbsp;</td>
        <td width="100">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>

        <td>&nbsp;</td>
      </tr>

		 <tr>
        <td>&nbsp;</td>
        <td><hr></td>
        <td>&nbsp;</td>
      </tr>

		
		
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>


    </tbody>
  </table>
</form>
</body>
</html>
