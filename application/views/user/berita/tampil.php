<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Berita</h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Berita</a></li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
      <a href="<?php echo base_url("user/berita/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

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
              <th class="text-center">Kategori</th>
              <th class="text-center">Tanggal Posting</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($berita as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><img src="<?php echo base_url("assets/admin/img/berita/$value[foto_berita]"); ?>" alt="<?php echo $value['foto_berita'] ?>" width="150"></td>
                <td class="text-center"><?php echo $value['judul_berita']; ?></td>
                <td class="text-center"><?php echo $value['nama']; ?></td>
                <td class="text-center"><?php echo date("d/m/Y",strtotime($value['tgl_berita'])); ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("user/berita/edit/$value[id_berita]"); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <a href="<?php echo base_url("user/berita/hapus/$value[id_berita]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?');"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
        
      </div>
    </div>
  </section>

</div>