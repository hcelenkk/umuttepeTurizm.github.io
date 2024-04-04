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
      <h1 class="h5 text-gray-800">Otobüs Yönetimi</h1>
      <!-- DataTales Example -->
      
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#ModalTujuan">
          Add Bus
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Otobüs Kodu</th>
                  <th>Otobüs Adı</th>
                  <th>Otobüs Plakası</th>
                  <th>Koltuk Kapasitesi</th>
                  <th>Durum</th>
                  <th>Aksiyon</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($bus as $row ) { ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= strtoupper($row['otobusKodu']); ?></td>
                  <td><?= strtoupper($row['otobusAdi']); ?></td>
                  <td><?= strtoupper($row['otobusPlakasi']); ?></td>
                  <td><?= $row['otobusKapasitesi'] ?></td>
                  <?php if ($row['otobusDurumu'] == '1') { ?>
                    <td class="btn-success"> Aktif</td> 
                    <?php } else { ?>
                    <td class="btn-danger">Pasif</td>
                  <?php } ?>
                  <td align="center"><a href="<?= base_url('backend/bus/viewbus/'.$row['otobusKodu'])?>" class="btn btn btn-info">İncele</a></a>
                </td>
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

<!-- Modal -->
<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add Bus</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="<?= base_url()?>backend/bus/tambahbus" method="post">
      <div class="form-group">
        <label for="platbus" class="">Bus Name</label>
        <input type="text" class="form-control" name="otobusAdi" placeholder="Bus Name">
      </div>
      <div class="form-group">
        <label for="platbus" class="">Bus Number Plate</label>
        <input type="text" class="form-control" name="otobusPlakasi" placeholder="Bus Plate">
      </div>
      <div class="form-group">
        <label for="seat" class="">Number of Seats (Max.23)</label>
        <input type="number" class="form-control" id="seat" name="seat" placeholder="[Maximum 23]">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        <button class="btn btn-success">Save</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>

<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>