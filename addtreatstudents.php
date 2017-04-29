<?php
include("head.php");
include('connect.php');
if($_REQUEST['id_student'] != "")
{
$id = $_REQUEST['id_student'];
$query_show = "SELECT * FROM addstudents where id_student = '$id'";
$result_show = mysqli_query($con,$query_show);
$row_show = mysqli_fetch_array($result_show);
}
?>


<body>
  <div class="row">
    <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>

<ul class="breadcrumb">
<li>หน้าแรก</li>
<li><a href="index.php">Admin</a></li>
<li>ข้อมูลนักเรียน</li>
<li>เพิ่มข้อมูลนักเรียน</li>
</ul>
  <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">

              <h3 class="page-header">
                <i class="fa fa-plus-square custom" style="font-size:36px"></i> ข้อมูลการรักษา </h3></div>
      </div>

            <div class="panel-body">
              <div class="row">
  <center>


<form id="formDataTreatment">  <!--ล้างข้อมูล-->
            <br><br>

<table style="width:71%">
  <!---คอลัมแรก--->
             <tr><td>
           </td>
               <td><h4>รหัสนักเรียน : </h4></td>
                 <td><input type="text" name="id_student" value="<?=$row_show['id_student']?>" size="20" maxlength="10" disabled="disabled"></td>
                 <td><h4>ชื่อ-สกุล : </h4></td>
                   <td><input type="text" name="name" value="<?=$row_show['fname']?>&nbsp; &nbsp; &nbsp;<?=$row_show['lname']?>" size="20" maxlength="1" disabled="disabled"></td>


                 <td></td>
                 <td></td>
             </tr>

 <!---คอลัมสอง--->
             <tr>
               <td width="5%">
             </td>
             <td><h4> ระดับชั้น : </td>
              <td> <input type="text" name="level" value="<?=$row_show['level']?>ปีที่ <?=$row_show['class']?>" size="20" maxlength="1" disabled="disabled"></h4></td>
                 <td><h4> สถานะ : </h4></td>
                     <td><div class="col-xs-10">
                       <select class="form-control" name="status" id="status" data-width="fit">
                         <option value="">--- เลือกสถานะ --- </option>
                         <option value="นอน">นอน</option>
                         <option value="ไม่นอน">ไม่นอน</option>
                         <option value="ส่งโรงพยาบาล">ส่งโรงพยาบาล</option>
                       </select>
                         </div>
                     </td>
                     <td width="20%" ></td>

             </tr>

 <!---คอลัมสาม-->
             <tr>
               <td>
             </td>
               <td><h4>คาบเรียน : </h4></td>
               <td>
                 <input type="text" name="class" value="" size="1" maxlength="1"/> -
                 <input type="text" name="toclass" value="" size="1" maxlength="1"/>
               </td>


             </tr>

         </table>
 </center>
 <br><br><br><br>
         </div>
         </div>
           </div>
           </div>


 <!---ขึ้นตารางใหม่-->
   <div class="panel panel-default">
         <div class="panel-heading">
           <div class="col-8">

               <h3 class="page-header">
                 <i class="material-icons" style="font-size:36px">add_circle</i> รายละเอียด</h3></div>
                 <br><br>

                 <div class="panel-body">
                     <div class="row">


 <center>
         <div class="" style=";">
         <table style= "width:72%">

 <!---คอลัมแรก--->
                       <tr><td width=5%></td>
                         <td><h4>อาการ : </h4></td>
                           <td colspan="2"><div class="col-xs-13">
                           <select class="form-control" name="symptom" id="symptom" data-width="fit" >
                             <option value="">--- เลือกอาการ ---</option>
                             <option value="ปวดหัว">ปวดหัว</option>
                             <option value="เป็นไข้">เป็นไข้</option>
                             <option value="ปวดท้อง">ปวดท้อง</option>
                             <option value="ปวดท้องประจำเดือน">ปวดท้องประจำเดือน</option>
                             <option value="อุบัติเหตุ">อุบัติเหตุ</option>
                           </select>
                         </div>&nbsp; &nbsp;&nbsp;&nbsp;
                       </td><td colspan="3"></td>
                     </tr>

 <!---คอลัมสอง--->
 <tr><td></td>
      <td valign="top"><h4>รหัสยา :</h4></td>
        <td colspan="3">
          <div class="col-xs-15">

            <select class="form-control"  name="namedrug" id="namedrug" data-width="fit">

            <?php
            include('connect.php');
            $query = "SELECT * FROM addmedicine";
            $result = mysqli_query($con, $query);
            while ($data = mysqli_fetch_array($result) ) {
            echo "<option value=$data[id_med]>$data[id_med]</option>";
            }
            ?>
            </select>
           </div>
         </td>
   </tr>


   <tr><td></td>
       <td valign="top"><h4>ชื่อยา :</h4></td>
         <td colspan="3">
           <div class="col-xs-15">

             <select class="form-control"  name="namedrug" id="namedrug" data-width="fit">

             <?php
             include('connect.php');
             $query = "SELECT * FROM addmedicine";
             $result = mysqli_query($con, $query);
             while ($data = mysqli_fetch_array($result) ) {
             echo "<option value=$data[name_med]>$data[name_med]</option>";
             }
             ?>
             </select>
            </div>
          </td>
    </tr>

 <!---คอลัมสาม--->
                     <tr><td></td>
                         <td><h4>จำนวนที่ใช้ :</td>
                           <td><input type="text" name="amountused" value="" size="1" maxlength="4"/></h4></td>

                         <td colspan="2"><div class="col-xs-11">
                           <select class="form-control" name="unit" id="unit" data-width="fit">
                               <option value="">--- หน่วย ---</option>
                               <option value="กล่อง">กล่อง</option>
                               <option value="กระปุก">กระปุก</option>
                               <option value="ขวด">ขวด</option>
                               <option value="แผง">แผง</option>
                               <option value="แผ่น">แผ่น</option>
                           </select>
                           </div>
                         </td>
                         <td width="55%"><button id="btnAdd" type="button" class="btn btn-default btn-sm" name="add" value="add"><span class = "glyphicon glyphicon-plus"></span> เพิ่ม</button>
                         </td>


                     </tr>
         </table>
         <br>  <br>

         </div>
                     </div>



 </div>



 <br>

 <center>
               <div class="container" >
           <div class="col-md-12 portfolio-item">
             <table class="table table-striped table-bordered table table-hover" id="mydata" Align="center">
               <thead>
                   <tr>
                     <th>ลำดับ</th>
                       <th>อาการ</th>
                         <th>รหัสยา</th>
                           <th>ชื่อยาที่ใช้รักษา</th>
                           <th>จำนวนยา</th>
                             <th>หน่วย</th>

                   </tr>
               </thead>
               <tfoot>
               </tfoot>
               <br>
               <tbody>


               </tbody>
             </table>
             </div>
