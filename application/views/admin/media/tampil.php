<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Media</h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Media</a></li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
        <a href="<?php echo base_url("admin/media/tambah"); ?>" class="btn btn-info btn-sm">Tambah</a>
        
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
              <th class="text-center">Nama</th>
              <th class="text-center">Deskripsi</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($media as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><img src="<?php echo base_url("assets/admin/media/$value[url]"); ?>" alt="<?php echo $value['url'] ?>" width="100"></td>
                <td class="text-center"><?php echo $value['nama']; ?></td>
                <td><?php echo $value['deskripsi']; ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/media/hapus/$value[id_media]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apkah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>

      </div>
    </div>
  </section>

</div>