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
        <h1 class="h5 text-gray-800">Customers List</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Customer Code</th>
                  <th>ID card number</th>
                  <th>Name</th>
                  <th>Address </th>
                  <th>Email</th>
                  <th>Contact</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $i=1;foreach ($pelanggan as $row) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['musteriKodu']; ?></td>
                    <td><?= $row['musteriNo']; ?></td>
                    <td><?= $row['musteriAdi']; ?></td>
                    <td><?= $row['musteriAdres']; ?></td>
                    <td><?= $row['musteriEmail']; ?></td>
                    <td><?= $row['musteriTelefon']; ?></td>
                    <!-- <td><a href="<?= base_url('backend/home/viewpelanggan/'.$row['musteriKodu']) ?>" class="btn btn btn-info">View</a></td> -->
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.container-fluid -->
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