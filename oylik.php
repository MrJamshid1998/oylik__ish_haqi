<?php
require_once("db.php");
if(isset($_POST['ishchi_id']) && isset($_POST['ish_stafka']) && isset($_POST['oklad']) && isset($_POST['ish_kuni']) && isset($_POST['oylik_date'])){
    $ishchi_id = $_POST['ishchi_id'];
    $ish_stafka = $_POST['ish_stafka'];
    $oklad = $_POST['oklad'];
    $ish_kuni = $_POST['ish_kuni'];
    $oylik_date = $_POST['oylik_date'];
    
    $stafka = $oklad * $ish_stafka;
    $pod_nalog = $stafka * 0.119;
    $profsoyuz = $stafka * 0.01;
    $inps = $stafka * 0.001;
    $oylik1 = $stafka - $pod_nalog - $profsoyuz -$inps;

    $oylik = $oylik1/30 * $ish_kuni;

    $result = mysqli_query($link, "INSERT INTO `oylik_hisobot` (`id`, `ishchi_id`, `ish_stafka`, `oklad`, `podo_nalog`, `profsoyuz`, `inps`, `oylik`, `ish_kuni`, `oylik_date`) 
    VALUES (NULL, '$ishchi_id', '$ish_stafka', '$oklad', '$pod_nalog', '$profsoyuz', '$inps', '$oylik', '$ish_kuni', '$oylik_date')");

    if($result){
        echo("Bazaga saqlandi!");
    }
    else{
        echo("Bazaga saqlashda xatolik yuz berdi!");
    }
    header("Location:blog-details.php");
    
}
?>