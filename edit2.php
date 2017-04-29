<?php
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

<form id="form1" name="form1" method="post" action="edit.php">
รหัสยา
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
ชื่อยา
<input name="name_med" type="text" id="name_med" value="<?=$row_show['name_med']?>" />
<br /><br />
วันหมดอายุ
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
ขนาดบรรจุภัณฑ์
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
หน่วย
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
บรรจุ
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
หน่วย
<input name="id_med" type="text" id="id_med" value="<?=$row_show['id_med']?>" />
<br /><br />
วิธีใช้
<textarea name="address" id="address" cols="45" rows="5"><?=$row_show['address']?>
</textarea>
<br /><br />
สรรพคุณ
<textarea name="address" id="address" cols="45" rows="5"><?=$row_show['address']?>
</textarea>
<br /><br />
คำเตือน
<textarea name="address" id="address" cols="45" rows="5"><?=$row_show['address']?>
</textarea>
<br /><br />

<input type="submit" name="Add" id="Add" value="Edit" />
<input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" />

<a href="show.php">กลับ</a>
</form>
