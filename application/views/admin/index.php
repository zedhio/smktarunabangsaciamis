<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Home</h1>
    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>
  </section>
  
  <section class="content container-fluid">
    <?php if ($this->session->flashdata('pesan')): ?>
      <?php echo $this->session->flashdata('pesan'); ?>
    <?php endif ?>
  </section>
  
</div>
