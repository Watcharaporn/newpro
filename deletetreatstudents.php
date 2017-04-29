<?php
    include 'connect.php';
$datetimes = $_GET['datetimes'];

$sql = "delete from addtreatstudent where datetimes='$datetimes'"; // กำหนดคำสั่ง SQL เพื่อลบข้อมูล กำหนดให้ลบตาม ID ที่เรากำหนด
if ($sql){
  header ("location:datatreatstudents.php");
} else {
  echo mysql_error();

}
$result = $con->query($sql);


?>
