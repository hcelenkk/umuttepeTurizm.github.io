<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    
    <?php $this->load->view('backend/include/base_nav'); ?>
    
    <div class="container-fluid">
      
      
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ticket Code[<?= $tiket['biletKodu']; ?>]  </h6>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
             
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <p>Booking Code    : <b><?= $tiket['rezervasyonKodu']; ?></b></p>
                  <p>Passenger's Name : <b><?= $tiket['biletAdi']; ?></b></p>
                  <p>Passenger's Age : <b><?= $tiket['biletYas']; ?></b></p>
                  <p>Seat Number   : <b><?= $tiket['biletKoltuk'] ?></b></p>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
            <hr>
                        <a class="btn btn-danger" href="javascript:history.back()"> Go Back</a>

          </div>
        </form>
      </div>
    </div>
  </div></div>
  
  
  
  <?php $this->load->view('backend/include/base_footer'); ?>
  

<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>