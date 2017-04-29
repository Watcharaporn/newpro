<?php

session_start(); //เปิด session

//ตรวจสอบว่าทำการ Login เข้าสู่ระบบมารึยัง
//if($_SESSION['session_id'] ==''){
//	echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
//}

//ตรวจสอบสถานะว่าใช่ admin รึเปล่า ถ้าไม่ใช่ให้หยุดอยู่แค่นี้
//else if($_SESSION['status'] != 1) {
	//echo "<meta http-equiv='refresh' content='1;URL=log-in.php'>";
//} else {

//}
?>
<!DOCTYPE html>
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
<!-- Select-->
<link rel="stylesheet" href="css/bootstrap-select.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    ul.breadcrumb {
        padding: 1px 1px;
        list-style: none;
        background-color: #ffffff ;
        font-size: 14px;
    }
    ul.breadcrumb li {display: inline;}
    ul.breadcrumb li+li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
    }
    ul.breadcrumb li a {
        color: #0275d8;
        text-decoration: none;
    }
    ul.breadcrumb li a:hover {
        color: #01447e;
        text-decoration: underline;
    }
    </style>
</head>
<body>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class=”col-lg-6”><img src="5967462688536.png" ></div>

					<!-- Collect the nav links, forms, and other content for toggling -->

					<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
	</nav>
</body>
  <script src="js/bootstrap-select.js"></script>
  <script src="js/jquery.validate.min.js"></script>


</html>
