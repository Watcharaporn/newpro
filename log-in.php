
<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Nurse Room Management Information System</title>

  <link rel="stylesheet" href="css/reset.css">

 <link rel="stylesheet" href="css/stylelogin.css" media="screen" type="text/css" />


</head>

<body>


<center>
<div class="wrap">
  <div class="avatar">
    <img src="medicine-box-2-icon.png">
  </div>
<div id="loginbox">
<div class="col-xs-3">
<form action="checklogin.php" method="post">
<input type="text" class="form-control"  name="username" size="20" placeholder="username"  />
<div class="bar">
  <i></i>
</div>
<input type="password" class="form-control"  name="password" size="20" placeholder="password"  />
	<button  type="submit" value=" Log in "> LOGIN</button></div>
</div>
</form>
</div>

   </center>
  <script src="js/index.js"></script>
</body>
</html>
