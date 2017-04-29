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
  <li> รายงานส่งโรงพยาบาล</li>
  </ul>
  <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">
        <h3 class="page-header"><i class="fa fa-ambulance" style="font-size:36px"></i>  รายงานส่งโรงพยาบาล</h3>
      </div>

            <div class="panel-body">
    <div class="container">
        <center>
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
    </div>





            <br>
            <center>

                <button type="button" class="btn btn-primary" name="print" value="print" >พิมพ์</button> &nbsp; &nbsp;&nbsp;&nbsp;
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

</html>
