	<style type="text/css">
		.mb-5, .my-5 {
			margin-bottom: 0rem!important;
		}
		.after-loop {
			padding: 1rem 0 5rem!important;
		}
	</style>


	<section class="after-loop">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-10 py-5">
					<span ><a href="" data-toggle="modal" data-target="#modal_add" class="btn btn-primary btn-xl shadow"><i class="fa fa-plus"></i>&nbsp; Add Album</a></span>
				</div>

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
					<a href="<?php echo base_url('Album'); ?>" class="after-loop-item card border-0 card-themes shadow-lg">
						<div class="card-body d-flex align-items-end flex-column text-right">
							<h4>Nama Album</h4>
							<p class="w-75">deskripsi album</p>
							
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
					<a href="<?php echo base_url('Album'); ?>" class="after-loop-item card border-0 card-snippets shadow-lg">
						<div class="card-body d-flex align-items-end flex-column text-right">
							<h4>Nama Album</h4>
							<p class="w-75">deskripsi album</p>
							
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-8 mx-auto">
					<a href="<?php echo base_url('Album'); ?>" class="after-loop-item card border-0 card-guides shadow-lg">
						<div class="card-body d-flex align-items-end flex-column text-right">
							<h4>Nama Album</h4>
							<p class="w-75">deskripsi album</p>
							
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>


<!-- Modal -->
<div id="modal_add" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Album</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="" method = "POST" >
				<div class="modal-body">  
					<div class="col-md-12">
						<div class="form-group">
							<label class="form-control-label" for="input-address">Name</label>
							<input type="text" class="form-control" name="termpayment_name" required="">
						</div>
						<div class="form-group">
							<label class="form-control-label" for="input-address">Description</label>
							<textarea class="form-control"></textarea>
						</div>

					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn text-white btn btn-primary" >Save</button>
				</div>
			</form>
		</div>
	</div>
</div>



