<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Media
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Media</a></li>
      <li><a href="#" class="active"> Tambah</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text"  name="nama" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
              <textarea name="deskripsi" class="form-control ckeditor"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Gambar</label>
            <div class="col-md-10">
              <input type="file" class="form-control" name="url">
            </div>
          </div>
      
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
        </form>
        <?php if ($kosong): ?>
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $kosong ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </section>
</div>

