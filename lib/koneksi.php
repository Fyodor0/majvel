<?php

$hostname = 'localhost'; 
$username ='root';
$password = '';
$database_name = 'majvel';

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo 'gagal';
}else{
    echo 'berhasil';
}

?>