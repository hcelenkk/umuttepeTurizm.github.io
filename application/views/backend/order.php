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
        <h1 class="h5 text-gray-800">Booking List</h1>
        </div>
        <div class="card-body">
        
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Code</th>
                  <th>Schedule Code</th>
                  <th>Departure Date</th>
                  <th>Customer</th>
                  <th>Purchase Date</th>
                  <th>Ticket Qty.</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1;foreach ($order as $row) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['rezervasyonKodu']; ?></td>
                    <td><?= $row['saatKodu']; ?></td>
                    <td><?= hari_indo(date('N',strtotime($row['rezervasyonYapilanTarih']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$row['rezervasyonYapilanTarih'].'')));?></td>
                    <td><?= $row['rezervasyonSahibi']; ?></td>
                    <td><?= $row['rezervasyonTarihi']; ?></td>
                    <?php $sqlcek = $this->db->query("SELECT * FROM tbl_rezervasyon WHERE rezervasyonKodu LIKE '".$row['rezervasyonKodu']."'")->result_array(); ?>
                    <td><?= count($sqlcek); ?></td>
                    <?php if ($row['rezervasyonDurumu'] == '1') { ?>
                          <td class="btn-danger"> Unpaid</td> 
                          <?php } elseif($row['rezervasyonDurumu'] == '2') { ?>
                          <td class="btn-success"> Paid</td>
                        <?php } else { ?>
                          <td class="btn-warning"> Cancelled</td>
                          <?php } ?>
                    <td><a href="<?= base_url('backend/order/vieworder/'.$row['rezervasyonKodu']) ?>" class="btn btn btn-info">View</a></td>
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