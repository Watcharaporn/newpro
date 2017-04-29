<?php
include("head.php");
?>


<body>

  <div class="row">
          <div class="panel-group">
            <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font></div>
              <div class="panel panel-default">
                <div class="panel-heading">

                        <h1 class="page-header" > <img src="admin-icon.png" style="width:66px;height:66px;">Admin
             </div>


                <div class="panel-body">

<div class="container">


<?php
include("connect.php");

//$sqlChkExpire = "SELECT * FROM addtreatstudent where ORDER BY datetimes asc" or die("Error:" . mysqli_error());
//$qNExpire = mysql_query($sqlChkExpire) or die(mysql_error());


function status_date_notify($endDate){
    $chk_day_now=time();
    $chk_day_expire=strtotime($endDate);
    $chk_day30=strtotime($endDate." -30 day");
    $chk_day15=strtotime($endDate." -15 day");
    $chk_day7=strtotime($endDate." -7 day");
    //  สามารถเพิ่มตัวแปร และเงื่อนไข เพิ่มเติมสำหรับตรวจสอบได้ตามต้องการ
    if($chk_day_now>=$chk_day_expire){
        return 5; // เงื่อนไขรายการเมื่อหมดอายุ
    }else{
        if($chk_day_now>=$chk_day30 && $chk_day_now<$chk_day15){
            return 4; // เงื่อนไขรายการจะหมดอายุในอีก 30 วัน
        }elseif($chk_day_now>=$chk_day15 && $chk_day_now<$chk_day7){
            return 3; // เงื่อนไขรายการจะหมดอายุในอีก 15 วัน
        }elseif($chk_day_now>=$chk_day7 && $chk_day_now<$chk_day_expire){
            return 2; // เงื่อนไขรายการจะหมดอายุในอีก 7 วัน
        } //else{
        //    return 1; // เงื่อนไขรายการยังไม่หมดอายุ
      //  }
    }
}
////////////////////////////////////////////////
//////        ตัวอย่างการประยุกต์ใช้งานอย่างง่าย
//////////////////////////////////////////////////


$case_notify=status_date_notify("2017-05-10");
switch($case_notify){
    case 5:   ?>
    <div class="alert alert-danger"><strong>คำเตือน!</strong>
    <?   echo "เงื่อนไขรายการเมื่อหมดอายุ"; ?>

    </div>
      <?
        break;
    case 4:
        echo "เงื่อนไขรายการจะหมดอายุในอีก 30 วัน";
        break;
    case 3: ?>
    <div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<strong>คำเตือน!</strong>
    <? echo "มียาที่กำลังจะหมดอายุในอีก 15 วัน"; ?>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  </div>
      <?  break;
    case 2:  ?>
    <div class="alert alert-danger" role="alert" ><strong><i class="glyphicon glyphicon-alert"> คำเตือน! </i></strong>
    <? echo "มียาที่กำลังจะหมดอายุในอีก 7 วัน"; ?>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    </div>
      <?

  //      break;
  //  default:  // กรณีค่าเท่ากับ 1
  //      echo "เงื่อนไขรายการยังไม่หมดอายุ";
        break;
}

?>

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
                  <i class="material-icons">people</i>&nbsp;<a href="studentsdata.php">ข้อมูลนักเรียนทั้งหมด</a>
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
                  <!--  <h5>
            <i class="fa fa-ambulance" style="font-size:24px"></i>&nbsp;<a href="reporthospital.php">รายงานส่งโรงพยาบาล</a>
          </h5> -->
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
