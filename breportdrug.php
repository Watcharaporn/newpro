<?php

session_start(); //เปิด session

//ตรวจสอบว่าทำการ Login เข้าสู่ระบบมารึยัง
if($_SESSION['session_id'] ==''){
	echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
}

//ตรวจสอบสถานะว่าใช่ admin รึเปล่า ถ้าไม่ใช่ให้หยุดอยู่แค่นี้
else if($_SESSION['status'] != 2) {
	echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
} else {

}
?>
<html lang="th">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Nurse Room Management Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/col.css" rel="stylesheet">

    <!-- Icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- table -->
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- ปฏิทืน -->
<link href="css/jquery.datetimepicker.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=”col-lg-6”>
                <h1> โรงเรียนพัฒนาศาสตร์มูลนิธิ  </h1></div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<br>
    <div class="row">

      <table width="100%">   <td> <h1 class="page-header"><i class="fa fa-plus-square custom" style="font-size:36px"></i> รายงานข้อมูลยาทั้งหมด&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
  </table
    </div>

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
                <a href="indexboss.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>

        </div>
      </center>
<br><br>




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
