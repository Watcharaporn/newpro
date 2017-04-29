<meta charset="UTF-8">
<?php
include("head.php");
?>

<body>
    <div class="row">
      <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>

        <ul class="breadcrumb">
          <li>หน้าแรก</li>
          <li><a href="index.php">Admin</a></li>
          <li>ข้อมูลนักเรียน</li>
          <li>ข้อมูลนักเรียนทั้งหมด</li>
          </ul>
          <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">
        <h3 class="page-header"><i class="material-icons" style="font-size:36px"> people</i> ข้อมูลนักเรียนทั้งหมด</h3>
      </div>
  </div>

  <div class="panel-body">



  <table class="table table-striped table-bordered table table-hover" id="mydata">
    <thead>
      <tr align='center' bgcolor='#BEBEBE'>
        <td>รหัสนักเรียน</td>
        <td>คำนำหน้า</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>ระดับชั้น</td>
        <td>ปีที่</td>
        <td>วันเกิด</td>
        <td>หมู่เลือด</td>
        <td>โรคประจำตัว</td>
        <td>ยาที่แพ้</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
        <td>เพิ่มการรักษา</td>
      </tr>
  </thead>


      <?php
        //1. เชื่อมต่อ database:
        include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
        //2. query ข้อมูลจากตาราง tb_member:
          $query_show = "SELECT * FROM addstudents ORDER BY id_student asc" or die("Error:" . mysqli_error());
          //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
          $result_show = mysqli_query($con, $query_show);
          //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
          //หัวข้อตาราง


          while($row_show = mysqli_fetch_array($result_show)) {
            echo "<tr align='center' bgcolor='#FFE4B5'>";
            echo "<td>" .$row_show["id_student"] .  "</td> ";
            echo "<td>" .$row_show["tname"] .  "</td> ";
            echo "<td>" .$row_show["fname"] .  "</td> ";
            echo "<td>" .$row_show["lname"] .  "</td> ";
            echo "<td>" .$row_show["level"] .  "</td> ";
              echo "<td>" .$row_show["class"] .  "</td> ";
                echo "<td>" .$row_show["birthday"] .  "</td> ";
                  echo "<td>" .$row_show["bloodtype"] .  "</td> ";
                    echo "<td>" .$row_show["disease"] .  "</td> ";
                      echo "<td>" .$row_show["intolerance"] .  "</td> ";
            //แก้ไขข้อมูล
            echo "<td><a href='editstudentsdata.php?id_student=$row_show[0]'>edit</a></td> ";

            //ลบข้อมูล
            echo "<td>
            <a href='deletestudentsdata.php?id_student=$row_show[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
            echo "<td><a href='addtreatstudents.php?id_student=$row_show[0]'>add</a></td> ";
            echo "</tr>";
          }
          echo "";
          //5. close connection
          mysqli_close($con);
          ?>



</table>



  <br>  <br>  <br>
          <center>
              <a href="addstudents.php"><button type="button" class="btn btn-primary" name="addstudents" value="addstudent">เพิ่มข้อมูลนักเรียน</button></a> &nbsp; &nbsp;
              
               <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
<br>  <br>  <br>
</div></div>  </div> </div> </div>




  <!-- <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 5px;
                text-align: left;
            }
        </style> -->





</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
$('#mydata').dataTable();
</script>

</html>
