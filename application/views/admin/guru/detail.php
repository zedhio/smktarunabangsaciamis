<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Detail Guru</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url("admin/guru"); ?>"> Guru</a></li>
      <li><a href="#" class="active"> Detail</a></li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <div class="box box-info">
      <div class="box-body">

          <div class="form-group">
            <div class="col-md-1"></div>
            <div class="col-md-3" align="center" style="padding: 7px 7px;">
              <table>
                <tr>
                  <td><img src="<?php echo base_url("assets/user/img/guru/$detail[foto]") ?>" alt="<?php echo $detail['foto']; ?>" width="150"></td>
                </tr>
              </table>
            </div>
            <div class="col-md-7" style="padding: 20px 20px;">
              <table>
                <tr>
                  <td><label class="control-label">Nama Guru</label></td>
                  <td width="20" align="center"><label class="control-label">:</label></td>
                  <td><label class="control-label" style="font-weight: normal;"> <?php echo $detail['nama_guru']; ?></label></td>
                </tr>
                <tr>
                  <td><label class="control-label">NIP</label></td>
                  <td width="20" align="center"><label class="control-label">:</label></td>
                  <td><label class="control-label" style="font-weight: normal;"> <?php echo $detail['nip']; ?></label></td>
                </tr>
                <tr>
                  <td><label class="control-label">Alamat</label></td>
                  <td width="20" align="center"><label class="control-label">:</label></td>
                  <td><label class="control-label" style="font-weight: normal;"> <?php echo strip_tags($detail['alamat']); ?></label></td>
                </tr>
                <tr>
                  <td><label class="control-label">Mata Pelajaran</label></td>
                  <td width="20" align="center"><label class="control-label">:</label></td>
                  <td><label class="control-label" style="font-weight: normal;"> <?php echo strip_tags($detail['mata_pelajaran']); ?></label></td>
                </tr>
              </table>
            </div>
            <div class="col-md-1"></div>
          </div>

        </div>
      </div>
    </section>
    
  </div>