<footer class="main-footer">
	<div class="pull-right hidden-xs">
	</div>
	<strong>Copyright &copy; 2019 <a href="#">SMK Taruna Bangsa Ciamis</a>.</strong> By Indra Wiguna.
</footer>

</div>

<!-- jQuery 3 -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/admin/js/adminlte.min.js"); ?>"></script>
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.instances.editor1
</script>

<script>
  $(document).ready(function(){
    $(document).on("change",".jenismenu",function(){

      $jm = $(this).val();
      if ($jm=="halaman")
      {
        $(".custom").addClass("hidden");
        $(".halaman").removeClass("hidden");
        $(".kategori").addClass("hidden");
      }
      else if ($jm=="kategori")
      {
        $(".custom").addClass("hidden");
        $(".halaman").addClass("hidden");
        $(".kategori").removeClass("hidden");
      }
      else
      {
       $(".halaman").addClass("hidden");
       $(".custom").removeClass("hidden");
       $(".kategori").addClass("hidden");
     }
   })
  })
</script>

<script>
  $(document).ready(function(){
    // add/remove checked class
    $(".image-radio").each(function(){
      if($(this).find('input[type="radio"]').first().attr("checked")){
        var alt =$(this).find('input[type="radio"]').first().attr("alt");
        $("#ket").html(alt);
        $(this).addClass('image-radio-checked');
      }else{
        $(this).removeClass('image-radio-checked');
      }
    });

    // sync the input state
    $(".image-radio").on("click", function(e){
      $(".image-radio").removeClass('image-radio-checked');
      $(this).addClass('image-radio-checked');
      var $radio = $(this).find('input[type="radio"]');
      var alt =$(this).find('input[type="radio"]').first().attr("alt");
      $("#ket").html(alt);
      $radio.prop("checked",!$radio.prop("checked"));

      e.preventDefault();
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#upload").on('click',function(){
      var gambar = $("#gambar_file").prop('files')[0];
      var form_data = new FormData();
      form_data.append('nama', "gambar");
      form_data.append('url', gambar);
      form_data.append('deskripsi', "gambar");
      
      $.ajax({
        url:"<?php echo base_url("admin/media/upload"); ?>",
        method:"POST",
        data:form_data,
        processData:false,
        contentType:false,
        cache:false,
        async:false,
        success:function(data)
        {
          if(data=="berhasil")
          {
            location="<?php echo base_url("admin/galeri/tambah"); ?>";
          }
        }
      })
    })
  })
</script>

</body>
</html>