<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Tambah Guru</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("user/guru"); ?>"> Guru</a></li>
      <li><a href="<?php echo base_url("user/guru/tambah"); ?>" class="active"> Tambah</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Nama Guru</label>
            <div class="col-md-10">
              <input type="text"  name="nama_guru" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">NIP</label>
            <div class="col-md-10">
              <input type="text"  name="nip" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label">Alamat</label>
            <div class="col-md-10">
              <textarea name="alamat" class="form-control ckeditor"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Foto</label>
            <div class="col-md-10">
              <input type="file" class="form-control" name="foto">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Mata Pelajaran</label>
            <div class="col-md-10">
              <input type="text"  name="mata_pelajaran" class="form-control">
            </div>
          </div>
      
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-info btn-sm"><i class="fa fa-save"></i> Simpan</button>
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