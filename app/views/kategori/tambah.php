 <!-- HOME --> 
 <div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
        </span><?=$data['title']; ?>
      </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="page-header">
              <h4 class="card-title"><?=$data['title'] ?></h4>
            </div>
            <form class="forms-sample" action="<?=base_url?>/kategori/simpanKategori" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukan Nama Kategori" name="nama_kategori" required="true">
              </div>
              <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
              <a class="btn btn-light" href="<?=base_url?>/kategori">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  content-wrapper ends -->


