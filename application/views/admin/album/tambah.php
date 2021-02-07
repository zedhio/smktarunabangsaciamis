<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Galeri
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Galeri</a></li>
      <li><a href="#" class="active"> Tambah</a></li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
            <div class="col-md-10">
              <input type="text"  name="nama_album" class="form-control">
            </div>
          </div>
          
          <!-- <div class="form-group">
            <label class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
              <textarea name="deskripsi" class="form-control ckeditor"></textarea>
            </div>
          </div> -->

          <div class="form-group">
            <label class="col-md-2 control-label">Gambar</label>
            <div class="col-md-10">
              <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#media">Add Media</button>
              <p id="ket"></p>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
          <!-- modal -->
          <div id="media" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Pilih / Upload Gambar</h4>
                </div>
                <div class="modal-body">
                  <!-- tabs -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Pilih Gambar</a></li>
                    <li><a data-toggle="tab" href="#menu1">Upload Gambar</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <br>
                      <div class="row">
                        <?php foreach ($media as $key => $value): ?>
                          <div class="col-xs-4 col-sm-4 col-md-4 nopad text-center">
                            <label class="image-radio">
                              <img src="<?php echo base_url("assets/admin/media/$value[url]") ?>" alt="<?php echo $value['url']; ?>" class="img-responsive">
                              <input type="radio" name="gambar_album" value="<?php echo base_url("assets/admin/media/$value[url]") ?>" alt="<?php echo $value['url']; ?>"/>
                              <i class="glyphicon glyphicon-ok hidden"></i>
                            </label>
                          </div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <br>
                      <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                          <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" id="gambar_file" class="form-control">
                          </div>
                          <div class="text-center">
                            <button class="btn btn-info btn-sm" type="button" id="upload">Upload</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /tabs -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Pilih</button>
                </div>
              </div>

            </div>
          </div>
          <!-- /modal -->
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

