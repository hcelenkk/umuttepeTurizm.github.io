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
          <h6 class="m-0 font-weight-bold text-primary">Booking Code [<?= $tiket[0]['rezervasyonKodu']; ?>]  </h6>
        </div>
        <div class="card-body">
          <form action="<?= base_url().'backend/order/inserttiket' ?>" method="post" enctype="multipart/form-data">
             
            <div class="card-body">
              <div class="row">
                <?php foreach ($tiket as $row ) { ?>
                <input type="hidden" class="form-control" name="musteriKodu" value="<?= $row['musteriKodu'] ?>" readonly>
                <input type="hidden" class="form-control" name="rezervasyonKodu" value="<?= $row['rezervasyonKodu'] ?>" readonly>
                <input type="hidden" class="form-control" name="asal_beli" value="<?= $row['rezervasyonTerminali'] ?>" readonly>
                <input type="hidden" class="form-control" name="biletKodu[]" value="<?= $row['biletKodu'] ?>" readonly>
                <div class="col-sm-6">
                  <label >Ticket Code <b><?= $row['biletKodu'] ?></b></label>
                  <p>Customer Name <b><?= $row['rezervasyonSahibi']; ?></b></p>
                  <hr>
                  <div class="row form-group">
                    <label for="nama" class="col-sm-4 control-label">Schedule Code</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="saatKodu" value="<?= $row['saatKodu'] ?>" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="nama" class="col-sm-4 control-label">Passenger name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama[]" value="<?= $row['koltukSahibiAdi'] ?>" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Seat Number</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="no_kursi[]" value="<?= $row['koltukSahibiNo'] ?>" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Passenger Age</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="umur_kursi[]>" value="<?= $row['koltukSahibiYasi'] ?> Years" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Ticket price</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="harga" value="<?php  echo $row['fiyatTarifesi']; ?>" readonly>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Payment Limit</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="tgl_beli" value="<?= hari_indo(date('N',strtotime($row['rezervasyonSonGecerlilik']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$row['rezervasyonSonGecerlilik'].''))).', '.date('H:i',strtotime($row['rezervasyonSonGecerlilik']));  ?>" readonly>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="col-sm-6">
                  <div class="row form-group">
                  <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>Check Payment Confirmation!!</h4>
                    <p>Here you can check the payment confirmation of the customers. Simply click on the view button to see the payment proof from the customer.</p>
                    <hr>
                    <p class="mb-0"> <a href="<?= base_url('backend/konfirmasi/viewkonfirmasi/'.$tiket[0]['rezervasyonKodu']) ?>" class="btn btn-success">View</a></p>
                  </div>
                    
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">
                       <?php if ($tiket[0]['rezervasyonDurumu'] == '1') { ?>
                      <select class="form-control" name="status" required>
                          <option value='' selected disabled>Unpaid</option>
                          <option value='2'>Paid</option>
                          <option value='3'>Delete Order</option>
                           </select>
                          <?php } elseif($tiket[0]['rezervasyonDurumu'] == '2') { ?>
                            <p class="btn "><b class="btn btn-outline-success">Paid</b> </p>

                        <?php } else { ?>
                        <p class="btn"><b class="btn btn-outline-warning">Cancelled</b></p>
                        <?php }?>
                     
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Total payment</label>
                    <div class="col-sm-8">
                      <p><b>$<?php $total =  count($tiket) * $tiket[0]['fiyatTarifesi']; echo number_format($total)?></b></p>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <hr><a class="btn btn-danger float-left" href="<?= base_url().'backend/order' ?>"> Go Back</a>
              <?php if ($tiket[0]['rezervasyonDurumu'] == '1') { ?>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php }else if($tiket[0]['rezervasyonDurumu'] == '3') { ?>
                <p><b>Cancelled Ticket</b></p>
            <?php }else{ ?>
              <a class="btn btn-primary float-right" href="<?= base_url('assets/backend/upload/etiket/'.$row['rezervasyonKodu'].'.pdf') ?>" target="_blank"> Print E-Ticket</a> 
              <!-- <a class="btn btn-primary float-right" href="<?= base_url('backend/order/kirimemail/'.$row['rezervasyonKodu']) ?>"> Send E-Ticket</a> -->
                        <?php } ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <?php $this->load->view('backend/include/base_footer'); ?>
  <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>