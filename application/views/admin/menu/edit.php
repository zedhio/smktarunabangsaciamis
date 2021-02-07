<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Menu
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/menu"); ?>"> Menu</a></li>
      <li><a href="#" class="active"> Edit</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Edit menu</h3>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $menu['nama'] ?>">
          </div>
          <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control" name="url" value="<?php echo $menu['url'] ?>">
          </div>
          <div class="form-group">
            <label>Parent</label>
            <select class="form-control" name="parent">
              <option value="0">Menu Utama (tanpa parent)</option>
              <?php foreach ($semuamenu as $key => $value): ?>
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
          <button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
        </div>
      </form>
    </div>
  </section>
</div>