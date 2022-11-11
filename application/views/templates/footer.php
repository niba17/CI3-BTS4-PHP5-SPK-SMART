<!-- End of Page Wrapper -->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<script>
    function l_password() {
        Swal.fire({
            icon: 'question',
            // title: 'Gagal Login!',
            title: '<h1><b>Lupa Password?</b></h1><div class="alert alert-info"><h3><b>Hubungi pihak developer untuk pemulihan password!</b></h3><h4>Whatsapp : 0822-6640-6874<br>Email : randynbts@gmail.com</h4></div>'
            // footer: '<a href="">Why do I have this issue?</a>'
        });
    }

    $(document).ready(function() {

        <?php if ($this->session->flashdata('pesanGagalTambah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Data sudah ada!',
            })
        <?php endif; ?>
        const flash = $('#flash').data('flash')
        console.log(flash)
        if (flash) {
            swal.fire({
                type: 'success',
                icon: 'success',
                showConfirmButton: false,
                timer: 1000
            })
        }
        $(document).on('click', '#btn-edit', function(e) {
            e.preventDefault();
            const pesan = $(this).data('pesan')
            const href = $(this).attr('href');
            swal.fire({
                type: 'warning',
                icon: 'warning',
                title: '<h3>Yakin ingin mengubah data</h3>',
                html: 'anda akan mengubah data Ruko <br> <b>' + pesan + '</b>',
                showCancelButton: true,
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Tidak',
                confirmButtonClass: 'btn btn-info mr-4',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function(result) {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            })
        })
        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            const pesan = $(this).data('pesan')
            const href = $(this).attr('href');
            swal.fire({
                type: 'warning',
                icon: 'warning',
                title: '<h3>Yakin ingin menghapus data</h3>',
                html: 'anda akan menghapus data Ruko <br> <b>' + pesan + '</b>',
                showCancelButton: true,
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Tidak',
                confirmButtonClass: 'btn btn-info mr-4',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function(result) {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            })
        })
        const sw = document.getElementsByClassName('swal2-modal')[0];
        sw.style.width = '183px';
    })
</script>
</body>

</html>