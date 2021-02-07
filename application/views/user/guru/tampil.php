<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Guru</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("user/guru"); ?>" class="active"> Guru</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
      <a href="<?php echo base_url("user/guru/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

        <br><br>
        <?php if ($this->session->flashdata('pesan')): ?>
          <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif ?>
        <br>
        
        <table class="table-bordered table" id="thetable">
          
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama Guru</th>
              <th class="text-center">NIP</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Foto</th>
              <th class="text-center">Mata Pelajaran</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($guru as $key => $value): ?>
              <tr align="center">
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value['nama_guru']; ?></td>
                <td><?php echo $value['nip']; ?></td>
                <td><?php echo $value['alamat']; ?></td>
                <td><img src="<?php echo base_url("assets/user/img/guru/$value[foto]"); ?>" alt="<?php echo $value['foto'] ?>" width="150"></td>
                <td><?php echo $value['mata_pelajaran']; ?></td>
                <td>
                  <a href="<?php echo base_url("user/guru/detail/$value[id_guru]"); ?>" class="btn btn-info btn-xs" style="background-color: #6495ED; color: #ffffff;"><i class="fa fa-eye" title="Hapus data"></i> Detail</a>
                  <a href="<?php echo base_url("user/guru/edit/$value[id_guru]"); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit" title="Edit data"></i> Edit</a>
                  <a href="<?php echo base_url("user/guru/hapus/$value[id_guru]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?');"><i class="fa fa-trash" title="Hapus data"></i> Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
        
      </div>
    </div>
  </section>
</div>