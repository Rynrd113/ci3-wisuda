<div class="footer clearfix mb-0 text-muted">
  <div class="float-start">
    <p>&copy; 2025 Portal Mahasiswa. Semua hak cipta dilindungi.</p>
  </div>
  <div class="float-end">
    <p>
      Dibuat dengan
      <span class="text-danger">
        <i class="bi bi-heart-fill icon-mid"></i>
      </span>
      oleh <a href="https://saugi.me">SI </a>
    </p>
  </div>
</div>
</footer>
<!-- Bootstrap JS -->
<!-- <script src="assets/static/js/initTheme.js"></script> -->
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/compiled/js/app.js"></script>
<script src="assets/static/js/components/dark.js"></script>
<!-- <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/static/js/pages/simple-datatables.js"></script> -->
<script>
  function printReceipt(nim, nama, item, rincianItem) {
    const receiptDetails = `
                <p><strong>NIM:</strong> ${nim}</p>
                <p><strong>Nama:</strong> ${nama}</p>
                <p><strong>Item:</strong> ${item}</p>
                <p><strong>Rincian Item:</strong> ${rincianItem}</p>
            `;
    document.getElementById("receipt-details").innerHTML = receiptDetails;
    document.getElementById("receipt").classList.remove("hidden");
    window.print();
  }
</script>
<script src="assets/extensions/filepond/filepond.js"></script>
<script src="assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.js"></script>
<script src="assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.js"></script>
<script src="assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.js"></script>
<script
  src="assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.js"></script>
<script src="assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.js"></script>
<script src="assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.js"></script>
<script src="assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.js"></script>
<script src="assets/extensions/toastify-js/src/toastify.js"></script>
<script src="assets/static/js/pages/filepond.js"></script>
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>