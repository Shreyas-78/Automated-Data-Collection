<html>
<head><title>DIGITAL CLOCK</title><center><h2>DIGITAL CLOCK</h2></center></head>
<body bgcolor="pink">
<?php
header("refresh:1;url=prg7.php");
date_default_timezone_set('Asia/Kolkata');
?>
<center>
<table border="1px">
<tr>
<td>
<?php echo date("D:M:Y h:i:s A");?>
</td>
</tr>
</table>
</center>
</body>
</html>

