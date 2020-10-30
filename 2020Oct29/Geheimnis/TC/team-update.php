<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="team-update-submit.php" method="post" name="form1" id="form1">


	
<?php
	$ID = $_GET["id"];
	
	$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
	$Sql="SELECT * FROM TEAM_TC WHERE SL_ID ='".$ID."';" ;
	$uresult = $mysqli->query($Sql);
	
	$row = $uresult->fetch_assoc();
?>
	
	
	
<table width="1073" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20">&nbsp;</td>
      <td colspan="2">MariaDB SAELINK TEAM_TC 繁体</td>
      <td width="110">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="195">&nbsp;</td>
      <td width="569">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>SL_ID</td>
      <td><input name="SL_ID" type="text" id="SL_ID" value="<?php echo $row['SL_ID'] ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NAME</td>
      <td><input name="Name" type="text" id="Name" value="<?php echo $row['NAME'] ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>

  </tbody>

  <tbody>

    <tr>
      <td>&nbsp;</td>
      <td>Position</td>
      <td><input name="Position" type="text" id="Position" value="<?php echo $row['Position'] ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>CONTACT</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TELE</td>
      <td><input name="Tele" type="text" id="Tele" value="<?php echo $row['TELE'] ?>" size="30"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>FAX</td>
      <td><input name="Fax" type="text" id="Fax" value="<?php echo $row['FAX'] ?>" size="30"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>E-MAIL</td>
      <td><input name="EMail" type="text" id="EMail" value="<?php echo $row['EMAIL'] ?>" size="30"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>Edu</td>
      <td><textarea name="Edu" cols="80" rows="5" id="Edu"><?php echo $row['EDU'] ?></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>Admissions</td>
      <td><textarea name="Qualification" cols="80" rows="1" id="Qualification"><?php echo $row['Qualification'] ?></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>Profile</td>
      <td><textarea name="Resume" cols="130" rows="10" id="Resume"><?php echo $row['RESUME'] ?></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Recent Representations</td>
      <td><textarea name="RepresentativeCase" cols="130" rows="10" id="RepresentativeCase"><?php echo $row['RepresentativeCase'] ?></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Language</td>
      <td><input name="LANGUAGE" type="text" id="LANGUAGE" value="<?php echo $row['LANGUAGE'] ?>" size="80"></td>
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
<h1>&nbsp;</h1>
	</form>
</body>
</html>