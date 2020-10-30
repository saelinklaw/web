<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<?php
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	$Sql="SELECT * FROM TEAM_EN ORDER BY ID";
	$uresult = $mysqli->query($Sql);
?>
<body>
<form id="form1" name="form1" method="post">
  <table width="1014" border="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">TEAM_EN MariaDB  SAELINK Database  TEAM_EN Table</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><a href="team.php">New </a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="23">&nbsp;</td>
        <td width="52">&nbsp;</td>
        <td width="135">&nbsp;</td>
        <td width="244">&nbsp;</td>
        <td width="250">&nbsp;</td>
        <td width="284">&nbsp;</td>
      </tr>
      <tr>
        <td>ID</td>
        <td>SL_ID</td>
        <td>Name</td>
        <td>Tele</td>
        <td>E-Mail</td>
        <td>Date</td>
      </tr>
		<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
      <tr>
        <td>&nbsp;<a href="team-en-update.php?id=<?php echo $row['SL_ID'] ?>"><?php echo $row['ID'] ?></a></td>
        <td>&nbsp;<a href="/en/saelink-team-en.php?id=<?php echo $row['SL_ID'] ?>"><?php echo $row['SL_ID'] ?></a></td>
        <td>&nbsp;<?php echo $row['NAME'] ?></td>
        <td>&nbsp;<?php echo $row['TELE'] ?></td>
        <td>&nbsp;<?php echo $row['EMAIL'] ?></td>
        <td>&nbsp;<?php echo $row['DATE'] ?></td>
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
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>