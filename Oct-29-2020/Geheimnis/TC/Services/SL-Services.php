<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SL</title>
</head>
	
<?php include("db.php"); ?>
	
	
	
<?php
	$Sql="SELECT SL_ID FROM TEAM ORDER BY ID ";
	$uresult = $mysqli->query($Sql);
?>
	

<body>
<form action="SL-Services-S.php" method="post" name="form1" id="form1">
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="116">&nbsp;</td>
        <td width="770">&nbsp;</td>
        <td width="100">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
		<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
			
		<input type="radio" name="SL_ID" id="radio" value="<?php echo $row['SL_ID'] ?>">
        <label for="SL_ID"><?php echo $row['SL_ID'] ?></label>
		<?php

		}
		
		?> 
		  
		<?php

	     $Sql="SELECT ID,NAME FROM SL_SERVICES_CT ORDER BY ID ";
	     $uresult = $mysqli->query($Sql);
		
		?>   
		  
		  </td>

        <td>&nbsp;</td>
      </tr>

		 <tr>
        <td>&nbsp;</td>
        <td><hr></td>
        <td>&nbsp;</td>
      </tr>

	<?php
		while ($row = $uresult->fetch_assoc())
		{
		
		?>
		
		
      <tr>
        <td>&nbsp;</td>
        <td><input type="radio" name="SL_SERVICES" id="radio1" value="<?php echo $row['ID'] ?>">
        <label for="SL_ID"><?php echo $row['NAME'] ?></label></td>
        <td>&nbsp;</td>
      </tr>


		<?php

		}
		
		?> 
		 <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
		
			 <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
        <td>&nbsp;</td>
      </tr>
		
		
    </tbody>
  </table>
  <p>&nbsp;</p>
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="102">&nbsp;</td>
        <td width="310">&nbsp;</td>
        <td width="285">&nbsp;</td>
        <td width="133">&nbsp;</td>
        <td width="148">&nbsp;</td>
      </tr>
	<?php
			$Sql="SELECT * FROM V_SL_SERVICES_CT ORDER BY DATE DESC" ;
			$uresult = $mysqli->query($Sql);
	?>
	<?php
		while ($row = $uresult->fetch_assoc())
		{
		
	?>
      <tr>
        <td><?php echo $row['SL_ID'] ?></td>
        <td><?php echo $row['NAME'] ?></td>
        <td><?php echo $row['DATE'] ?></td>
        <td>&nbsp;</td>
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
  <p>&nbsp;</p>
</form>
</body>
</html>
