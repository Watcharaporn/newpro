<?php
    include 'connect.php';



$class = $_POST['class'];
$toclass = $_POST['toclass'];
$status = $_POST['status'];
$symptom = $_POST['symptom'];
$namedrug = $_POST['namedrug'];
$amountused = $_POST['amountused'];
$unit = $_POST['unit'];


$sql = 'INSERT INTO addtreatstudent ( class, toclass, status, symptom, namedrug, amountused, unit)
        VALUES ( "'.$class.'", "'.$toclass.'", "'.$status.'", "'.$symptom.'", "'.$namedrug.'", "'.$amountused.'", "'.$unit.'")';

        $result = $con->query($sql);
        echo 'success';

 ?>
