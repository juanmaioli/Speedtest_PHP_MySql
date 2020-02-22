<?php
$date_test =  new DateTime(date("Y-m-d H:i:s"));
//$fecha->setTimezone(new DateTimeZone($usr_timezone));
$date_test = $date_test->format('Y-m-d H:i:s');

$speedtest_out = shell_exec('speedtest-cli --simple');
$speedtest_item = explode(PHP_EOL,$speedtest_out);
$ping = substr($speedtest_item[0], strpos($speedtest_item[0], " "), strrpos($speedtest_item[0], " ") - strpos($speedtest_item[0], " ")); 
$download = substr($speedtest_item[1], strpos($speedtest_item[1], " "), strrpos($speedtest_item[1], " ") - strpos($speedtest_item[1], " "));
$upload = substr($speedtest_item[2], strpos($speedtest_item[2], " "), strrpos($speedtest_item[2], " ") - strpos($speedtest_item[2], " ")); 

$hostname = shell_exec('hostname');

$ip_pub = shell_exec('curl ifconfig.io');
$ip_pub = str_replace(PHP_EOL,"",$ip_pub);


mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
//MySql Admin
$db_server = "SERVER";
$db_user = "User";
$db_pass = "PASSWORD";
$db_name = "DATABASE";

$conn = new mysqli($db_server, $db_user,$db_pass,$db_name);
mysqli_set_charset($conn,'utf8');
$sql = "INSERT INTO speedtest (date_test,ip,hostname,ping,download,upload) VALUES('" . $date_test . "','". $ip_pub . "', '". $hostname ."'," . trim($ping) .",".trim($download).",". trim($upload) . ")";
$result = $conn->query($sql);
$conn->close();
?>