<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Kategori</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/kategori"); ?>" class="active"> Kategori</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">

        <a href="<?php echo base_url("admin/kategori/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

        <br><br>
        <?php if ($this->session->flashdata('pesan')): ?>
          <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif ?>
        <br>

        <table class="table-bordered table" id="thetable">
          
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">URL</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($kategori as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><?php echo $value['nama']; ?></td>
                <td class="text-center"><?php echo $value['url']; ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/kategori/edit/$value[id_kategori]"); ?>" class="btn btn-success btn-xs">Edit</a>
                  <a href="<?php echo base_url("admin/kategori/hapus/$value[id_kategori]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apkah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
        <br>
        
      </div>
    </div>
  </section>

</div>