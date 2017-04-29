<?php
include("headboss.php");
?>

<body>
		<div class="row">
          <div class="panel-group">
            <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font></div>
              <div class="panel panel-default">
                <div class="panel-heading">
                        <h1 class="page-header" > <img src="Manager-icon.png" style="width:66px;height:66px;">Director</h1>
               </div>


                <div class="panel-body">

        <!-- Page Content -->
        <div class="container">


                <div class="col-md-5 portfolio-item">
                  <div class="panel panel-default">
								<div class="panel-footer"><b><font size="5">รายงาน</font></b></div>
								</div>
                    <h4>
                  <i class="fa fa-file-text" style="font-size:28px"></i>&nbsp;<a href="breportusingroom.php">รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</a>
                </h4>
                    <h4>
                    <i class="fa fa-file-text-o" style="font-size:28px"></i>&nbsp;<a href="breportsickness.php">รายงานข้อมูลตามอาการ</a>
                </h4>
                    <h4>
                    <i class="fa fa-file-o" style="font-size:28px"></i>&nbsp;<a href="breportdrug.php">รายงานข้อมูลยาทั้งหมด</a>
                </h4>
                    <h4>
                <i class="fa fa-ambulance" style="font-size:28px"></i>&nbsp;<a href="breporthospital.php">รายงานส่งโรงพยาบาล</a>
              </h4>

                </div>
            </div>
            <!-- /.row -->

            <hr>

            

        </div></div></div></div></div>
        <!-- /.container -->
				<center>
				<img src="main2.png"style="width:281px;height:135px; "></center>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>
