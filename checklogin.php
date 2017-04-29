<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

 $sql ='SELECT count(*),status FROM user_nrm WHERE username = "'.$_POST['username'].'" and  password = "' .$_POST['password'].'" ';
 $query = $con->query($sql);
 $result = $query->fetch_array();

$row = $result[0];

if($row == 1){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['status'] = $result[1];

    echo 'success';
}else{
  	echo 'fail';

}


 ?>
