
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Database Santri Pondok Informatika</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		
		<meta name="keywords" content="" />
		<meta name="description" content="" />

	
	
		<script src="https://santri.pimakassar.com/assets/themes/default/js/jquery-1.9.1.min.js"></script>
		<script src="https://santri.pimakassar.com/assets/themes/default/hero_files/bootstrap-transition.js"></script>
		<script src="https://santri.pimakassar.com/assets/themes/default/hero_files/bootstrap-collapse.js"></script>
	
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://santri.pimakassar.com/assets/images/logo-sm.png">

        <!-- Plugins css -->
        <link href="https://santri.pimakassar.com/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://santri.pimakassar.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://santri.pimakassar.com/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://santri.pimakassar.com/assets/css/mobi.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="container-fluid">
           

<div class="row justify-content-center" style="margin-top:50px">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"><?php echo lang('change_password_heading');?></h4>

                <div id="infoMessage"><?php echo $message;?></div>

                <?php echo form_open("auth/change_password");?>

                    <div class="form-group">
                        <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                        <?php echo form_input($old_password, '' ,array('class'=>'form-control', 'placeholder'=>'Password Lama'));?>
                        <small class="form-text text-muted">Input Password Sebelumnya</small>
                    </div>

                    <div class="form-group">
                        <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                        <?php echo form_input($new_password, '' ,array('class'=>'form-control', 'placeholder'=>'Password Baru'));?>
                    </div>

                    <div class="form-group">
                        <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                        <?php echo form_input($new_password_confirm, '' ,array('class'=>'form-control', 'placeholder'=>'Konfirm Password'));?>
                    </div>

                    <?php echo form_input($user_id);?>
                    <!-- <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p> -->
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Change</button>

                <?php echo form_close();?>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

</div>
<!-- 
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?> -->
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

        <!-- Dashboar 1 init js-->
        <script src="https://santri.pimakassar.com/assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="https://santri.pimakassar.com/assets/js/app.min.js"></script>
        
    </body>
</html>