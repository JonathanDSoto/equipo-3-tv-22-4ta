<?php
include '../app/config.php';
include '../assets/layouts/includes.php';

$id = $_GET['id'];
$couponDetails = $couponController->getEspecificCoupons($id);
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

                        <form method="post" action="<?= BASE_PATH ?>cupon" enctype="multipart/form-data" id="form">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                            <i class="fas fa-home"></i> Coupon Details
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
                                                                    <label for="couponInput" class="form-label">Coupon Name</label>
                                                                    <input name="name" type="text" class="form-control" id="couponname" placeholder="Enter coupon name" value="<?= $couponDetails->name ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="percentage_discount" class="form-label">Percentage discount</label>
                                                                    <input name="percentage_discount" type="text" class="form-control" id="percentage_discount" placeholder="Enter Percentage discount" value="<?= $couponDetails->percentage_discount ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_percentage_discount">The format only accepts numbers 0-99.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="descriptionInput" class="form-label">Code</label>
                                                                    <input name="code" type="text" class="form-control" id="code" placeholder="Enter Amount discount" value="<?= $couponDetails->code ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_code">Is necesary no symbols.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="min_amount_required" class="form-label">Min amount required</label>
                                                                    <input name="min_amount_required" type="text" class="form-control" id="min_amount_required" value="<?= $couponDetails->min_amount_required ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_min_amount_required">The format only numbers.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="min_product_required" class="form-label">Min product required</label>
                                                                    <input name="min_product_required" type="text" class="form-control" id="min_product_required" value="<?= $couponDetails->min_product_required ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_min_product_required">The format only accepts numbers.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="count_uses" class="form-label">Count uses</label>
                                                                    <input name="count_uses" type="text" class="form-control" id="count_uses" placeholder="Enter Max uses" value="<?= $couponDetails->count_uses ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_count_uses">The format only accepts numbers.</p>
                                                            </div>
                                                            <!--end col COUNT USES TIENE QUE SER DEFAULT 0-->

                                                            <div class="col-md-6">
                                                                <label for="status" class="form-label">Status</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="status" value="1" id="status1" checked>
                                                                    <label class="form-check-label" for="status1">
                                                                        Active
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="status" id="status2">
                                                                    <label class="form-check-label" for="status2">
                                                                        Inactive
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--end col STATUS TIENE QUE SER DEFAULT 1-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="max_uses" class="form-label">Max uses</label>
                                                                    <input name="max_uses" type="text" class="form-control" id="max_uses" value="<?= $couponDetails->max_uses ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_max_uses">The format only accepts numbers.</p>

                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="start_date" class="form-label">Start date</label>
                                                                    <input name="start_date" type="text" class="form-control" id="start_date" value="<?= $couponDetails->start_date ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_start_date">The format only accepts numbers and mid dash.</p>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="end_date" class="form-label">End date</label>
                                                                    <input name="end_date" type="text" class="form-control" id="end_date" value="<?= $couponDetails->end_date ?>">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_end_date">The format only accepts numbers and mid dash.</p>
                                                            </div>
                                                            <div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="valid_only_first_purchase" id="valid_only_first_purchase">
                                                                    <label class="form-check-label" for="billing">
                                                                        Valid only first purchase
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--end col-->


                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                                    <a href="cupones" type="button" class="btn btn-soft-success">Cancel</a>

                                                                    <input type="hidden" name="id" value="<?= $id ?>">
                                                                    <input type="hidden" name="action" value="editCoupons">
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

        <!--preloader-->
        <div id="preloader ">
            <div id="status ">
                <div class="spinner-border text-primary avatar-sm " role="status ">
                    <span class="visually-hidden ">Loading...</span>
                </div>
            </div>
        </div>

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
        <script src="../assets/js/config/cuponE.js"></script>
    </body>

    </html>