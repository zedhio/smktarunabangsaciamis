<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Profil</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("user/profil/edit"); ?>"> Profil</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-success">
      <div class="box-body">
        <form method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-md-2 control-label">Username</label>
            <div class="col-md-10">
              <input type="text"  name="username" class="form-control" value="<?php echo $detail['username']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Password</label>
            <div class="col-md-10">
              <input type="password"  name="password" class="form-control" placeholder="Kosongi kolom password jika tidak ingin dirubah!!">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Nama User</label>
            <div class="col-md-10">
              <input type="text"  name="nama_user" class="form-control" value="<?php echo $detail['nama_user']; ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Ubah</button>
            </div>
          </div>
        </form>

        <?php if ($kosong): ?>
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $kosong ?>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>
</div>