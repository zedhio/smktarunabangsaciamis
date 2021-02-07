<div class="content-wrapper">
  
  <section class="content-header">
    <h1>User</h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> User</a></li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
      <a href="<?php echo base_url("admin/user/tambah"); ?>" class="btn btn-info btn-sm pull-right">Tambah</a>

        <br><br>
        <?php if ($this->session->flashdata('pesan')): ?>
          <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif ?>
        <br>
        
        <table class="table-bordered table" id="thetable">
          
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama User</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($user as $key => $value): ?>
              <tr align="center">
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value['nama_user']; ?></td>
                <td>
                  <a href="<?php echo base_url("admin/user/edit/$value[id_user]"); ?>" class="btn btn-success btn-xs">Edit</a>
                  <a href="<?php echo base_url("admin/user/hapus/$value[id_user]"); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>

      </div>
    </div>
  </section>

</div>