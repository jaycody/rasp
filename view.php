<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"  http-equiv="content-type">
  <title>View Users</title>
  <link rel="stylesheet" type="text/css"  href="default.css">
</head>
<body>
<div style="text-align: center;"><img
 style="width: 125px; height: 12tpx;" alt="Raspberrypi"
 src="large_logo_white.png"></div>
<br>


<?php
//Connect to MySQL
mysql_connect('127.0.0.1', 'root', 'password123') or die (mysql_error());
//Select database
mysql_select_db('raspberrypidb') or die (mysql_error());
$result = mysql_query("SELECT * from users");
//Table starting tag and header cells
echo " <table style='width: 75%; text-align: left; margin-left: auto; margin-right: auto;' border='0' cellpadding='2' cellspacing='2'><tr><th>User ID</th><th>Title</th><th>First Name</th><th>Surname</th></th><th>Age</th><th>eMail address</th></tr>";
while($row = mysql_fetch_array($result)){
   //Display the results in different cells
   echo "<tr><td>" . $row['userid'] . "</td><td>" . $row['title'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['sname'] . "</td><td>" . $row['age'] . "</td><td>" . $row['email'] . "</td></tr>";
}
//Table closing tag
echo "</table>";
?>

<br>
<a href="index.html">Back</a>

</body>
</html>


