<?php
include("head.php");
?>


<body>

  <div class="row">
          <div class="panel-group"><div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>
              <div class="panel panel-default">
                <div class="panel-heading"><table width="100%">
                    <td>
                        <h1 class="page-header" > <img src="admin-icon.png" style="width:66px;height:66px;">Admin&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  </font >
              </td>     <small></small>
                 </h1>
               </table> </div>


                <div class="panel-body">
<div class="container">
              <div class="col-md-4 portfolio-item">
                    <div class="panel panel-default">
                <div class="panel-footer">

                  <b>ข้อมูลนักเรียน</b></div>
                </div>
                </table>
                  <h5>
                <i class="material-icons">person_add</i>&nbsp;<a href="addstudents.php">เพิ่มข้อมูลนักเรียน</a>
              </h5>
                  <h5>
                  <i class="material-icons">people</i>&nbsp;<a href="studantsdata.php">ข้อมูลนักเรียนทั้งหมด</a>
              </h5>
                  <h5>
                  <i class="material-icons">face</i>&nbsp;<a href="datatreatstudents.php">ข้อมูลการรักษาทั้งหมด</a>
              </h5>

              </div>

              <div class="col-md-4 portfolio-item">
                <div class="panel panel-default">
              <div class="panel-footer"><b>ข้อมูลยา</b></div>
              </div>
                  <h5>
                <i class="fa fa-plus-square" style="font-size:24px"></i>&nbsp;&nbsp;<a href="addmedicine.php">เพิ่มข้อมูลยา</a>
              </h5>
                  <h5>
              <i class="fa fa-user-md" style="font-size:24px"></i>&nbsp;&nbsp;<a href="dispensing.php">ข้อมูลจ่ายยา</a>
            </h5>
                  <h5>
                <i class="fa fa-medkit"style="font-size:24px"></i>&nbsp;<a href="alldrug.php">ข้อมูลยาทั้งหมด</a>
              </h5>

              </div>
              <div class="col-md-4 portfolio-item">
                <div class="panel panel-default">
              <div class="panel-footer"><b>รายงาน</b></div>
              </div>
                  <h5>
                <i class="fa fa-file-text" style="font-size:24px"></i>&nbsp;<a href="reportusingroom.php">รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล</a>
              </h5>
                  <h5>
                  <i class="fa fa-file-text-o" style="font-size:24px"></i>&nbsp;<a href="reportsickness.php">รายงานข้อมูลตามอาการ</a>
              </h5>
                  <h5>
                  <i class="fa fa-file-o" style="font-size:24px"></i>&nbsp;<a href="reportdrug.php">รายงานข้อมูลยาทั้งหมด</a>
              </h5>
                  <h5>
              <i class="fa fa-ambulance" style="font-size:24px"></i>&nbsp;<a href="reporthospital.php">รายงานส่งโรงพยาบาล</a>
              </h5>
<br><br><br><br><br><br><br><br>
              </div>
            </div>
  </div>
                </div>
              </div>
            </div>
              </div>

<center>
<img src="main2.png"style="width:281px;height:135px; "></center>



            <hr>



        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>



</body>

</html>
