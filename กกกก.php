<?php
include("head.php");
?>

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


    <div class="row">
        <table width="100%">
            <td>
                <h1 class="page-header"> <i class="material-icons" style="font-size:36px"> people</i> ข้อมูลนักเรียนทั้งหมด&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
       </table> </div>



        <div class="container">

  <table class="table table-striped table-bordered table table-hover" id="mydata">
    <thead>
        <tr>
          <th>รหัสนักเรียน</th>
            <th>ชื่อ-สกุล</th>
            <th>ระดับชั้น</th>
            <th>วันเดือนปีเกิด</th>
            <th>edit</th>
        </tr>
    </thead>
    <tfoot>

    </tfoot>
    <tbody><center>
      <tr>
        <td>5610513025</td>
        <td>จุบจุบ</td>
        <td>มัธยมศึกษาปีที่6</td>
        <td>2-11-2537</td>
                <td><a href=index.php>แก้ไข<i class="material-icons" style="font-size:16px">mode_edit</i></a></td>
        </tr>
        <tr>
          <td>5610513025</td>
          <td>จุบจุบ</td>
          <td>มัธยมศึกษาปีที่6</td>
          <td>2-11-2537</td>
                  <td><a href=index.php>แก้ไข<i class="material-icons" style="font-size:16px">mode_edit</i></a></td>
          </tr>
          <tr>
            <td>5610513025</td>
            <td>จุบจุบ</td>
            <td>มัธยมศึกษาปีที่6</td>
            <td>2-11-2537</td>
                    <td><a href=index.php>แก้ไข<i class="material-icons" style="font-size:16px">mode_edit</i></a></td>
            </tr>
    </tbody></center>
</table>


  </div>


        <br>
        <center>
            <a href="addstudents.php"><button type="button" class="btn btn-primary" name="addstudents" value="addstudent">เพิ่มข้อมูลนักเรียน</button></a>
            <a href="addtreatstudents.php"><button type="button" class="btn btn-primary" name="addtreatstudents" value="back">เพิ่มข้อมูลการรักษา</button></a>
             <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>







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
