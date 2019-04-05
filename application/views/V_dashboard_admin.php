<!DOCTYPE html>
<html lang="en" >
 
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/styles.css">

  
</head>

<body>

  <section>
    <header>
      <nav class="rad-navigation">
        <div class="rad-logo-container">
          <a href="<?php echo base_url(); ?>" class="rad-logo">Dashboard</a>
          <a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="rad-top-nav-container">
          <ul class="links">
            
            
            <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge"><?php foreach($angka as $o){ ?>

                 <?php echo $o->total; ?>

                  <?php } ?>
                    
                  </span></i></a>
              <ul class="rad-dropmenu-item">
                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                <li class="rad-notification-item">
                <?php 
                    foreach($notification as $u){ 
                        ?>
                  <a class="rad-notification-content" href="#">
                   <?php echo $u->keterangan; ?> <b><?php echo $u->username; ?></b>
                  </a><br><br>
                  <?php } ?>
                </li>
                <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="text-black"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp; <b><?php echo $this->session->userdata('nama') ?></b>
              </a>
              <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
  </section>


  <aside>
    <nav class="rad-sidebar">
      <ul>
        <li class="hidup">
          <a href="<?php echo base_url('admin/dashboard'); ?>" class="inbox">
            <i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
            <span class="rad-sidebar-item">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/album'); ?>">
            <i class="fa fa-file">
              <span class="icon-bg rad-bg-primary"></span>
            </i>
            <span class="rad-sidebar-item">Album</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/photos'); ?>">
            <i class="fa fa-image">
              <span class="icon-bg rad-bg-danger"></span>
            </i>
            <span class="rad-sidebar-item">Photos</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/users'); ?>">
            <i class="fa fa-users">
              <span class="icon-bg rad-bg-warning"></span>
            </i>
            <span class="rad-sidebar-item">Users</span>
          </a>
        </li>
<!--         <li><a href="#" class="snooz">
          <i class="fa fa-line-chart">
            <span class="icon-bg rad-bg-primary"></span>
          </i>
          <span class="rad-sidebar-item">Call trends</span>
        </a></li>
        <li><a href="#" class="done"><i class="fa fa-area-chart"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Heat maps</span></a></li>
        <li><a href="#"><i class="fa fa-wrench"><span class="icon-bg rad-bg-violet"></span></i><span class="rad-sidebar-item">Settings</span></a></li> -->
      </ul>
    </nav>
  </aside>

  <main>
    <section>
      <div class="rad-body-wrapper">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading1">
                <h3 class="panel-title text-center">User</h3>
              </div>
              <div class="panel-body">
               <h1 class="counter text-center text-primary" style="font-size:20;"><b><?php foreach($jmluser as $o){ ?>

                 <?php echo $o->total; ?>

                  <?php } ?></b></h1>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading2">
                <h3 class="panel-title text-center">Album</h3>
              </div>
              <div class="panel-body">
               <h1 class="counter text-center text-primary" style="font-size:20;"><b><?php foreach($jmlalbum as $o){ ?>

                 <?php echo $o->total; ?>

                  <?php } ?></b></h1>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading3">
                <h3 class="panel-title text-center">Foto</h3>
              </div>
              <div class="panel-body">
               <h1 class="counter text-center text-primary" style="font-size:20;"><b><?php foreach($jmlphoto as $o){ ?>

                 <?php echo $o->total; ?>

                  <?php } ?></b></h1>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </main>
