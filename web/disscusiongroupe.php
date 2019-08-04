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
            <div class="col-md-12 box box-info" style="position: relative;overflow-x: hidden; overflow-y: scroll;  height: 600px;">
            <div class="box-header with-border">
			      <i class="fa fa-comments-o"></i>
			  <h3 class="box-title">Disscusion Groupe</h3>
            </div>
             <?php
						require_once ('../model/users.php');
						require_once ('../model/message.php');
                        require_once('../service/messsageservice.php');
                        require_once('../service/userservice.php');
                        $ss = new MessageService();
                        $us = new UserService();
						$tab = array("text" => "", "dateenvoi" => "", "userenvoi" => "" , "id" => "");
                        foreach ($ss->getGroupe() as $s) {
							if($tab['id'] != ""  && $tab['id'] != $s->getUserEnvoi()  ){
								//affichage
								
					 ?>
					
					   <!-- Chat box -->
				    <div>
						  <!-- chat item -->
						  <div class="item">

							<p class="message">
							  <a href="#" class="name">
								<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $tab['dateenvoi']; ?></small>
								<?php echo $tab['userenvoi']; ?>
							  </a>
							  <?php echo $tab['text']; ?>
							</p>
						  </div>
						  <!-- /.item -->
					 <?php 
								$tab['text'] = $tab['text'] .' <br> '.$s->getText();
							   $tab = array("text" => "", "dateenvoi" => "", "userenvoi" => "", "id" => "");
							}
							if($tab['id'] == ""){ 
								$tab['userenvoi'] = ($us->getById($s->getUserEnvoi()) != null)?$us->getById($s->getUserEnvoi())->getLogin() : "";// trouve le name et logine	
								$tab['dateenvoi'] = $s->getDateEnvoi();
								$tab['id'] = $s->getUserEnvoi();
								
								$tab['text'] = "";
							}
							$tab['text'] = $tab['text'] .' <br> '.$s->getText();
                         }
						 ?>
						 <?php 
						 if($tab['id'] != ""  ){
								//affichage dernier elements	
					       ?>
					
					   <!-- Chat box -->
				   
						  <!-- chat item -->
						  <div class="item">

							<p class="message">
							  <a href="#" class="name">
								<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $tab['dateenvoi']; ?></small>
								<?php echo $tab['userenvoi']; ?>
							  </a>
							  <?php echo $tab['text']; ?>
							</p>
						  </div>
						  <!-- /.item -->
						 <?php
						 }
						 ?>
            
       
              
            </div>
            <!-- /.chat -->
            <div class="box-footer">
			<form action="../controller/messages/envoimessagegroupe.php" method="get">
              <div class="input-group">
                <input class="form-control" placeholder=" message..." type="text" name="text" required>

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success" name="valide"><i class="fa fa-plus"></i></button>
                </div>
              </div>
              </form>
            </div>
          <!-- /.box (chat box) -->
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
