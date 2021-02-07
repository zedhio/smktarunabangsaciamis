<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Halaman
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/halaman"); ?>"> Halaman</a></li>
      <li><a href="#" class="active"> Edit</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Judul</label>
            <div class="col-md-10">
              <input type="text"  name="judul" class="form-control" value="<?php echo $detail['judul']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label">Isi</label>
            <div class="col-md-10">
              <textarea name="isi" class="form-control ckeditor"><?php echo $detail['isi']; ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <img src="<?php echo base_url("assets/admin/img/halaman/$detail[gambar]") ?>" alt="<?php echo $detail['gambar']; ?>" width="150">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Gambar</label>
            <div class="col-md-10">
              <input type="file" class="form-control" name="gambar">
            </div>
          </div>
      
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</button>
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