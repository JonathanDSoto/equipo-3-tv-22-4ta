<?php
include "../app/config.php";
include '../assets/layouts/includes.php';

$id = $_GET['user'];
?>
<!doctype html>
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
    <link href="../assets/css/details.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />


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
                    <div class="row">

                        <div class="">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                <i class="fas fa-home"></i> Personal Details
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="<?= BASE_PATH ?>client" method="POST" id="form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="">
                                                        </div>
                    				                    <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="lastname" class="form-label">Lastname</label>
                                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your lastname" value="">
                                                        </div>
                    				                    <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="street" class="form-label">Street</label>
                                                            <input type="text" class="form-control" name="street" id="street" placeholder="Enter your Street name" value="">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_street">Minimun 3 characters.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="postal_code" class="form-label">Postal code</label>
                                                            <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter your Postal code" value="">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_postal_code">Just numbers.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="city" class="form-label">City</label>
                                                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city" value="">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_city">The format only accepts letters and spaces.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="province" class="form-label">Province</label>
                                                            <input type="text" class="form-control" name="province" id="province" placeholder="Enter your province" value="">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_province">The format only accepts letters and spaces.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phone_number" class="form-label">Phone number</label>
                                                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter your phone number" value="">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_phone_number">Just numbers.</p>
                                                    </div>
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="1" name="billing" id="billing">
                                                            <label class="form-check-label" for="billing">
                                                                Is billing address
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <input type="hidden" value="addAddress" name="action">
                                                            <input type="hidden" value="<?= $id ?>" name="id">
                                                            <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
                                                            <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                            <a href="clients.php" type="button" class="btn btn-soft-success">Cancel</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
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
    <script src="../assets/js/config/newAddress.js"></script>
</body>

</html>