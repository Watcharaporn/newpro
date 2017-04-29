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
  <li>ข้อมูลยา</li>
  <li>ข้อมูลยาทั้งหมด</li>
  </ul>
    <div class="panel-group">
      <div class="panel panel-default">
          <div class="panel-heading">
       <div class="col-8">
          <h3 class="page-header"> <i class="fa fa-medkit"style="font-size:36px"></i> ข้อมูลยาทั้งหมด </h3>
        </div>
            </div>


              <div class="panel-body">

        <table class="table table-striped table-bordered table table-hover" id="mydata">

          <!--หัวข้อตาราง-->
          <thead>
            <tr align='center' bgcolor='#BEBEBE'>
              <td>รหัสยา</td>
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
            <tfoot>
            </tfoot>

          <?php
          //1. เชื่อมต่อ database:
          include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
          //2. query ข้อมูลจากตาราง tb_member:
            $query_show = "SELECT * FROM addmedicine ORDER BY id_med asc" or die("Error:" . mysqli_error());

            //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
            $result_show = mysqli_query($con, $query_show);

            //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

            while($row_show = mysqli_fetch_array($result_show)) {
              echo "<tr align='center' bgcolor='#FFE4B5'>";
              echo "<td>" .$row_show["id_med"] .  "</td> ";
              echo "<td>" .$row_show["name_med"] .  "</td> ";
              echo "<td>" .$row_show["expiredDate"] .  "</td> ";
              echo "<td>" .$row_show["packagingdimensions"] .  "</td> ";
              echo "<td>" .$row_show["prov1"] .  "</td> ";
              echo "<td>" .$row_show["packup"] .  "</td> ";
              echo "<td>" .$row_show["prov2"] .  "</td> ";
              echo "<td>" .$row_show["howtouse"] .  "</td> ";
              echo "<td>" .$row_show["properties"] .  "</td> ";
              echo "<td>" .$row_show["warning"] .  "</td> ";

              //แก้ไขข้อมูล
              echo "<td><a href='editalldrug.php?id_med=$row_show[0]'>edit</a></td> ";

              //ลบข้อมูล
              echo "<td>
              <a href='deletealldrug.php?id_med=$row_show[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
              echo "</tr>";
            }
            echo "";
            //5. close connection
            mysqli_close($con);
            ?>

              </table>
      <br>  <br>  <br>
                        <center>

                             <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
        <br>  <br>  <br>
      </div></div>  </div>  </div>  </div>






        <!-- เส้นtable    <  <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        </style> -->




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

</body>
</html>
