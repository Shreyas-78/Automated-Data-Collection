<html>
<body>
<style>
table,td,th
{
border:1px solid black;
width:33%;
text-align:center;
border-collapse:collapse;
background-color:lightblue;
}
table
{
margin:auto;
}
</style>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="weblab";
$a=[];
$conn=mysqli_connect,$servername,$username,$password,$dbname);
if($conn->connect_error)
die("connection failes:",$conn->connect_error);
$sql="SELECT *FROM can";
$result=$conn->query($sql);
echo"<br>";
echo"<center>BEFORE SORTING</center>";
echo"<table border='2'>";
echo"<tr>";
echo"<th>USN</th><th>NAME</th><th>ADDRESS</th</tr>";
if($result->num_rows>0)
{
while($row=$result->fetch_assoc()){
echo"<tr>"
echo"<td>".$row["usn"]."</td>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["address"]."</td>";
echo"</ssstr>"
}
?>
</body>
</html>
