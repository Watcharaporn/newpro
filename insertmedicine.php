<?php
    include 'connect.php';


$id_med = $_POST['id_med'];
$name_med = $_POST['name_med'];
$expiredDate = $_POST['expiredDate'];
$packagingdimensions = $_POST['packagingdimensions'];
$prov1 = $_POST['prov1'];
$packup = $_POST['packup'];
$prov2 = $_POST['prov2'];
$howtouse = $_POST['howtouse'];
$properties = $_POST['properties'];
$warning = $_POST['warning'];




$sql = 'INSERT INTO addmedicine (id_med, name_med, expiredDate, packagingdimensions, prov1, packup, prov2, howtouse, properties, warning)
        VALUES ("'.$id_med.'", "'.$name_med.'", "'.$expiredDate.'", "'.$packagingdimensions.'", "'.$prov1.'", "'.$packup.'", "'.$prov2.'", "'.$howtouse.'", "'.$properties.'", "'.$warning.'")';

        $result = $con->query($sql);
        echo 'success';

 ?>
