
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'koneksi.php'; ?>
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

        <style>
            @media (min-width: 768px) {
            .carousel-multi-item-2 .col-md-3 {
            float: left;
            width: 25%;
            max-width: 100%; } }

            .carousel-multi-item-2 .card img {
            border-radius: 2px; }
        </style>
	
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

    <?php
        // $jamaah = mysqli_query($koneksi, "SELECT * FROM jamaah");
        // $no=1;
        // foreach ($jamaah as $row){
        //     echo "<tr>
        //               <td>".$row['nama']."</td>
        //               <td>".$row['gender']."</td>
        //               <td>".$row['hp']."</td>
        //           </tr>";
        //           $no++;
        // }
    ?>
        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
                </ul>
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
        <a href="#">
            <i class="fas fa-home mr-1"></i>Dashboard
        </a>
    </li>
    <li class="has-submenu">
        <a href="#"> <i class="fas fa-users mr-1"></i>Jamaah</a>
    </li>
    <li class="has-submenu">
        <a href="#">
            <i class="fas fa-image mr-1"></i>Galeri
        </a>
    </li>
    <li class="has-submenu">
        <a href="#">
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
                    <a href="masjid/users">Users</a>
                </li>
                <li>
                    <a href="auth/change_password">Ubah Password</a>
                </li>
                <li>
                    <a href="<?php echo site_url('masjid/mading/add')?>">Buat Mading</a>
                </li>
                <li>
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

	<!-- start page title -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><a href="<?php echo site_url('masjid')?>">Ali Hizam</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				<h4 class="page-title">Halaman Utama</h4>
			</div>
		</div>
	</div>     
	<!-- end page title --> 

	<div class="row">

        <div class="col-md-6 col-xl-6">
			<div class="widget-rounded-circle card-box bg-info">
				<div class="row align-items-center">
					<div class="col-auto">
						<div class="avatar-lg">
							<img src="https://santri.pimakassar.com/assets/uploads/users/7ae3f-profile.jpg" class="img-fluid rounded-circle img-thumbnail" alt="user-img">
						</div>
					</div>
					<div class="col">
						<h5 class="mb-1 mt-2 text-white font-16">Muhdan Fyan Syah Sofian</h5>
						<p class="mb-2 text-white-50">Admin</p>
					</div>
				</div> <!-- end row-->
			</div> <!-- end widget-rounded-circle-->
		</div> <!-- end col-->
        
		<div class="col-md-6 col-xl-6">
			<div class="widget-rounded-circle card-box">
				<div class="row align-items-center">
					<div class="col-auto">
						<div class="avatar-lg">
							<img src="https://santri.pimakassar.com/assets/uploads/fotosantri/57acb-ketua.jpg" class="img-fluid rounded-circle" alt="user-img">
						</div>
					</div>
					<div class="col">
						<h5 class="mb-1 mt-2 font-16">Satriadi</h5>
						<p class="mb-2 text-muted">Admin Harian</p>
					</div>
				</div> <!-- end row-->
			</div> <!-- end widget-rounded-circle-->
		</div> <!-- end col-->
	</div>
	<!-- end row -->

    <div class="row">
        <div class="col-sm-6 col-md-4 col-xl-3">
            <a href="<?php echo site_url('masjid/jamaah')?>">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fas fa-users font-22 avatar-title text-info" style="margin: auto;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right"><?php $jamaah = mysqli_query($koneksi, "SELECT * FROM jamaah"); 
                            $jumlah_jamaah = mysqli_num_rows($jamaah); ?>
                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo number_format($jumlah_jamaah); ?></span></h3>
                                <p class="text-muted mb-1 text-truncate"> Jamaah</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </a>
        </div> <!-- end col-->

        <div class="col-sm-6 col-md-4 col-xl-3">
            <a href="<?php echo site_url('masjid/galeri')?>">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fas fa-box font-22 avatar-title text-info" style="margin: auto;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right"><?php $galeri = mysqli_query($koneksi, "SELECT * FROM galeri"); 
                            $jumlah_galeri = mysqli_num_rows($galeri); ?>
                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo number_format($jumlah_galeri); ?></span></h3>
                                <p class="text-muted mb-1 text-truncate">Galeri</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </a>
        </div> <!-- end col-->

        <div class="col-sm-6 col-md-4 col-xl-3">
            <a href="<?php echo site_url('masjid/keuangan')?>">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fas fa-dollar-sign font-22 avatar-title text-info" style="margin: auto;"></i>
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                            <?php
                              $query1 =  mysqli_query($koneksi, "SELECT SUM(jumlah) FROM keuangan WHERE kategori = 'pemasukan' ");
                              $row1 = mysqli_fetch_array($query1);
                                  $a = $row1['SUM(jumlah)'];
                              $query2 =  mysqli_query($koneksi, "SELECT SUM(jumlah) FROM keuangan WHERE kategori = 'pengeluaran' ");
                              $row2 =  mysqli_fetch_array($query2);
                                 $b = $row2['SUM(jumlah)'];
                            ?>
                                <h4 class="text-dark mt-1">Rp. <span data-plugin="counterup"><?php echo number_format($a - $b, -3);?></span>k</h4>
                                <p class="text-muted mb-1 text-truncate">Saldo Kas</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </a>
        </div> <!-- end col-->

        <div class="col-sm-6 col-md-4 col-xl-3">
            <a href="<?php echo site_url('masjid/inventaris')?>">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fas fa-briefcase font-22 avatar-title text-info" style="margin: auto;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">0</span></h3>
                                <p class="text-muted mb-1 text-truncate"> Inventaris</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </a>
        </div> <!-- end col-->

    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header text-center"><span>MADING</span></div>
                <div class="card-body">
                <?php $mading = mysqli_query($koneksi, "SELECT * FROM mading ORDER BY id DESC LIMIT 1");
                foreach ($mading as $row){
                ?>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                <h2 class="card-title"><?php echo $row['tentang'];?></h2>
                                        <?php echo $row['isi_mading'];?>
                                </div>
                                <footer class="blockquote-footer ml-1">Sumber : <cite title="Source Title"><?php echo $row['sumber']?></cite></footer> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    <!-- </div> -->
                    <!-- end row -->

                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $row['foto']?>" alt="mading img" style="width: 100%;">
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div></div>

                <?php }?>
                </div>
        </div>
    </div>
	<!-- end row -->

    <!-- galleri -->
  

    <!-- end galleri -->
                                    
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
        
    </body>
</html>