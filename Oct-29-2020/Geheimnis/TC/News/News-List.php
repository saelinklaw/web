<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php include("db.php"); ?>
<?php
	$Sql="SELECT * FROM NEWS ORDER BY ID DESC ";
	$uresult = $mysqli->query($Sql);
?>
<body>
<form id="form1" name="form1" method="post">
  <table width="1026" border="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">NEWS</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="52">&nbsp;</td>
        <td width="647">&nbsp;</td>
        <td width="116">&nbsp;</td>
        <td width="174">&nbsp;</td>
        <td width="15">&nbsp;</td>
      </tr>
      <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>&nbsp;</td>
        <td>DATE</td>
        <td>&nbsp;</td>
      </tr>
		<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
      <tr>
        <td>&nbsp;<?php echo $row['ID'] ?></td>
        <td>&nbsp;<?php echo $row['TITLE'] ?></td>
        <td>&nbsp;</td>
        <td><?php echo $row['DATE'] ?></td>
        <td>&nbsp;</td>
      </tr>
		<?php
		}
			
		
		?>
      <tr>
        <td>&nbsp;</td>
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