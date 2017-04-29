<?php
    include 'connect.php';
$id_med = $_GET['id_med'];

$sql = "delete from addmedicine where id_med='$id_med'"; // กำหนดคำสั่ง SQL เพื่อลบข้อมูล กำหนดให้ลบตาม ID ที่เรากำหนด
if ($sql){
  header ("location:alldrug.php");
} else {
  echo mysql_error();

}
$result = $con->query($sql);


?>
