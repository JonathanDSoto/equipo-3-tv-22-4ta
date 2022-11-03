<?php
include "../app/config.php";
include '../assets/layouts/includes.php';
include "../app/ClientsController.php";
$clientController = new ClientsController();
$clients = $clientController->getAllClients();

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

                        <form method="post" action="<?= BASE_PATH ?>orden" id="form">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                            <i class="fas fa-home"></i> Order Details
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
                                                                    <label for="client_id" class="form-label">Client</label>
                                                                    <select name="client_id" class="form-select form-select-md" id="client_id">

                                                                        <?php if (isset($clients) && count($clients)) : ?>
                                                                            <?php foreach ($clients as $client) : ?>
                                                                                <option value="<?= $client->id ?>"><?= $client->name ?></option>

                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">

                                                                <div class="mb-3">
                                                                    <label for="presentations" class="form-label">Product</label>
                                                                    <select name="presentations" class="form-select form-select-md" id="presentations">
                                                                        <option value="190">Prueba</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="quantity" class="form-label">Quantity</label>
                                                                    <input name="quantity" type="number" class="form-control" id="quantity" value="10" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="coupon_id" class="form-label">Coupon</label>
                                                                    <select name="coupon_id" class="form-select form-select-md" id="coupon_id">
                                                                        <?php if (isset($coupons) && count($coupons)) : ?>
                                                                            <?php foreach ($coupons as $coupon) : ?>
                                                                                <option value="<?= $coupon->id ?>"><?= $coupon->name ?></option>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="address_id" class="form-label">Address</label>
                                                                    <select name="address_id" class="form-select form-select-md" id="address_id">
                                                                        <option value="184">Pendiente de pago</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="payment_type_id" class="form-label">Payment type</label>
                                                                    <select name="payment_type_id" class="form-select form-select-md" id="payment_type_id">
                                                                        <option value="1">Cash</option>
                                                                        <option value="2">Card</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="form-checkbox ">
                                                                    <label class="form-label">
                                                                        <input value="1" type="checkbox"> Pay righ now
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--end col-->


                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                                    <a href="" type="button" class="btn btn-soft-success">Cancel</a>

                                                                    <input type="hidden" name="action" value="create">
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

        <script>
            document.getElementById()
        </script>
    </body>

    </html>