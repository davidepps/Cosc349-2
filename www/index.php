<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Timezone Converter</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>
<body>

<p>You can convert to the following timezones:</p>
<table border="1">
<tr><th>Timezone IDs</th><th>Timezone Offset</th></tr>
<?php
session_start();
$db_host='database-1.czrnbghnwuyr.us-east-1.rds.amazonaws.com';
$db_name='asgn2db';
$db_user='admin';
$db_passwd='password';
$pdo_dsn="mysql:host=$db_host;dbname=$db_name";
$pdo=new PDO($pdo_dsn, $db_user, $db_passwd);

$q=$pdo->query("SELECT * FROM asgn2db.timezones");
while($row = $q->fetch()){
echo "<tr><td>".$row["name"]."</td><td>".$row["offset"]."</td></tr>\n";
}
?>

</table>
<form method=post action="http://ec2-35-175-199-53.compute-1.amazonaws.com/convert.php">
<label for"timezones"> Choose a timezone to convert</label>
<select name="timezone">
<?php

$q = $pdo->query("SELECT * FROM asgn2db.timezones");
while($row = $q->fetch()){
 echo "<option value='".$row['name']."'>".$row['name']."</option>";
}
?>
</select>
<input type="submit" value="Convert" name="Convert">
</form>

</body>
</html>