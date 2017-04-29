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
  <li>ข้อมูลการรักษาทั้งหมด</li>
  </ul>
  <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">
        <h3 class="page-header"><i class="fa fa-user-md" style="font-size:36px"></i> ข้อมูลจ่ายยา </h3>
      </div>

            <div class="panel-body">
    <div class="container">
      <table class="table table-striped table-bordered table table-hover" id="mydata">
        <thead>
            <tr>
              <th>รหัสยา</th>
                <th>ชื่อยา/อุปกรณ์ปฐมพยาบาล</th>
                <th>วันที่</th>
                <th>จำนวนที่ใช้ไป</th>
                <th>หน่วย</th>
                <th>จำนวนคงเหลือ</th>
                <th>หน่วย</th>

            </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody><center>
          <tr>
            <td>C02-11</td>
            <td>Hydroxycine</td>
            <td>5-10-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>30</td>
            <td>เม็ด</td>


          </tr>
          <tr>
            <td>C03-11</td>
            <td>Paracetamon</td>
            <td>8-07-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>80</td>
            <td>เม็ด</td>

          </tr><tr>
            <td>C02-11</td>
            <td>Hydroxycine</td>
            <td>8-07-59</td>
            <td>2</td>
            <td>เม็ด</td>
            <td>100</td>
            <td>เม็ด</td>

          </tr>
        </tbody></center>
</table>

            <br>
            <center>

                 <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
<br><br>
        </div>  </div>  </div>  </div>  </div>  </div>
      </center>





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
