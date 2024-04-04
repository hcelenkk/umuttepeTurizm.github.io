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
      
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h1 class="h5 text-gray-800">Ödeme Listesi</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Code</th>
                  <th>Rezervasyon Kodu</th>
                  <th>Gönderen </th>
                  <th>Banka </th>
                  <th>Hesap No.</th>
                  <th>Fiyat</th>
                  <th>TF proof</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1;foreach ($konfirmasi as $row) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['dogrulamaKodu']; ?></td>
                    <td><?= $row['rezervasyonKodu']; ?></td>
                    <td><?= $row['dogrulamaAdi']; ?></td>
                    <td><?= $row['dogrulamaBankaAdi']; ?></td>
                    <td><?= $row['dogrulamaHesapNo']; ?></td>
                    <td>$<?= $row['dogrulamaToplam']; ?></td>
                    <td><a href="<?= base_url('backend/konfirmasi/viewkonfirmasi/'.$row['rezervasyonKodu']) ?>" class="btn btn btn-info">İncele</a></td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
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