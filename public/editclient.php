<?php
include "../app/config.php";
include '../assets/layouts/includes.php';

include "../app/ClientsController.php";
$clientController = new ClientsController();
$id = $_GET['id'];
$clientDetails = $clientController->getEspecificClients($id);
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
                    <!--end col-->
                    <div class="col-xxl-12">
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
                                        <form method="post" action="<?= BASE_PATH ?>client" id="form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Full Name</label>
                                                        <input name="name" type="text" class="form-control" id="firstnameInput" placeholder="Enter your Name" value="<?= $clientDetails->name ?>">
                                                    </div>
                                                    <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email Address</label>
                                                        <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="<?= $clientDetails->email ?>">
                                                    </div>
                                                    <p class="formulario__input-error text-danger" id="grupo_email">The format is not supported.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                        <input name="phone_number" type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?= $clientDetails->phone_number ?>">
                                                    </div>
                                                    <p class="formulario__input-error text-danger" id="grupo_phone_number">Only numbers (10-14) are accepted</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter Your Address" value="" />
                                                    </div>
                                                    <p class="formulario__input-error text-danger" id="grupo_password">Minimum 8 characters</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="password2" class="form-label">Confirm password</label>
                                                        <input name="password2" type="password" class="form-control" id="password2" placeholder="Enter Your Address" value="" />
                                                    </div>
                                                    <p class="formulario__input-error text-danger" id="grupo_password2">The passwords must be the same</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="level_id">
                                                                    Level
                                                                </label>
                                                                <select class="form-select" aria-label="Default select example" id="level_id" name="level_id">
                                                                    <option value="1">Normal</option>
                                                                    <option value="2">Premium</option>
                                                                    <option value="3">VIP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="1" name="is_suscribed" id="is_suscribed">
                                                                <label class="form-check-label" for="is_suscribed">
                                                                    Suscribed
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-primary" id="send">Update</button>
                                                        <a href="clients" type="button" class="btn btn-soft-success">Cancel</a>
                                                        <input type="hidden" name="action" value="editClients">
                                                        <input type="hidden" name="id" value="<?= $id?>">
                                                        <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
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
                </div>
            </div>
            <!--end col-->
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
    <script src="../assets/js/config/newCl.js"></script>

</body>

</html>