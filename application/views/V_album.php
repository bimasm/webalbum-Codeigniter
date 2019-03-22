<section class="after-loop">
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-6">
       <a href="<?php echo base_url('Home'); ?>""> <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Nama Album</h1>
       </a>
     </div>
     <div class="col-6" align="right">
      <span ><a href="" style="margin-top: 30px" data-toggle="modal" data-target="#modal_add" class="btn btn-primary btn-xl shadow"><i class="fa fa-plus"></i>&nbsp; Add Photos</a></span>
    </div>
  </div>
  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" onclick="lightbox(0)" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
      </a>
    </div>
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
      <form action="" method = "POST" >
        <div class="modal-body">  
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label" for="input-address">File</label>
              <input type="file" class="form-control" name="termpayment_name" required="">
            </div>
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
