<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Halaman
    </h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Halaman</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
      <a href="<?php echo base_url("admin/halaman/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

        <br><br>
        <?php if ($this->session->flashdata('pesan')): ?>
          <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif ?>
        <br>
        <table class="table-bordered table" id="thetable">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Gambar</th>
              <th class="text-center">Judul</th>
              <th class="text-center">Tanggal Posting</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hal as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><img src="<?php echo base_url("assets/admin/img/halaman/$value[gambar]"); ?>" alt="<?php echo $value['gambar'] ?>" width="150"></td>
                <td><?php echo $value['judul']; ?></td>
                <td class="text-center"><?php echo date("d/m/Y",strtotime($value['tanggal'])); ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/halaman/edit/$value[id_halaman]"); ?>" class="btn btn-success btn-xs">Edit</a>
                  <a href="<?php echo base_url("admin/halaman/hapus/$value[id_halaman]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apkah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>