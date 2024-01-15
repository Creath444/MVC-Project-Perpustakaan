 <!-- HOME --> 
 <div class="content-wrapper">
  <div class="row">
    <?php Flasher::Message();?>
    
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?=$data['title'] ?></h4>
          <p class="card-description">User</p>
          <form class="form-inline" method="POST" action="<?=base_url?>/user/simpanUser" enctype="multipart/port-data">
            <label class="sr-only" for="inlineFormInputName2">Name</label>
            <input name="nama" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukan nama..." required="true">
            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Gmail</div>
              </div>
              <input name="username" type="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Masukan username..." required="true">
            </div>
            <label class="sr-only" for="inlineFormInputName2">Password</label>
            <input name="password" type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukan password..." required="true">
            <label class="sr-only" for="inlineFormInputName2">Ulangi Password</label>
            <input name="ulangi_password" type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Ulangi password..." required="true">
            <br>
            <button type="submit" class="btn btn-gradient-primary mb-2">Submit</button>
            <a class="btn btn-light" href="<?=base_url?>/user">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  content-wrapper ends -->


