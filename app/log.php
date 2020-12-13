<?php

$ip = isset($_POST['ip']) ? $_POST['ip'] : $_SERVER['REMOTE_ADDR'];
$id = $_POST['id'];


$date = date('Y-m-d');

$fp = fopen($date.".log","a+");


fwrite($fp, "button $id from $ip at $date \n ");

fclose($fp);

$connection = mysqli_connect('db1.ho.ua', 'eatherly', 'qwerty123', 'eatherly');
mysqli_set_charset($connection, 'utf8');
if (mysqli_connect_errno())
    echo mysqli_connect_error();

$query = "INSERT INTO log (ip, btn_id) VALUES ('".$ip."' , '".$id."');";

$result = mysqli_query($connection, $query);

echo $id


?>
