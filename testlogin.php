<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
  <title>Nurse Room Management Information System</title>

  <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <form action="checklogin.php" method="post">
  <section class="container">
      <section class="login-form">


    <div class="panel panel-default">
     <section>
    <center><br />   <img id="profile-img" class="profile-img-card" src="img_fjords.jpg"width="135" height="135" border="1" /></center>
    </section>
    <br     />
        <div class="panel-body">
          <form method="post" action="" role="login">
          <div class="form-group">
                                 <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

      <input id="username" type="text" class="form-control" name="username" placeholder="username">
    </div>
          </div>
         <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>

<br>
          <center>
          <div class="col-sm-6 col-sm-offset-3">
          <button class="btn btn-lg btn-primary btn-block" id="btnLogin" type="button">Login</button>
          </div></center>
        </form>
        </div>

    </div>


    </section>
  </section>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>



  <script>
          $('#btnLogin').click(function(e){
            var username = $('#username').val();
            var password = $('#password').val();

            $.ajax({
              method: 'POST',
              datatype: 'String',
              data: {username:username, password:password},
              url: 'checklogin.php',

              success: function(res){
                  console.log(res);
                  if(res == 'success'){
                    window.location.href = 'index.php';
                  }else {
                    alert('username หรือ password ไม่ถูกต้อง');
                  }
              }
            });
          });
      </script>
</body>
</html>
