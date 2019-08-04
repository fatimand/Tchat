	 <?php 
	 $name=$_SESSION["name"];
	 $login=$_SESSION["login"];
	 $id=$_SESSION["id"];
	 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>T CHAT</title>
      <link href="css/minified-v11.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/icon" href="favicon.ico"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!--  Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo" style="color:blue; background-color:white;">
	<!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b> CHAT</span>
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" >  <b>T</b> CHAT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
		   <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
             
			<a href="../controller/users/disconnecte.php?id=<?php echo $id ;?>" class="pull-right" style="display:inline;">
					  <span class="glyphicon glyphicon-log-out"></span>
					</a>
					 <a href="#" class="pull-right" style="display:inline;">
                  Utilisateur: <?php echo $name .' '. $login ?>
                </a>

          </li>
		  
        </ul>
      </div>
    </nav>
  </header>