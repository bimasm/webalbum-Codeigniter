<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Photos</title>
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
            
            
            <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
              <ul class="rad-dropmenu-item">
                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                <li class="rad-notification-item">
                  <a class="rad-notification-content" href="#">

                  </a>
                </li>
                <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="text-black"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp; <b><?php echo $this->session->userdata('nama') ?></b>
              </a>
              <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                <li> <a class="dropdown-item" href="<?php echo base_url('Dashboard/user_profile'); ?>">

                <!-- <i class="fa fa-cog"></i> -->

                &nbsp;Profile Setting</a></li>

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
        <li>
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
        <li class="hidup">
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
          <span class="rad-sidebar-it<i class="fas fa-cog">em">Call trends</span>
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
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Ini Photos</h3>
                </div>
                <div class="panel-body">
                  <div class="table-responsive m-t-40">
                    <table id="example" class="table">
                      <thead>
                        <tr>

                          <th style="text-align: center;">No</th>
                          <th style="text-align: center;">Photos Name</th>
                          <th style="text-align: center;">Photos Description</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        for ($i=0; $i < 5; $i++) { 
                          ?>
                          <tr>
                            <th style="text-align: center;"><?php echo $no++ ?></th>
                            <th style="text-align: center;"> haha </th>
                            <th style="text-align: center;"> hihi </th>
                            <th>
                              <center>
                                <div class="dropdown">
                                  <a class="text-black"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs" style="color: #e51f40"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="#"><i class="fa fa-pencil" ></i>&nbsp; Edit</a></li>
                                    <li> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_delete" data-idposition=""><i class="fa fa-trash"></i>&nbsp; Delete</a></li>

                                  </ul>
                                </div>


                              </center>
                            </th>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


