<?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
  $query = "SELECT * FROM addmedicine where id_med like '%{$_POST['id_name']}%'";
  //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
  $result = mysqli_query($con, $query);
  //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
  //หัวข้อตาราง
?>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <<td>รหัสยา</td>
                <td>ชื่อยา</td>
                <td>วันหมดอายุ</td>
                <td>ขนาดบรรจุภัณฑ์</td>
                <td>หน่วย</td>
                <td>บรรจุ</td>
                <td>หน่วย</td>
                <td>วิธีใช้</td>
                <td>สรรพคุณ</td>
                <td>คำเตือน</td>
                <td>แก้ไข</td>
                <td>ลบ</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; while ($result = mysql_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $result['id_med'];?></td>
                <td><?php echo $result['name_med'];?></td>
                <td><?php echo $result['expiredDate'];?></td>
                <td><?php echo $result['packagingdimensions'];?></td>
                <td><?php echo $result['prov1'];?></td>
                <td><?php echo $result['packup'];?></td>
                <td><?php echo $result['prov2'];?></td>
                <td><?php echo $result['howtouse'];?></td>
                <td><?php echo $result['properties'];?></td>
                <td><?php echo $result['warning'];?></td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>
