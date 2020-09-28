
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin masjid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<meta name="keywords" content="" />
		<meta name="description" content="" />

        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
	
		<script src="https://santri.pimakassar.com/assets/themes/default/js/jquery-1.9.1.min.js"></script>
		<script src="https://santri.pimakassar.com/assets/themes/default/hero_files/bootstrap-transition.js"></script>
		<script src="https://santri.pimakassar.com/assets/themes/default/hero_files/bootstrap-collapse.js"></script>
	
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://santri.pimakassar.com/assets/images/logo-sm.png">

        <!-- Plugins css -->
        <link href="https://santri.pimakassar.com/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="https://santri.pimakassar.com/assets/libs/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="https://santri.pimakassar.com/assets/css/bootstrap2.min.css" rel="stylesheet" type="text/css" />
        <link href="https://santri.pimakassar.com/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://santri.pimakassar.com/assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <!-- Plugin js -->
        <script src="https://santri.pimakassar.com/assets/libs/fullcalendar/fullcalendar.min.js"></script>


    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="https://santri.pimakassar.com/" class="logo text-center">
                            <span class="logo-lg">
                                <img src="https://santri.pimakassar.com/assets/images/logo-dark.png" alt="" height="18">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="https://santri.pimakassar.com/assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>
                    </div>
                </div> <!-- end container-fluid-->
            </div>            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
    <li class="has-submenu">
        <a href="<?php echo site_url('masjid')?>">
            <i class="fas fa-home mr-1"></i>Dashboard
        </a>
    </li>
    <li class="has-submenu">
        <a href="<?php echo site_url('masjid/jamaah')?>"> <i class="fas fa-users mr-1"></i>Jamaah</a>
    </li>
    <li class="has-submenu">
        <a href="<?php echo site_url('masjid/galeri')?>">
            <i class="fas fa-image mr-1"></i>Galeri
        </a>
    </li>
    <li class="has-submenu">
        <a href="<?php echo site_url('masjid/keuangan')?>">
            <i class="fas fa-money-bill-wave mr-1"></i>Keuangan
        </a>
    </li>
    <li class="has-submenu">
        <a href="#">
            <i class="fas fa-settings"></i>Setting
        </a>
        <ul class="submenu">
            <li class="has-submenu">
                <li>
                    <a href="https://santri.pimakassar.com/user">Users</a>
                </li>
                <li>
                    <a href="#">Buat Tabel</a>
                </li>
                <li>
                    <a href="https://santri.pimakassar.com/data/index/jenis_musyawarah">Jenis Musyawarah</a>
                </li>
                <li>
                    <a href="https://santri.pimakassar.com/data/index/angkatan">Angkatan</a>
                </li>
                <li>
                    <a href="https://santri.pimakassar.com/data/index/statusrelasi">Status Relasi</a>
                </li>
                <li>
                    <a href="https://santri.pimakassar.com/data/index/jenisrelasi">Jenis Relasi</a>
                </li>
                <li>
                    <a href="https://santri.pimakassar.com/data/index/wktnyetor">Jadwal Hafalan</a>
                </li>
                <!-- <li>
                    <a href="#">Persuratan</a>
                </li> -->
            </li>
        </ul>
    </li>
</ul>                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">
                
                
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.css" rel="stylesheet" type="text/css" />

    <script src="https://santri.pimakassar.com/assets/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.js"></script>
    
        <div class="mt-3"><?php echo $output; ?></div>        
	
                                    
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-6">
                2015 - 2019 &copy; UBold theme by <a href="">Coderthemes</a> 
            </div> -->
            <div class="col-md-6">
                <!-- 2020 &copy; PONDOK INFORMATIKA  -->
                <img src="https://santri.pimakassar.com/assets/images/logo-dark.png" alt="" width="100px">
            </div>
            <!-- <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div> -->
        </div>
    </div>
</footer>        <!-- end Footer -->
                <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="https://santri.pimakassar.com/assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="https://santri.pimakassar.com/assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="https://santri.pimakassar.com/assets/libs/flot-charts/jquery.flot.crosshair.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="https://santri.pimakassar.com/assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="https://santri.pimakassar.com/assets/js/app.min.js"></script>
        <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    </body>
</html>