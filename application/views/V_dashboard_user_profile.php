<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Basic Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.css">

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
</head>

<body>

  <section>
    <header>
      <nav class="rad-navigation">
        <div class="rad-logo-container">
          <a href="#" class="rad-logo">Ash-Board</a>
          <a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="rad-top-nav-container">
          <ul class="links">
            <li>
              <a class="rad-menu-item" href="#"><i class="fa fa-comment-o"></i></a>
            </li>
            <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge">3</span></i></a>
              <ul class="rad-dropmenu-item">
                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                <li class="rad-notification-item">
                  <a class="rad-notification-content" href="#">

                  </a>
                </li>
                <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
              </ul>
            </li>
            <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
              <ul class="rad-dropmenu-item">
                <li class="rad-dropmenu-header"><a href="#">Your Alerts</a></li>
                <li class="rad-notification-item">
                  <a class="rad-notification-content" href="#">

                  </a>
                </li>
                <li class="rad-dropmenu-footer"><a href="#">See all alerts</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="text-black"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp; <b><?php echo $this->session->userdata('nama') ?></b>
              </a>
              <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                <li> <a class="dropdown-item" href="<?php echo base_url('Dashboard/user_profile'); ?>"><i class="fa fa-cog"></i>&nbsp;Profile Setting</a></li>

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
          <a href="<?php echo base_url('Dashboard'); ?>" class="inbox">
            <i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
            <span class="rad-sidebar-item">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Dashboard/dashboard_album'); ?>">
            <i class="fa fa-file">
              <span class="icon-bg rad-bg-primary"></span>
            </i>
            <span class="rad-sidebar-item">Album</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Dashboard/dashboard_photos'); ?>">
            <i class="fa fa-image">
              <span class="icon-bg rad-bg-danger"></span>
            </i>
            <span class="rad-sidebar-item">Photos</span>
          </a>
        </li>
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
                  <h3 class="panel-title">User Profile</h3>
                </div>
                <div class="panel-body">
                  <div class="container-fluid" style="padding-right: 45px;
                  padding-left: 40px;">
                  <form action="<?php echo base_url('Usermanagement/addUserProcess')?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-4">
                            <label class="form-control-label" for="input-address">Name</label>
                          </div>
                          <div class="col-8">
                            <input type="text" name="emp_name" pattern="^[A-Za-z0-9](?!.*?[^\nA-Za-z0-9\s)(\/.#_-]).*?[A-Za-z0-9\s)(]*$" maxlength="30" class="form-control" name="emp_name" required="">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-4">
                            <label class="form-control-label" for="input-address">Email</label>
                          </div>
                          <div class="col-8">
                            <input type="email" class="form-control" maxlength="30" name="email" required="">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-4">
                            <label class="form-control-label" for="input-address">Phone No.</label>
                          </div>
                          <div class="col-8">
                            <input type="text" onpaste="return false;" onkeypress="return isNumber(event)" maxlength="15" class="form-control" name="phone_num" required="" >
                          </div>
                        </div>
                        <br>
                      </div>
                      <div class="col-md-6" style="padding-left: 35px!important">
                        <div class="row">
                          <div class="col-10" style="margin-left: 20px;">
                            <input type="checkbox" class="form-check-input" name="checkchange" id="checkchange" value="1"> Change Password ?
                          </div>
                        </div>
                        <br>
                        <div id="passhide" style="display: none;">
                          <div class="row">
                            <div class="form-group">
                              <label>Password</label>
                              <div class="input-group" id="show_hide_password">
                               <input type="password" class="form-control" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,12}$" title="8-12 that contains uppercase, lowercase, and numeric without whitespace" class="form-control" name="password" id="password">
                               <div class="input-group-addon"  onclick="pass()">
                                 <i class="fa fa-eye-slash" aria-hidden="true"></i>
                               </div>
                             </div>
                           </div>
                           <div id="alert"></div>
                         </div>
                         <br>
                         <div class="row">
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <div class="input-group" id="show_hide_password">
                              <input type="password" class="form-control" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,12}$" title="8-12 that contains uppercase, lowercase, and numeric without whitespace" class="form-control" name="confirmPass" id="confirmpass" >
                              <div class="input-group-addon"  onclick="confirmpass()">
                               <i class="fa fa-eye-slash" aria-hidden="true"></i>
                             </div>
                           </div>
                         </div>
                         <div id="alert2"></div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="text-right" style="">
                  <button type="submit" class="btn text-white btn-danger" id="button">Save</button>
                  <a href="<?php echo base_url(); ?>Dashboard" class="btn btn-primary">Cancel</a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</main>

<script>
  function pass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function confirmpass() {
    var x = document.getElementById("confirmpass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function Validate() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmpass").value;
    if (password != confirmPassword) {
      $(document).ready(function(){
        // $('#modalAlert').modal('show');
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500);
        });
      });
      return false;
    }
    return true;
  }

  $( document ).ready(function() {
    $( "#passhide" ).hide();
    $( "#checkchange" ).prop('checked',false);
  });

  $( "#checkchange" ).click(function() {
    if ($( "#checkchange" ).prop('checked')) {
      // console.log('hehehe');
      $( "#passhide" ).show();
      $("#password").prop('required',true);
      $("#confirmpass").prop('required',true);
    }else{
      // console.log('hohohoho');
      $("#passhide" ).hide();
      $("#password").prop('required',false);
      $("#confirmpass").prop('required',false);
      $("#password").val('');
      $("#confirmpass").val('');
      $('#notif').empty().html(' ');
      $('#button').removeAttr('disabled');
    }
  });

  $("#password").keyup(function(){
      // var password = $(this).val();
      // $.ajax({
      //   url: '<?php //echo base_url('Login/checkpass'); ?>',
      //   type: 'POST',
      //   data: {
      //     pass : password,
      //     iduser : '<?php //echo $user[0]->iduser ?>'
      //   },
      //   success: function (response) {
      //     console.log(password + ' | ' + response);
      //     if(response == 'same'){
      //       $('#alert').empty().html(' ');
      //       $('#alert').append("<p style='color:red;'>New password can't be same as old password</p>");
      //       $('#button').attr('disabled','disabled');
      //       // console.log('podo');
      //     } else {
      //       // console.log('nggak');
      //       $('#alert').empty().html(' ');
      //       $('#button').removeAttr('disabled');
      //     }
      //   }
      // });
    });

  $("#confirmpass").keyup(function(){
    if ($(this).val() != $('#password').val()) {
      $('#alert2').empty().html(' ');
      $('#alert2').append('<p style="color:red;">Not match</p>');
      $('#button').attr('disabled','disabled');
    } else {
      $('#alert2').empty().html(' ');
      $('#button').removeAttr('disabled');
    }
  });

</script>
