<html>
<body bgcolor="violet">
<?php
session_start();
if(!isset($_SESSION['visited'])
{
$_SESSION['visited']=0;
echo "<p><h2>page views counter initialised</h2></p>\n";
}
else
{
$_SESSION['visied']++;
}
echo"<center><h2>Page view count is now &nbsp;<b>$_SESSION['visited']</b></h2></center><hr/>Reload this page to increment";
?>
</body>
</html>
