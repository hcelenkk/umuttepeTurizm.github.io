<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>&copy; <?= date('Y') ?>Otobüs Bileti Rezervasyon Sistemi </span>
		</div>
	</div>
</footer>
</div>

</div>


<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Çıkmak İstediğine Emin Misin?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Mevcut oturumunuzu sonlandırMayisa hazırsanız aşağıdaki "Oturumu Kapat"ı seçin.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Vazgeç</button>
				<a class="btn btn-danger" href="<?= base_url('backend/login/logout') ?>">Oturumu Kapat</a>
			</div>
		</div>
	</div>
</div>
<div class="preloader">
	<div class="loading">
		<img src="<?= base_url('assets/frontend/img/preloader.gif') ?>" width="100">
		<p>Lütfen Bekleyin...</p>
	</div>
</div>