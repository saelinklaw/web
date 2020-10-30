<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="new01-submit.php" method="post" name="form1" id="form1">
	<?php
   $ID = $_GET["ID"];
   $PID = $_GET["PID"];

    $mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINKPROJECT");
	$Sql="SELECT * FROM PROJECT01 WHERE ID =".$PID.";" ;
	$uresult = $mysqli->query($Sql);
	
	$row = $uresult->fetch_assoc();
	
	?>

<table width="1135" border="0">
  <tbody>
    <tr>
      <td width="8">&nbsp;</td>
      <td colspan="2">MariaDB SAELINKPROJECT PROJECT01</td>
      <td width="124">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="109">&nbsp;</td>
      <td width="876">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>标题</td>
      <td><?php echo $row['TITLE'] ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>ID</td>
      <td><input name="ID" type="text" id="ID" value="<?php echo $row['ID'] ?>" size="30" readonly="readonly"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>SL_ID</td>
      <td>
        <input name="SL_ID" type="text" id="SL_ID" value="<?php  echo $ID;   ?>" size="30" readonly="readonly"></td>
      <td>&nbsp;</td>
    </tr>

  </tbody>

  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>内容</td>
      <td><textarea name="CONTENT" cols="80" rows="10" id="CONTENT"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>