<?php $this->load->view('include/header') ?>
<?php $this->load->view('include/nav') ?>



  <div class="news">
      <div class="container">
        <?php foreach ($bilgi as $bilgi) { ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3" style="max-width: 70%; margin: 0 auto;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img style="width:100%; height:216px; object-fit:cover; padding: 10px; border-radius:20px;" src="<?php echo base_url('uploads/ArticleImages/') . $bilgi->ImageUrl; ?>" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $bilgi->duyurubaslik; ?></h5>
                      <p class="card-text"><?php echo kisalt($bilgi->duyuruaciklama); ?></p>
                      <p class="card-text"><small class="text-muted"> <a style="color:#fff; background-color: #ed1c24; border-radius: 5px; padding: 10px;" href="<?php echo base_url('duyurular/'); echo $bilgi->duyurulink; ?>">Devamı için tıklayınız.</a> </small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php echo $paginationsLink; ?>
      </div>
  </div>





<?php $this->load->view('include/footer') ?>
