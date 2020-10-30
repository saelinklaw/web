<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="new-submit.php" method="post" name="form1" id="form1">
	<?php
   $ID = $_GET["ID"];
		

	
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
      <td><input name="TITLE" type="text" id="TITLE" size="130"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>ID</td>
      <td>
        <input name="SL_ID" type="text" id="SL_ID" value="<?php  echo $ID;   ?>" size="30" readonly="readonly"></td>
      <td>&nbsp;</td>
    </tr>

  </tbody>

  <tbody>
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
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="提交"></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>