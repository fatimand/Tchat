<?php 
   session_start();
   if(!isset($_SESSION['id'] ))
     header('location: http://localhost/chat/web/login.php');
      include("header.php");
      include("menu.php");
  ?> 
  <div>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="col-md-12 box box-info">
            <div class="box-header with-border">
			  <h3 class="box-title">Modifier un utilisateur</h3>
            </div>
            <?php
        
               if (isset($_GET['ok'])) {
        
             echo'<br><div class="alert alert-success alert-dismissible">
                <a type="button" class="close" href="../controller/users/afficheprofile.php?id='.$_SESSION['id'].'" data-dismiss="alert" aria-hidden="true">×</a>
                <h4><i class="icon fa fa-check"></i> Succé!</h4>
                Modification éffectuée avec succés </div> ';
          }
          else if (isset($_GET['error'])) { echo'<br><div class="alert alert-danger alert-dismissible">
                        <a type="button" href="../controller/users/afficheprofile.php?id='.$_SESSION['id'].'" class="close" data-dismiss="alert" aria-hidden="true">×</a>
                      <h4><i class="icon fa fa-ban"></i> Erreur!</h4>
                      Mot de passe incorrecte ou ne sont pas identique.
                    </div>';  
        }
        ?>
            <div>
              
            <form class="form-horizontal" method="get" action="../controller/users/modifierprofile.php">
              <div class="row">

              <div class="col-md-6 box-body" >
              	 <div class="form-group">
                  <label for="mod" class="col-sm-2 col-md-4 control-label" >Nom</label>

                  <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" id="nom" name="name" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>"required>
                  </div>
                </div>
				<div class="form-group">
                  <label for="mod" class="col-sm-2 col-md-4 control-label" >Professionnel</label>

                  <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" id="professionnel" name="professionnel" value="<?php if(isset($_SESSION['professionnel'])) echo $_SESSION['professionnel'];?>"required>
                  </div>
                </div>
                </div>
                 <div class="col-md-6 box-body" >
                <div class="form-group">
                  <label for="log" class="col-sm-2 col-md-4 control-label">Login</label>

                  <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" id="log"name="login" disabled value="<?php if(isset($_SESSION['login'])) echo $_SESSION['login'];?>"required>
                  </div>
                </div>
                 
                <div class="form-group">
                  <label for="mdp" class="col-sm-2 col-md-4 control-label" >Ancien MDP</label>

                  <div class="col-sm-10 col-md-8">
                    <input type="password" class="form-control" name="password"id="mdp" placeholder="old psswd" value="" required>
                  </div>
                </div>
                 
              </div>
                </div>
              <div class="col-md-4"></div>
              <div class=" col-md-4 form-group">
                <button  class="btn btn-default">Annuler</button>
                <button type="submit" class="btn btn-info pull-right"name="valider">Valider</button>
              </div>
               <div class="col-md-4"></div>
            </form>
          </div>
           </div>
            </div>
            </div>
        </section>
             </div>
<!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
