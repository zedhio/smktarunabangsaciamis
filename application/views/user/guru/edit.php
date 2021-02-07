<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Edit Guru</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("user/guru"); ?>"> Guru</a></li>
      <li><a href="<?php echo base_url("user/guru/edit/$detail[id_guru]"); ?>" class="active"> Edit</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Nama Guru</label>
            <div class="col-md-10">
              <input type="text"  name="nama_guru" class="form-control" value="<?php echo $detail['nama_guru']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">NIP</label>
            <div class="col-md-10">
              <input type="text"  name="nip" class="form-control" value="<?php echo $detail['nip']; ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-2 control-label">Alamat</label>
            <div class="col-md-10">
              <textarea name="alamat" class="form-control ckeditor"><?php echo $detail['alamat']; ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <img src="<?php echo base_url("assets/user/img/guru/$detail[foto]") ?>" alt="<?php echo $detail['foto']; ?>" width="150">
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
              <input type="text"  name="mata_pelajaran" class="form-control" value="<?php echo $detail['mata_pelajaran']; ?>">
            </div>
          </div>
      
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Ubah</button>
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