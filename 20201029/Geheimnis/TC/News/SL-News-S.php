<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SL</title>
</head>
	
<?php include("db.php"); ?>
	
	
	
<?php

	
	$SL_ID = $_POST["SL_ID"];
	$SL_NEWS = $_POST["SL_NEWS"];
	

	
	$Sql =  "INSERT INTO SL_ID_NEWS_ID_CT  (SL_ID,SL_NEWS_ID,Date) VALUES  ('{$SL_ID}','{$SL_NEWS}',NOW())" ;
	echo $Sql;
	$uresult = $mysqli->query($Sql);
	
?>
	

<body>
<form id="form1" name="form1" method="post">
  <table width="1000" border="0">
    <tbody>
      <tr>
        <td width="116">&nbsp;</td>
        <td width="770">&nbsp;</td>
        <td width="100">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>

        <td>&nbsp;</td>
      </tr>

		 <tr>
        <td>&nbsp;</td>
        <td><hr></td>
        <td>&nbsp;</td>
      </tr>

		
		
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>


    </tbody>
  </table>
</form>
</body>
</html>

<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'https://www.saelinklaw.com/SL-Analytics/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'aa5f0e4a448da7297c8b2649ffb6196b']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->