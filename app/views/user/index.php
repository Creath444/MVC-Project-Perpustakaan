<!-- HOME --> 
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-book-multiple-variant"></i>
        </span><?=$data['title']; ?>
      </h3>
    </div>
    <div class="row">
      <?php Flasher::Message();?>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="page-header">
              <h4 class="card-title"><?=$data['title'] ?></h4>
              <!-- link controller Kategori/tambah -->
              <a href="<?=base_url?>/user/tambah">
                <button type="button" class="btn btn-gradient-primary btn-icon-text">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i> Tambah Kategori </button></a>
                </div>
                <div class="search-field d-none d-md-block">
                  <form class="d-flex align-items-center h-100" action="<?=base_url?>/user/cari" method="POST" >
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"><button class="btn btn-sm-gradient-primary"></button></i>
                      </div>
                      <input type="text" name="key" class="form-control bg-transparent border-0" placeholder="Search Data">
                    </div>
                  </form>
                </div>
              </p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Nama </th>
                    <th> Username </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?> 
                  <?php foreach ($data['user'] as $row) :?>
                   <tr class="table-info ">
                    <td><?=$no?></td>
                    <td><?=$row['nama']?></td>
                    <td><label class="badge badge-info"><?=$row['username'] ?></label></td>
                    <td>
                      <!-- link controller Kategori/edit -->
                      <a href="<?= base_url; ?>/user/edit/<?= $row['id'] ?>">
                        <button type="button" class="btn btn-inverse-info btn-icon">
                          <i class="mdi mdi-table-edit"></i>
                        </button>
                      </a>
                      <!-- link controller Kategori/hapus -->
                      <a href="<?= base_url; ?>/user/hapus/<?= $row['id'] ?>" onclick="return confirm('Hapus data?');"><button type="button" class="btn btn-inverse-danger btn-icon">
                        <i class="mdi mdi-delete"></i>
                      </button></a>
                    </td>
                  </tr>
                  <?php $no++;endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- content-wrapper ends