 <!-- HOME --> 
 <div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?=$data['title'] ?></h4>
          <!-- action mengarah ke controller Buku/simpanBuku -->
          <form class="form-sample" action="<?=base_url ?>/buku/simpanBuku" method="POST" encytype="multipart/form-data"  >
            <p class="card-description"> Data Buku </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Judul Buku</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="judul" required="true">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kategori Buku</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="kategori_id" required="true">
                      <option>Pilih</option>
                      <?php foreach ($data['kategori'] as $row) :?>
                       <option value="<?=$row['id']; ?><?=$row['nama_kategori'] ?>"><?=$row['nama_kategori'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Penerbit</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="penerbit" required="true">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Pengarang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="pengarang" required="true">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Harga Buku</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                      </div>
                      <input type="text" class="form-control" name="harga" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required="true">
                      <div class="input-group-prepend">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="tahun" placeholder="yyyy" required="true">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a class="btn btn-light" href="<?=base_url?>/buku">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  content-wrapper ends -->


