<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apache Log</title>
</head>

<body>
<form id="form1" name="form1" method="post">
	<?php
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINKSERVER");
	$Sql="SELECT * FROM ApacheLog WHERE DATE_SUB(CURDATE(), INTERVAL 2 DAY) <= date(dateTime) ORDER BY dateTime DESC";
	$uresult = $mysqli->query($Sql);
	?>
	
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="107">&nbsp;</td>
        <td width="161">&nbsp;</td>
        <td width="522">&nbsp;</td>
        <td width="97">&nbsp;</td>
        <td width="91">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#D2D8F3">ID</td>
        <td bgcolor="#D2D8F3">IP</td>
        <td bgcolor="#D2D8F3">DateTime</td>
        <td bgcolor="#D2D8F3">Size</td>
        <td bgcolor="#D2D8F3">&nbsp;</td>
      </tr>
			<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
      <tr>
     			   <td bgcolor="#BBF8FD">&nbsp;<?php echo $row['ID'] ?></td>
      			   <td bgcolor="#BBF8FD">&nbsp;<?php echo $row['IP'] ?></td>
				   <td bgcolor="#BBF8FD"><?php echo $row['dateTime'] ?></td>
				    <td bgcolor="#BBF8FD"><?php echo $row['size'] ?></td>
	    <td bgcolor="#BBF8FD">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#D7EDEF">URL</td>
        <td colspan="4" bgcolor="#D7EDEF"><?php echo $row['URL'] ?></td>
      </tr>
      <tr>
        <td bgcolor="#A2BED3">UserAgent</td>
        <td colspan="4" bgcolor="#A2BED3"><?php echo $row['userAgent'] ?></td>
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
