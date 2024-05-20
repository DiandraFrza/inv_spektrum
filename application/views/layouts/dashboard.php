<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/Logo_Spektrum.png') ?>">
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/extra-libs/c3/c3.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/chartist/chartist.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/icons/font-awesome/css/fontawesome-all.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
    </head>

<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php $this->load->view('layouts/_navbar') ?>
        <?php $this->load->view('layouts/_sidebar') ?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Page content wrapper -->
            <div id="pjax-container">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-7 align-self-center">
                            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $breadcrumb_title ?></h3>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb m-0 p-0">
                                        <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb_path ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-5 align-self-center">
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btn-rounded"><i class="fas fa-calendar"></i>
                                    &nbsp;<?= date('d/m/y') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bread crumb and right sidebar toggle -->

                <!-- Content -->
                <?php $this->load->view($page) ?>
                <!-- End Content -->
            </div>
            <!-- End Page content wrapper -->

            <!-- Footer -->
            <footer class="footer text-center text-muted">
                © PT Spektrum Kreasi Pratama
            </footer>
            <!-- End Footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Main Wrapper -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/popper.js/umd/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/app-style-switcher.js') ?>"></script>
    <script src="<?= base_url('assets/js/feather.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/perfect-scrollbar/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/sidebarmenu.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.pjax.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $(document).pjax('a[data-pjax]', '#pjax-container', {
                fragment: '#pjax-container',
                timeout: 8000
            });
        });

        $(document).on('pjax:success', function() {
            // Memanggil fungsi untuk fitur "selected"
            handleSelectedMenu();
        });

        // Fungsi untuk fitur "selected"
        function handleSelectedMenu() {
            // Menghapus kelas "selected" dari semua elemen menu
            $('#sidebarnav .sidebar-item').removeClass('selected');

            // Mendapatkan URL saat ini untuk menentukan menu mana yang harus dipilih
            var currentUrl = window.location.pathname;

            // Mencari tautan yang sesuai dengan URL saat ini dan menambahkan kelas "selected"
            $('#sidebarnav .sidebar-item').each(function() {
                var linkUrl = $(this).find('.sidebar-link').attr('href');
                if (currentUrl === linkUrl) {
                    $(this).addClass('selected');
                }
            });
        }
    </script>
</body>
</html>