<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<?php
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINKPROJECT");
	$Sql="SELECT * FROM PROJECT01 WHERE PID IS NULL ORDER BY DATE DESC ";
	$uresult = $mysqli->query($Sql);
?>
<body>
<form id="form1" name="form1" method="post">
  <table width="1000" border="0">
    <tbody>

      <tr>
        <td>&nbsp;</td>
        <td><a href="new.php">新标题</a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="56">&nbsp;</td>
        <td width="591">&nbsp;</td>
        <td width="36">&nbsp;</td>
        <td width="48">&nbsp;</td>
        <td width="223">&nbsp;</td>
      </tr>

      <tr>
        <td bgcolor="#C5C6FB">ID</td>
        <td bgcolor="#C5C6FB">标题 / 内容</td>
        <td bgcolor="#C5C6FB"></td>
        <td bgcolor="#C5C6FB">&nbsp;</td>
        <td bgcolor="#C5C6FB">Date</td>
      </tr>
		<?php
		while ($row = $uresult->fetch_assoc())
		{
		?>
      <tr>
        <td bgcolor="#DDF7DD">&nbsp;<?php echo $row['ID'] ?></td>
        <td bgcolor="#DDF7DD">&nbsp;<?php echo $row['TITLE'] ?></td>
		<td bgcolor="#DDF7DD">&nbsp;<?php echo $row['SL_ID'] ?></td>
        <td bgcolor="#DDF7DD">&nbsp;<a href="new01.php?ID=<?php echo $row['SL_ID'] ?>&PID=<?php echo $row['ID'] ?>">新建</a></td>
        <td bgcolor="#DDF7DD">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['DATE'] ?></td>
      </tr>
	<?php
			$SQL2="SELECT * FROM PROJECT01 WHERE PID=". $row['ID'] ." ORDER BY DATE DESC" ;
			$R2 = $mysqli->query($SQL2);
			while ($row2 = $R2->fetch_assoc())
			{
	?>
      <tr>
        <td bgcolor="#D9E7F7">&nbsp;<?php echo $row2['ID'] ?></td>
        <td bgcolor="#D9E7F7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['CONTENT'] ?></td>
        <td bgcolor="#D9E7F7">&nbsp;<?php echo $row['SL_ID'] ?></td></td>
        <td bgcolor="#D9E7F7">&nbsp;</td>
        <td width="20" bgcolor="#D9E7F7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['DATE'] ?></td>
      </tr>
			<?php
			}
	?>
<?php
		}
		?>
    </tbody>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>