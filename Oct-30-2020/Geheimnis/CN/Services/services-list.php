<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php include("db.php"); ?>
<?php
	$Sql="SELECT * FROM SL_SERVICES ORDER BY ID ";
	$uresult = $mysqli->query($Sql);
?>
<body>
<form id="form1" name="form1" method="post">
  <table width="1026" border="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">SL_SERVICES</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td><a href="services.php">新建 </a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="52">&nbsp;</td>
        <td width="491">&nbsp;</td>
        <td width="43">&nbsp;</td>
        <td width="403">&nbsp;</td>
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
        <td>&nbsp;<a href="services-team.php?id=<?php echo $row['ID'] ?>"><?php echo $row['NAME'] ?></a></td>
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