<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$baza = 'oylik';

$link = mysqli_connect($host, $user, $pass, $baza);
if(!$link){
    echo 'Хато: '
    .mysqli_connect_errno()
    .':'
    .mysqli_connect_error();
  }

?>