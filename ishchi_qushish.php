<?php
require_once("db.php");
if(isset($_POST['fio']) && isset($_POST['inn']) && isset($_POST['ish_joyi']) && isset($_POST['ishchi'])){
    $fio = $_POST['fio'];
    $inn = $_POST['inn'];
    $ish_joyi = $_POST['ish_joyi'];

    $result = mysqli_query($link, "INSERT INTO `ishchilar` (`id`, `fio`, `inn`, `ish_joyi`) VALUES (NULL, '$fio', '$inn', '$ish_joyi')");

    if($result){
        echo("Bazaga saqlandi!");
    }
    else{
        echo("Bazaga saqlashda xatolik yuz berdi!");
    }
    header("Location:blog-details.php");
    
}
?>