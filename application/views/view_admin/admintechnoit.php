<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sys Admin | TechnoIT</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url()?>tempsys/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="<?= base_url()?>tempsys/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?= base_url()?>tempsys/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?= base_url()?>tempsys/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="<?= base_url()?>tempsys/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="<?= base_url()?>tempsys/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?= base_url()?>tempsys/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Dropzone Css -->
    <link href="<?= base_url()?>tempsys/plugins/dropzone/dropzone.css" rel="stylesheet">
    <!-- Bootstrap Tagsinput Css -->
    <link href="<?= base_url()?>tempsys/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <!-- Wait Me Css -->
    <link href="<?= base_url()?>tempsys/plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <!-- Custom Css -->
    <link href="<?= base_url()?>tempsys/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>tempsys/css/themes/all-themes.css" rel="stylesheet" />
    <!--select -->
    <link href="<?= base_url() ?>tempsys/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Sweetalert Css -->
    <link href="<?= base_url() ?>tempsys/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?= base_url()?>tempsys/plugins/tinymce/tinymce.min.js"> </script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <?php $this->load->view('view_admin/header');?>

    <section>
        <!-- Left Sidebar -->
        <?php $this->load->view('view_admin/left-menu');?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            
        <?php $this->load->view('view_admin/content');?>
            
        </div>
    </section>

    

        <?php $this->load->view($js)?>
    
        
</body>

</html>