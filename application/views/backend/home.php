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

          
          <h1 class="h3 mb-4 text-gray-800">Anasayfa</h1>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('backend/order') ?>">Askıdaki Rezervasyonlar</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $order[0]['count(rezervasyonKodu)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-spinner fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= base_url('backend/tiket') ?>">Toplam Satılan Biletler</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tiket[0]['count(biletKodu)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="<?= base_url('backend/konfirmasi') ?>">Ödeme Listesi</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $konfirmasi[0]['count(dogrulamaKodu)']; ?></div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?= base_url('backend/rute') ?>">Tüm Terminaller</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $terminal[0]['count(sehirKodu)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-road fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?= base_url('backend/jadwal') ?>">Uygun Takvimler</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $schedules[0]['count(saatKodu)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="<?= base_url('backend/bus') ?>">Uygun Otobüsler</a></div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $bus[0]['count(otobusKodu)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>

        </div>
        

      </div>
      

      
      <?php $this->load->view('backend/include/base_footer'); ?>
      

    </div>
    

  </div>
  
  
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <?php $this->load->view('backend/include/base_js'); ?>

</body>

</html>
