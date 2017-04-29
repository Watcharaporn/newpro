<?php
    include 'connect.php';
$id_student = $_GET['id_student'];

$sql = "delete from addstudents where id_student='$id_student'"; // กำหนดคำสั่ง SQL เพื่อลบข้อมูล กำหนดให้ลบตาม ID ที่เรากำหนด
if ($sql){
  header ("location:studentsdata.php");
} else {
  echo mysql_error();

}
$result = $con->query($sql);


?>
