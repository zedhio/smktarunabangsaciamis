<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Pengaturan</h1>
    <ol class="breadcrumb">
      <li><a href="#" class="active"> Pengaturan</a></li>
    </ol>
  </section>

  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-body table-responsive">
        
        <br>
        <?php if ($this->session->flashdata('pesan')): ?>
          <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif ?>
        <br>

        <table class="table-bordered table" id="thetable">
          
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Pengaturan</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php foreach ($pengaturan as $key => $value): ?>
              <tr>
                <td class="text-center"><?php echo $key+1; ?></td>
                <td class="text-center"><?php echo $value['nama_pengaturan']; ?></td>
                <td class="text-justify"><?php echo strip_tags($value['pengaturan']); ?></td>
                <td class="text-center">
                  <a href="<?php echo base_url("admin/pengaturan/edit/$value[id_pengaturan]"); ?>" class="btn btn-success btn-xs">Edit</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>

      </div>
    </div>
  </section>

</div>
