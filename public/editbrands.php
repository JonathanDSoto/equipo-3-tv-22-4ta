<?php
include '../app/config.php';
include '../assets/layouts/includes.php';
$id = $_GET['id'];
$productos = $brandss->getProducts($id);
$source = $brandss->spcf($id);
?>
<doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- jsvectormap css -->
    <link href="../assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="../assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/details.css" rel="stylesheet" type="text/css" />



</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Inicia navbar -->
        <?php include '../assets/layouts/navbar.template.php' ?>
        <!-- Termina navbar -->
        <!-- Inicia sidebar -->
        <?php include '../assets/layouts/sidebar.template.php' ?>
        <!-- Termina sidebar -->
        <!-- ========== App Menu ========== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="../assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                        </div>
                    </div>

                    <form method="post" action="<?= BASE_PATH ?>brand" enctype="multipart/form-data" id="form">
                        <div class="row">
                            <div class="col">
                                <div class="card mt-n5">
                                    <div class="card-body p-4">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                        <i class="fas fa-home"></i> Brands Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Brands Name</label>
                                                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter brand name" value="<?= $source->name ?>">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="description" class="form-label">Description</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter brand description" value="<?= $source->description ?>">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_description">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="submit" class="btn btn-primary" id="send">Save</button>
                                                                <a href="brands" type="button" class="btn btn-soft-success">Cancel</a>
                                                                
                                                                <input type="hidden" name="id" value="<?= $source->id ?>">
                                                                <input type="hidden" name="action" value="update">
                                                                <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end row-->
                </div>
            </div><!-- End Page-content -->
        </div>
    </div>
    <?php include '../assets/layouts/footer.template.php' ?>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction() " class="btn btn-danger btn-icon " id="back-to-top ">
        <i class="ri-arrow-up-line "></i>
    </button>

    <!--end back-to-top-->

    
    <!-- JAVASCRIPT -->
    <?php include '../assets/layouts/js.template.php' ?>

    <!-- apexcharts -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js "></script>

    <!-- Vector map-->
    <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js "></script>
    <script src="../assets/libs/jsvectormap/maps/world-merc.js "></script>

    <!--Swiper slider js-->
    <script src="../assets/libs/swiper/swiper-bundle.min.js "></script>

    <!-- Dashboard init -->
    <script src="../assets/js/pages/dashboard-ecommerce.init.js "></script>

    <!-- App js -->
    <script src="../assets/js/app.js "></script>
    <script src="../assets/js/config/dosC.js"></script>
</body>

</html>