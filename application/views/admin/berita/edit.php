<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Berita
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/berita"); ?>"> Berita</a></li>
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
              <input type="text"  name="judul_berita" class="form-control" value="<?php echo $detail['judul_berita']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Kategori</label>
            <div class="col-md-10">
              <select name="id_kategori" class="form-control">
                <option value="">- Pilih Kategori -</option>
                <?php foreach ($kategori as $key => $value): ?>
                  <option value="<?php echo $value['id_kategori'] ?>" <?php if($value['id_kategori']==$detail['id_kategori']){echo "selected";} ?>><?php echo $value['nama']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>          
          
          <div class="form-group">
            <label class="col-md-2 control-label">Isi</label>
            <div class="col-md-10">
              <textarea name="isi_berita" class="form-control ckeditor"><?php echo $detail['isi_berita']; ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <img src="<?php echo base_url("assets/admin/img/berita/$detail[foto_berita]") ?>" alt="<?php echo $detail['foto_berita']; ?>" width="150">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Gambar</label>
            <div class="col-md-10">
              <input type="file" class="form-control" name="foto_berita">
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