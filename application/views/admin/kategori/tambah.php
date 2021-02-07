<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Kategori</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/kategori"); ?>"> Kategori</a></li>
      <li class="active">Tambah</li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body">
        
        <form method="POST" class="form-horizontal">
          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="nama">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-info btn-sm">Simpan</button>
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
