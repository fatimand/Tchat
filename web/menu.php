 <?php 
 $path=$_SERVER['PHP_SELF'];
 $file=basename($path);
 $name=$_SESSION["name"];
 $login=$_SESSION["login"];
 $id=$_SESSION["id"];
 ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <a href="../controller/users/afficheprofile.php?id=<?php echo $id ;?>">
      <div class="user-panel" style="height:52px;">

        <div class="pull-left info" >
          <p><?php echo $name;?> </p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
	  </a>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=<?php if ($file=='list_membre_connecte.php') echo'"active treeview"' ;else echo 'treeview'; ?>>
          <a href="list_membre_connecte.php">
            <i class="fa fa-tasks"></i>
            <span>Consulter les personnel connecte</span>
          </a>
        </li>
		<li class=<?php if ($file=='list_membres.php') echo'"active treeview"' ;else echo 'treeview'; ?>>
          <a href="list_membres.php">
            <i class="fa fa-users"></i>
            <span>Consulter tous les membres</span>
          </a>
        </li>
        <li class=<?php if ($file=='disscusiongroupe.php') echo'"active treeview"' ;else echo 'treeview'; ?>>
          <a href="disscusiongroupe.php">
            <i class="fa fa-user-plus"></i>
            <span>Disscusion groupe</span>
          </a>
        </li>
        <li class=<?php if ($file=='profile.php') echo'"active treeview"' ;else echo 'treeview'; ?>>
          <a href="../controller/users/afficheprofile.php?id=<?php echo $id ;?>">
            <i class="fa fa-expeditedssl"></i>
            <span>Espace personnel</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>