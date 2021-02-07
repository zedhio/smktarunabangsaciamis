<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pengaturan
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/pengaturan"); ?>"> Pengaturan</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-body">
        <form method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="nama_pengaturan" value="<?php echo $pengaturan['nama_pengaturan']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Pengaturan</label>
            <div class="col-md-10">
              <textarea name="pengaturan" class="form-control ckeditor"><?php echo $pengaturan['pengaturan']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-success btn-sm">Simpan</button>
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
