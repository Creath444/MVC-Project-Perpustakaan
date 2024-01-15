 <!-- HOME --> 
 <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="page-header">
              <h4 class="card-title"><?=$data['title'] ?></h4>
            </div>
            <form class="forms-sample" action="<?=base_url?>/kategori/updateData" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$data['kategori']['id']?>">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukan Nama Kategori" name="nama_kategori" value="<?=$data['kategori']['nama_kategori']?>" required="true" >
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