</div>
</center>
<br>

<script language="javascript"></script>
<center>
<button id="btnSave" type="button" class="btn btn-success btn-sm" name="save" value="save"><span class = "glyphicon glyphicon-ok"></span> บันทึก</button> &nbsp;
<button type="reset" class="btn btn-danger btn-sm" name="reset" value="Reset"><span class = "glyphicon glyphicon-remove"></span> ล้าง</button> &nbsp;
<a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
</form>

  <br>  <br>  <br>



        </center>
        <br><br>
          </div>
  </div>
  </div>
</div>

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


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--date-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






        <!--table-->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script>
        $(document).ready(function() {
        	$('#mydata').dataTable({
        		"bLengthChange": false,
            "dataTables_info": false
        			   "scrollY":  "320px",
            "scrollCollapse": false,
            "paging":         false

        	});
        });
        </script>

        <script>
        $('#btnSave').click(function(e){

        	var data =  $('#formDataTreatment').serialize();
        	console.log("this is: "+data);
        	$.ajax({
        		method: 'POST',
        		datatype: 'String',
        		data: data,
        		url: 'inserttreastudents.php',

        		success: function(res){
        				console.log(res);
        				if(res=='success'){window.location.href = 'index.php';
        					alert("บันทึกข้อมูลสำเร็จแล้ว");
        				}else {
        				  alert("ไม่สามารถบันทึกข้อมูลได้");
        				}
        		}
        	});
        });


        </script>
        </body>

        </html>
