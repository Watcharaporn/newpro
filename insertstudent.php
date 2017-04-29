<?php
    include 'connect.php';

$id_student = $_POST['id_student'];
$tname = $_POST['tname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$level = $_POST['level'];
$class = $_POST['class'];
$birthday = $_POST['birthday'];
$bloodtype = $_POST['bloodtype'];
$disease = $_POST['disease'];
$intolerance = $_POST['intolerance'];



$sql = 'INSERT INTO addstudents (id_student, tname, fname, lname, level, class, birthday, bloodtype, disease, intolerance)
        VALUES ("'.$id_student.'", "'.$tname.'", "'.$fname.'", "'.$lname.'", "'.$level.'", "'.$class.'", "'.$birthday.'", "'.$bloodtype.'", "'.$disease.'", "'.$intolerance.'")';

        $result = $con->query($sql);
        echo 'success';

 ?>
