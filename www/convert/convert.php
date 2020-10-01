<!DOCTYPE html>
<html>
<body>

<head><title>TimeConverter</title>

 <?php

//$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

//$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

if(isset($_POST['Convert'])) {
$zone = $_POST["timezone"];
$dt = new DateTime();
$auckland_time = new DateTimeZone('Pacific/Auckland');
$dt->setTimezone($auckland_time);
echo "The local date time is " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
switch($_REQUEST['timezone']) {
case 'Pacific/Niue':
$dt = new DateTime();
$niue_time = new DateTimeZone('Pacific/Niue');
$dt->setTimezone($niue_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Niue'");
echo "The date and time in Niue is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Niue is -23 hours";
//}
break;

case 'Pacific/Honolulu':
$dt = new DateTime();
$honolulu_time = new DateTimeZone('Pacific/Honolulu');
$dt->setTimezone($honolulu_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Honolulu'");
echo "The date and time in Honolulu Hawaii USA is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Honolulu is -22 hours";
//}
break;

case 'Pacific/Gambier':
$dt = new DateTime();
$gambier_time = new DateTimeZone('Pacific/Gambier');
$dt->setTimezone($gambier_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Gambier'");
echo "The date and time in Gambier Islands is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Gambier is -21 hours";
//}
break;

case 'Pacific/Pitcairn':
$dt = new DateTime();
$pitcairn_time = new DateTimeZone('Pacific/Pitcairn');
$dt->setTimezone($pitcairn_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Pitcairn'");
echo "The date and time in Pitcairn Islands is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Pitcairn is -20 hours";
//}
break;

case 'America/Phoenix':
$dt = new DateTime();
$phoenix_time = new DateTimeZone('America/Phoenix');
$dt->setTimezone($phoenix_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='America/Phoenix'");
echo "The date and time in Phoenix Arizona USA is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Phoenix is -19 hours";
//}
break;

case 'Chile/EasterIsland':
$dt = new DateTime();
$time = new DateTimeZone('Chile/EasterIsland');
$dt->setTimezone($time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Chile/EasterIsland'");
echo "The date and time in Easter Island Chile is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Easter Island is -18 hours";
//}
break;

case 'America/Chicago':
$dt = new DateTime();
$chicago_time = new DateTimeZone('America/Chicago');
$dt->setTimezone($chicago_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='America/Chicago'");
echo "The date and time in Chicago Illinois USA is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Chicago is -17 hours";
//}
break;

case 'America/New_York':
$dt = new DateTime();
$new_york_time = new DateTimeZone('America/New_York');
$dt->setTimezone($new_york_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='America/New_York'");
echo "The date and time in New York City New York USA is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and New York is -16 hours";
//}
break;


case 'America/Argentina/Buenos_Aires':
$dt = new DateTime();
$buenos_aires_time = new DateTimeZone('America/Argentina/Buenos_Aires');
$dt->setTimezone($buenos_aires_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='America/Argentina/Buenos_Aires'");
echo "The date and time in Buenos Aires Argentina is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Buenos Aires is -15 hours";
//}
break;

case 'Atlantic/South_Georgia':
$dt = new DateTime();
$south_georgia_time = new DateTimeZone('Atlantic/South_Georgia');
$dt->setTimezone($south_georgia_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Atlantic/South_Georgia'");
echo "The date and time in South Georgia is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and South Georgia is -14 hours";
//}
break;

case 'Atlantic/Cape_Verde':
$dt = new DateTime();
$cape_verde_time = new DateTimeZone('Atlantic/Cape_Verde');
$dt->setTimezone($cape_verde_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Atlantic/Cape_Verde'");
echo "The date and time in Cape Verde is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Cape Verde a is -13 hours";
//}
break;

case 'Iceland':
$dt = new DateTime();
$iceland_time = new DateTimeZone('Iceland');
$dt->setTimezone($iceland_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Iceland'");
echo "The date and time in Iceland is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Iceland a is -12 hours";
//}
break;

case 'Africa/Kinshasa':
$dt = new DateTime();
$kinshasa_time = new DateTimeZone('Africa/Kinshasa');
$dt->setTimezone($kinshasa_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Africa/Kinshasa'");
echo "The date and time in Kinshasa Democratic Republic of Congo is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Kinshasa a is -11 hours";
//}
break;

case 'Africa/Johannesburg':
$dt = new DateTime();
$johannesburg_time = new DateTimeZone('Africa/Johannesburg');
$dt->setTimezone($johannesburg_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Africa/Johannesburg'");
echo "The date and time in Johannesburg South Africa is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Johannesburg a is -10 hours";
//}
break;

case 'Asia/Baghdad':
$dt = new DateTime();
$baghdad_time = new DateTimeZone('Asia/Baghdad');
$dt->setTimezone($baghdad_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Asia/Baghdad'");
echo "The date and time in Baghdad Iraq is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Baghdad is -9 hours";
//}
break;

case 'Asia/Dubai':
$dt = new DateTime();
$dubai_time = new DateTimeZone('Asia/Dubai');
$dt->setTimezone($dubai_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Asia/Dubai'");
echo "The date and time in Dubai United Arab Emirates is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
//  echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Dubai is -8 hours";
//}
break;

case 'Indian/Maldives':
$dt = new DateTime();
$maldives_time = new DateTimeZone('Indian/Maldives');
$dt->setTimezone($maldives_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Indian/Maldives'");
echo "The date and time in Maldives is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
//  echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Maldives is -7 hours";
//}
break;

case 'Asia/Omsk':
$dt = new DateTime();
$omsk_time = new DateTimeZone('Asia/Omsk');
$dt->setTimezone($omsk_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Asia/Omsk'");
echo "The date and time in Omsk Russia is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Omsk is -6 hours";
//}
break;

case 'Asia/Krasnoyarsk':
$dt = new DateTime();
$krasnoyarsk_time = new DateTimeZone('Asia/Krasnoyarsk');
$dt->setTimezone($krasnoyarsk_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Asia/Krasnoyarsk'");
echo "The date and time in Krasnoyarsk Russia is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Krasnoyarsk is -5 hours";
//}
break;

case 'Australia/Perth':
$dt = new DateTime();
$perth_time = new DateTimeZone('Australia/Perth');
$dt->setTimezone($perth_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Australia/Perth'");
echo "The date and time in Perth Australia is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
  //echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Perth is -4 hours";
//}
break;

case 'Asia/Tokyo':
$dt = new DateTime();
$tokyo_time = new DateTimeZone('Asia/Tokyo');
$dt->setTimezone($tokyo_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Asia/Tokyo'");
echo "The date and time in Tokyo Japan is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Tokyo is -3 hours";
//}
break;

case 'Pacific/Guam':
$dt = new DateTime();
$guam_time = new DateTimeZone('Pacific/Guam');
$dt->setTimezone($guam_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Guam'");
echo "The date and time in Guam is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Guam is -2 hours";
//}
break;

case 'Pacific/Noumea':
$dt = new DateTime();
$noumea_time = new DateTimeZone('Pacific/Noumea');
$dt->setTimezone($noumea_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Noumea'");
echo "The date and time in Noumea New Caledonia is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Noumea is -1 hours";
//}
break;

case 'Pacific/Auckland':
$dt = new DateTime();
$auckland_time = new DateTimeZone('Pacific/Auckland');
$dt->setTimezone($auckland_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Auckland'");
echo "The date and time in Auckland New Zealand is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Auckland is 0 hours";
//}
break;

case 'Pacific/Apia':
$dt = new DateTime();
$apia_time = new DateTimeZone('Pacific/Apia');
$dt->setTimezone($apia_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Apia'");
echo "The date and time in Apia Samoa is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Apia is +1 hours";
//}
break;

case 'Pacific/Kiritimati':
$dt = new DateTime();
$kiritimati_time = new DateTimeZone('Pacific/Kiritimati');
$dt->setTimezone($kiritimati_time);
//$q = $pdo->query("SELECT offset FROM timezones WHERE name='Pacific/Kiritimati'");
echo "The date and time in Kiritimati Republic of Kiribati is: " . $dt->format('d-m-Y H:i:s A');
echo "<br>";
//while($row = $q->fetch()){
//$result=$row["offset"];
 // echo "The offset from GMT is " . "<tr><td>".$row["offset"]."</td></tr>\n";
//echo "<br>";
echo "The difference between local time and Kiritimati is +2 hours";
//}
break;

}
}

?>

<form method="post" action="http://ec2-100-26-134-17.compute-1.amazonaws.com/index.php">
<button name = "Back"type= "submit">Back</button>
</form>

</body>
</html>
