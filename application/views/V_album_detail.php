<!DOCTYPE html>
<!-- saved from url=(0037)https://startbootstrap.com/templates/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Start Bootstrap">
	<?php foreach ($album as $row) { ?><title><?php echo $row->nama_album;?></title><?php } ?>
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/logo.png">
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style-template.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script id="_bsa_srv-CKYD6KQU_0" type="text/javascript" src="<?php echo base_url(); ?>assets/CKYD6KQU.json"></script><script id="_carbonads_projs" type="text/javascript" src="<?php echo base_url(); ?>assets/CKYIP53E.json"></script> --></head>
	


	<main>
		<header class="masthead masthead-page mb-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9 py-3">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>/assets/images/logoead.png" height="150"></a>
						<!-- <h2 class="m-0" color="white">Fast . Smart . Efficient</h2> -->

					</div>


					<span>
						<?php
						if ($this->session->userdata('statses') == "login") {
							echo '<ul class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="color: white" class="fa fa-user"></i>&nbsp;'.$this->session->userdata('nama').'</a>
							<div class="dropdown-menu border-0 shadow animate slideIn" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="'.base_url('Dashboard').'" style="color:black"><i style="color: black" class="fa fa-cog"></i> Dashboard</a>
							<a class="dropdown-item" href="'.base_url('login/logout').'" style="color:black"><i style="color: black" class="fa fa-power-off"></i> Logout</a>

							</div>
							</ul>';
						}else{
							echo '<a href="'.base_url('Login').'" style="background-color: #f8f9fa; color: blue" class="btn btn-default btn-xl shadow">Login</a>';
						}
						?>
						

					</span>
				</div>
			</div>
			<svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
				<defs>
					<style>
						.a {
							fill: none;
						}

						.b {
							clip-path: url(#a);
						}

						.c,
						.d {
							fill: #f9f9fc;
						}

						.d {
							opacity: 0.5;
							isolation: isolate;
						}
					</style>
					<clippath id="a">
						<rect class="a" width="1920" height="75"></rect>
					</clippath>
				</defs>
				<title>wave</title>
				<g class="b">
					<path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
				</g>
				<g class="b">
					<path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
				</g>
				<g class="b">
					<path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
				</g>
				<g class="b">
					<path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
				</g>
			</svg>
		</header>
		<!-- 		<script src="<?php //echo base_url(); ?>assets/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	-->



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<section class="after-loop">
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-6">
       <a href="<?php echo base_url('Home'); ?>""> <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0"><?php foreach ($album as $row) { ?><?php echo $row->nama_album;?><?php } ?></h1>
       </a>
     </div>
     <div class="col-6" align="right">
      <span ><a href="" style="margin-top: 30px" data-toggle="modal" data-target="#modal_add" class="btn btn-primary btn-xl shadow"><i class="fa fa-plus"></i>&nbsp; Add Photos</a></span>
    </div>
  </div>
  <hr class="mt-2 mb-5">
<?php $no = 1; ?>
  <div class="row text-center text-lg-left">
<?php foreach ($show as $o) { ?>
    <div class="col-lg-3 col-md-4 col-6">
      <a data-toggle="modal" data-target="#modal_image<?php echo $no++ ?>">
        <img style="width:300px;height:200px" class="img-fluid img-thumbnail" onclick="lightbox(0)" src="<?php echo base_url('assets/uploads/').$o->gambar; ?>" alt="">
      </a>
    </div>
<?php } ?>
  </div>

</div>
<!-- /.container -->
</section>
</main>


<!-- Modal -->
<div id="modal_add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Photos</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="<?php echo base_url(); ?>album/add_photo" method = "POST" enctype="multipart/form-data" >
        <div class="modal-body">  
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="input-address">File</label>
              <input type="file"  name="gambar" required="">
            </div>
           
            <div class="form-group">
              <label class="form-control-label" for="input-address">Description</label>
              <textarea class="form-control" name="deskripsi"></textarea>
              <input type="text" name="album" value="<?php foreach ($album as $row) { ?><?php echo $row->nama_album;?><?php } ?>" hidden>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn text-white btn btn-primary" >Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $noo = 1; ?>
<?php foreach ($show as $o) { ?>
<!-- modal gambar -->
<div id="modal_image<?php echo $noo++ ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Photos</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    <img class="img-fluid img-thumbnail" onclick="lightbox(0)" src="<?php echo base_url('assets/uploads/').$o->gambar; ?>" alt=""><br><br>
    <span><?php echo $o->deskripsi; ?></span>
    </div>
  </div>
</div>
<?php } ?>
