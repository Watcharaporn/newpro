<?php
include("head.php");
?>


<body>
  <div class="row">
    <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>

  <ul class="breadcrumb">
  <li>หน้าแรก</li>
  <li><a href="index.php">Admin</a></li>
  <li>รายงาน</li>
  <li>รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</li>
  </ul>
  <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">
        <h3 class="page-header"><i class="fa fa-file-text" style="font-size:36px"></i> รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</h3>
      </div>

            <div class="panel-body">
    <div class="container">
          <div id="printableArea">
        <center>
            <h2><strong>รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</strong></h2>
        <h3> <label for="month">ช่วงเวลา</label>

<select name="month" id="month" >
	<option value = "1">มกราคม</option>
	<option value = "2">กุมภาพันธ์</option>
	<option value = "3">มีนาคม</option>
	<option value = "4">เมษายน</option>
	<option value = "5">พฤษภาคม</option>
	<option value = "6">มิถุนายน</option>
	<option value = "7">กรกฎาคม</option>
	<option value = "8">สิงหาคม</option>
	<option value = "9">กันยายน</option>
	<option value = "10">ตุลาคม</option>
	<option value = "11">พฤศจิกายน</option>
	<option value = "12">ธันวาคม</option>
</select>

<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear()+543;
  for(var i = 2550; i < year+1; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>

-
<select name="month" id="month" >
	<option value = "1">มกราคม</option>
	<option value = "2">กุมภาพันธ์</option>
	<option value = "3">มีนาคม</option>
	<option value = "4">เมษายน</option>
	<option value = "5">พฤษภาคม</option>
	<option value = "6">มิถุนายน</option>
	<option value = "7">กรกฎาคม</option>
	<option value = "8">สิงหาคม</option>
	<option value = "9">กันยายน</option>
	<option value = "10">ตุลาคม</option>
	<option value = "11">พฤศจิกายน</option>
	<option value = "12">ธันวาคม</option>
</select>
<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear()+543;
  for(var i = 2550; i < year+1; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>
</h3>
        </center>
        <table class="table table-striped table-bordered table table-hover" id="mydata">
          <thead>
            <tr>
              <th>รหัสนักเรียน</th>
                <th>ชื่อ-สกุล</th>
                <th>ระดับชั้น</th>
                <th>วันที่:เวลาที่เข้าใช้</th>
                <th>คาบเรียน</th>
                <th>สถานะ</th>
                <th>อาการ</th>
                <th>ชื่อยา</th>
                <th>จำนวนที่ใช้</th>
                <th>หน่วย</th>

            </tr>
          </thead>

          <tbody><center>
            <?php
              //1. เชื่อมต่อ database:
              include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
              //2. query ข้อมูลจากตาราง tb_member:
                $query_show = "SELECT * FROM addstudents,addtreatstudent ORDER BY id_student,datetimes asc" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result_show = mysqli_query($con, $query_show);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                //หัวข้อตาราง


                while($row_show = mysqli_fetch_array($result_show)) {

                  echo "<tr align='center' bgcolor='#FFE4B5'>";
                  echo "<td>" .$row_show["id_student"] .  "</td> ";
                  echo "<td>"  .$row_show["fname"] .  " " .$row_show["lname"] .  "</td> ";
                  echo "<td>" .$row_show["level"] .  "</td> ";
                  echo "<td>" .$row_show["datetimes"] .  "</td> ";
                  echo "<td>" .$row_show["class"] .    "-" .$row_show["toclass"] .  "</td> ";
                  echo "<td>" .$row_show["status"] .  "</td> ";
                  echo "<td>" .$row_show["symptom"] .  "</td> ";
                    echo "<td>" .$row_show["namedrug"] .  "</td> ";
                      echo "<td>" .$row_show["amountused"] .  "</td> ";
                        echo "<td>" .$row_show["unit"] .  "</td> ";


                }
                echo "";
                //5. close connection
                mysqli_close($con);
                ?>

          </tbody></center>
      </table>
    </div>





            <br>
            <center>

                <button type="button" class="btn btn-primary" name="print" value="print" onclick="printDiv('printableArea')" value="print a div!">พิมพ์</button> &nbsp; &nbsp;&nbsp;&nbsp;
                <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>

        </div>
      </center>
<br><br>
</div></div></div></div>



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



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
$('#mydata').dataTable();
</script>
<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}
</script>

</html>
