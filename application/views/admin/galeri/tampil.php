<div class="content-wrapper">

  <section class="content-header">
    <h1>Galeri</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#" class="active"> Galeri</a>
      </li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
      <a href="<?php echo base_url("admin/galeri/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

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
              <th class="text-center">Jurusan</th>
              <th class="text-center">Deskripsi</th>
              <th class="text-center">Gambar</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($galeri as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><?php echo $value['nama_galeri_jurusan']; ?></td>
                <td class="text-center"><?php echo $value['jurusan']; ?></td>
                <td class="text-center"><?php echo $value['deskripsi']; ?></td>
                <td class="text-center"><img src="<?php echo base_url("assets/img/galeri_jurusan/".$value['gambar']) ?>" width="150"></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/galeri/edit/$value[id_galeri_jurusan]"); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit" title="Hapus data"></i> Edit</a>
                  <a href="<?php echo base_url("admin/galeri/hapus/$value[id_galeri_jurusan]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apkah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>

      </div>
    </div>
  </section>

</div>