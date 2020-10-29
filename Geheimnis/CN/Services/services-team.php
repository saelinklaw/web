<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<?php
	$ID = $_GET["id"];
	
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	$Sql="SELECT * FROM SL_SERVICES WHERE ID ='".$ID."';" ;
	$uresult = $mysqli->query($Sql);
	
	$row = $uresult->fetch_assoc();
	

?>
<body>
<form action="services-team-submit.php" method="post" name="form1" id="form1">
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="90">&nbsp;</td>
        <td width="823">&nbsp;</td>
        <td width="73">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>ID</td>
        <td><input name="ID" type="text" id="ID" value="<?php echo $row['ID'] ?>" size="7"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>NAME</td>
        <td><input name="TITLE" type="text" id="TITLE" value="<?php echo $row['NAME'] ?>" size="130"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>TEAM</td>
 <?php

	$Sql="SELECT * FROM TEAM ORDER BY ID" ;
	$uresult = $mysqli->query($Sql);
	

?>
        <td> <?php
			
	while ($row = $uresult->fetch_assoc())
		{
		
		?>
			
			<input type="radio" name="SL_ID" id="radio" value="<?php echo $row['SL_ID'] ?>">
          <?php echo $row['SL_ID'] ?>      
			<?php } ?>
           </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="提交"></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>