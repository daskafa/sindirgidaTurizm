<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/nav') ?>

<!-- Post Content -->
<div class="post">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h3><?php echo $bilgi->duyurubaslik; ?></h3>
        <p><?php echo $bilgi->duyuruaciklama; ?></p>
        <img class="homepageimg" src="<?php echo base_url('uploads/ArticleImages/') . $bilgi->ImageUrl; ?>" alt="">
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('include/footer'); ?>
