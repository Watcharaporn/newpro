<?php
include("head.php");
// เชื่่อมต่อฐานข้อมูล
include('connect.php');
//เรียกข้อมูลจาก รหัส มาแสดงใน textbox



if($_REQUEST['id_med'] != "")

$id = $_REQUEST['id_med'];
$query_show = "SELECT * FROM addmedicine where id_med = '$id'";
$result_show = mysqli_query($con, $query_show);
$row_show = mysqli_fetch_array($result_show);

//--->

?>
<body>

<div class="row">
        <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>

  <ul class="breadcrumb">
    <li>หน้าแรก</li>
    <li><a href="index.php">Admin</a></li>
    <li>ข้อมูลยา</li>
    <li>เพิ่มประเภทยา</li>
  </ul>



<div class="panel panel-default">
  <div class="panel-body">
        <div class="row">
          <div class="col-8">
            <h3 class="page"><i class="material-icons" style="font-size:36px">add_circle</i>เพิ่มข้อมูลยา</h3>
            <div class="container">
                <center>
                    <div class="col-md-6" style=";">
                        <h:body>
                            <h:form>
                                <table width="80%">
                                  <form id="formDatamedicine">



                                    <tr>
                                        <td valign="top">
                                            <h4>  รหัสยา : </td>
                                              <td colspan="2">
                                                <input type="text" name="id_med" value="<?=$row_show['id_med']?>" size="10" maxlength="30"/> </h4></td>
                                    </tr>


                                    <tr>
                                        <td valign="top">
                                            <h4>ชื่อยา :</td>
                                              <td colspan="2">
                                                <input type="text" name="name_med" value="<?=$row_show['name_med']?>" size="28" maxlength="30"/></h4></td>
                                    </tr>


                                    <tr>
                                        <td valign="top">
                                            <h4>วันหมดอายุ :&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
                                              <td colspan="2">
                                                <div class="form-group"><input type="date" id="expiredDate" name="expiredDate" value="<?=$row_show['expiredDate']?>" class="form-control"></div>
                                              </td>
                                    </tr>


                    </div>
            </div>
                    </table>


<!--<div class="form-group"><input type="date" id="birthDate" class="form-control"></div>-->



                    <table width="80%">
                        <tr>
                            <td ALIGN=left valign="top">
                                <h4>ขนาดบรรจุภัณฑ์ :</td>
                          <td colspan="1"><input type="text" name="packagingdimensions" value="<?=$row_show['packagingdimensions']?>" size="5" maxlength="4"/></h4></td>

                            <td><select class="form-control" name="prov1" id="prov1"  data-width="fit">
                                  <option value="">หน่วย</option>
                                  <option value="กล่อง">กล่อง</option>
                                  <option value="กระปุก">กระปุก</option>
                                </select></td>
                            <td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>



                        <tr>
                            <td ALIGN=left valign="top">
                                <h4>บรรจุ :</td>
                                      <td colspan="1"><input type="text" name="packup" value="<?=$row_show['packup']?>" size="5" maxlength="4"/></h4> </td>
                            <td><select class="form-control" name="prov2" id="prov2" data-width="fit">>
                                  <option value="">หน่วย</option>
                                  <option value="เม็ด">เม็ด</option>
                                  <option value="ขวด">ขวด</option>
                                  <option value="แผ่น">แผ่น</option>
                                  <option value="แผง">แผง</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                    </h:form>
                    </h:body>
            </div>


            <div class="col-md-6" style=";">
                <h:body>
                    <h:form>
                        <table>
                            <tr>
                                <td valign="top">วิธีใช้ :</td>
                                <td><textarea name="howtouse" rows="12" cols="40" wrap="physical"><?=$row_show['howtouse']?></textarea></td>
                            </tr>
                              <td><br></td>
                            <tr>
                                <td valign="top">สรรพคุณ :</td>
                                <td><textarea name="properties" rows="15" cols="40" wrap="physical"><?=$row_show['properties']?></textarea></td>
                            </tr>
                            <td><br>   </td>
                            <tr>
                                <td valign="top">คำเตือน :</td>
                                <td><textarea name="warning" rows="12" cols="40" wrap="physical"><?=$row_show['warning']?></textarea></td>
                            </tr>
                            <td><br>   </td>

                        </table>
                    </h:form>
                    <br><br>
                </h:body>
                </center>
            </div>
            <br>







              <script language="javascript"></script>
              <center>
              <a href="alldrug.php"><button id="btnSave" type="button" class="btn btn-success btn-sm" name="save" value="save"><span class = "glyphicon glyphicon-ok"></span> บันทึก</button></a> &nbsp;
              <button type="reset" class="btn btn-danger btn-sm" name="reset" value="Reset"><span class = "glyphicon glyphicon-remove"></span> ล้าง</button> &nbsp;
              <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>

              </form>


                      </div>
                      </center>
                      <br><br>
                  </div>
                  </div>
                  </div>


<!--        <style>
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


<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/






</script>


<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
      $('#mydata').dataTable({
        "bLengthChange": false
        "dataTables_info": false
      });
    });

    </script>

    <script>
    $('#btnSave').click(function(e){

    	var data =  $('#formDatamedicine').serialize();
    	console.log("this is: "+data);
    	$.ajax({
    		method: 'POST',
    		datatype: 'String',
    		data: data,
    		url: 'insertmedicine.php',

    		success: function(res){
    				console.log(res);
    				if(res=='success'){
    					alert('Save Successfully.');
    				}
    		}
    	});
    });


    </script>

</body>
</html>
