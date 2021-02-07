<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Album</h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Album</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body table-responsive">
      
      <a href="<?php echo base_url("admin/album/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>
        
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
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($album as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><img src="<?php echo $value['gambar_album']; ?>" alt="<?php echo $value['url_album'] ?>" width="150"></td>
                <td class="text-center"><?php echo $value['nama_album']; ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/album/hapus/$value[id_album]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apkah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
      </div>
    </div>
  </section>

</div>