<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>T CHAT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>T</b>CHAT
  </div>
  <?php if(isset($_GET['error']))  echo '<br><div class="alert alert-danger alert-dismissible">
                      <h4><i class="icon fa fa-ban"></i> Erreur!</h4>
                        Les informations saisies sont incorrectes .
                    </div>';?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Connecte </p>

    <form action="../controller/users/connecte.php" method="get">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Login " name="login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Connecte</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="registre.php" class="text-center">Energistre un nouveau utilisateur</a>

  </div>
  <!-- /.login-box-body -->
</div>
</body>
</html>
