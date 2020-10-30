<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<?php
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
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
        <td><a href="news.php">新建 </a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="52">&nbsp;</td>
        <td width="491">&nbsp;</td>
        <td width="201">&nbsp;</td>
        <td width="245">&nbsp;</td>
        <td width="15">&nbsp;</td>
      </tr>
      <tr>
        <td>ID</td>
        <td>TITLE</td>
        <td>CONTENTHTML</td>
        <td>Date</td>
        <td>&nbsp;</td>
      </tr>
		<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
      <tr>
        <td>&nbsp;<a href="/news.php?id=<?php echo $row['ID'] ?>"><?php echo $row['ID'] ?></a></td>
        <td>&nbsp;<a href="newupdate.php?id=<?php echo $row['ID'] ?>"><?php echo $row['TITLE'] ?></a></td>
        <td>&nbsp;<?php echo $row['TELE'] ?></td>
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