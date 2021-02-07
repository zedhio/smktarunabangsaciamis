<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Galeri
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/galeri"); ?>"> Galeri</a></li>
      <li><a href="<?php echo base_url("admin/galeri/edit/$detail[id_galeri_jurusan]"); ?>" class="active"> Edit</a></li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text"  name="nama_galeri_jurusan" class="form-control" value="<?php echo $detail['nama_galeri_jurusan']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Jurusan</label>
            <div class="col-md-10">
              <input type="text"  name="jurusan" class="form-control" value="<?php echo $detail['jurusan']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
              <textarea name="deskripsi" class="form-control ckeditor"><?php echo $detail['deskripsi']; ?></textarea>
            </div>
          </div>

          <div class="form-group">
          <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
              <img src="<?php echo base_url("assets/img/galeri_jurusan/".$detail['gambar']); ?>" height="120">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Gambar</label>
            <div class="col-md-10">
              <input type="file" class="form-control" name="gambar">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Tanggal Kegiatan</label>
            <div class="col-md-10">
              <input type="text"  name="tgl_kegiatan" class="form-control" value="<?php echo $detail['tgl_kegiatan']; ?>" readonly>
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