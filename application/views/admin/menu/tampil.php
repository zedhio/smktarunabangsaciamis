<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Menu
    </h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Menu</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data menu</h3>
          </div>
          <div class="box-body">
            <ul class="list-group">
              <?php foreach ($menu as $key => $value): ?>

                <li class="list-group-item">
                  <i class="fa fa-chevron-circle-right"></i> 
                  <span><?php echo $value['nama'] ?></span> <strong>(<?php echo $value['urutan'] ?>)</strong>
                  <?php if (empty($value['anak'])): ?>
                    <div class="pull-right" style="display: inline-block;">
                      <a href="<?php echo base_url("admin/menu/edit/".$value['id_menu']) ?>" class="btn btn-success btn-xs">Edit</a>
                      <a href="<?php echo base_url("admin/menu/hapus/".$value['id_menu']) ?>" onclick="return confirm('Apakah Anda yakin?');" class="btn btn-danger btn-xs">Hapus</a>
                    </div>
                  <?php endif ?>
                </li>
                <?php if (!empty($value['anak'])): ?>
                  <ul class="list-group">
                    <?php foreach ($value['anak'] as $key => $pa): ?>
                      <li class="list-group-item" style="margin-left: 30px;background: #f4f5f6">
                        <span><?php echo $pa['nama'] ?></span>  <strong>(<?php echo $pa['urutan'] ?>)</strong>
                        <div class="pull-right" style="display: inline-block;">
                          <a href="<?php echo base_url("admin/menu/hapus/".$pa['id_menu']) ?>" onclick="return confirm('Apakah Anda yakin?');" class="btn btn-danger btn-xs">Hapus</a>
                        </div>
                      </li>
                    <?php endforeach ?>
                  </ul>
                <?php endif ?>
              <?php endforeach ?>
            </ul>
          </div>
          <div class="box-footer">
            <a href="<?php echo base_url("admin/menu/tambah") ?>" class="btn btn-info btn-sm">Tambah</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Panduan Menu</h3>
          </div>
          <div class="box-body">
            <ul style="margin: 0px;padding-left: 20px;">
              <li>Menu akan tampil pada halaman utama</li>
              <li>Menu didapat dari halaman/kategori yang ada pada web & custom (tambahan sendiri)</li>
              <li>Menu bisa memiliki anak menu</li>
              <li>Menu hanya bisa dihapus jika sudah tidak memiliki anak menu</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>