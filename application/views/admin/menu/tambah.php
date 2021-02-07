<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Menu
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/menu"); ?>"> Menu</a></li>
      <li><a href="#" class="active"> Tambah</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah menu</h3>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label>Jenis Menu</label>
            <select class="form-control jenismenu">
              <option value="">Pilih Jenis Menu</option>
              <option value="kategori">Kategori</option>
              <option value="halaman">Halaman</option>
              <option value="cutom">Custom</option>
            </select>
          </div>
          <div class="form-group halaman hidden">
            <label>Halaman</label>
            <select class="form-control" name="id_halaman">
              <option value="">Pilih Halaman</option>
              <?php foreach ($halaman as $key => $value): ?>s
              <option value="<?php echo $value['id_halaman'] ?>"><?php echo $value['judul'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group kategori hidden">
          <label>Kategori</label>
          <select class="form-control" name="id_kategori">
            <option value="">Pilih Kategori</option>
            <?php foreach ($kategori as $key => $value): ?>s
            <option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="custom hidden">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label>URL</label>
          <input type="text" class="form-control" name="url">
        </div>
      </div>
      <div class="form-group">
        <label>Parent</label>
        <select class="form-control" name="parent">
          <option value="">Pilih Parent Menu</option>
          <option value="0">Menu Utama (tanpa parent)</option>
          <?php foreach ($menu as $key => $value): ?>
            <option value="<?php echo $value['id_menu'] ?>"><?php echo $value['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label>Urutan Menu</label>
        <input type="number" class="form-control" min="0" name="urutan">
      </div>
    </div>
    <div class="box-footer">
      <button class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </form>
</div>
</section>
</div>