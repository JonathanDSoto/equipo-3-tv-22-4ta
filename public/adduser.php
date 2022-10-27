<?php
include "../app/config.php";
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

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="../assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                        </div>
                    </div>

                    <form method="post" action="../app/UsersController.php" enctype="multipart/form-data" id="form">
                        <div class="row">
                            <div class="col">
                                <div class="card mt-n5">
                                    <div class="card-body p-4">
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
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">First Name</label>
                                                                <input name="name" type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="lastname" class="form-label">Last Name</label>
                                                                <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter your lastname" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="phone_number" class="form-label">Phone Number</label>
                                                                <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Enter your phone number" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_phone_number">The number can only contain 10 to 14 numbers.</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="profile_photo_file" class="form-label">Profile Photo</label>
                                                                <input name="profile_photo_file" type="file" class="form-control" id="profile_photo_file" placeholder="Enter your phone number" value="">
                                                            </div>
                                                            <p class="formulario__input-error text-danger" id="grupo_photo">The photo is necesary (just .jpg .png .jpeg .svg)</p>


                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Email Address</label>
                                                                <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="">
                                                            </div>
                                                            <p class="formulario__input-error text-danger" id="grupo_email">The format is not supported</p>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Your Password" value="" />
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_password">The password must have a minimun of 8 characters</p>

                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="password2" class="form-label">Confirm your password</label>
                                                                <input name="password2" type="password" class="form-control" id="password2" placeholder="Enter Your Password" value="" />
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_password2">The password must be the same</p>

                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                        <a href="users.php" type="button" class="btn btn-soft-success">Cancel</a>
                                                                
                                                                <input type="hidden" name="action" value="newUser">
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
    <script src="../assets/js/config/newAddress.js"></script>
</body>

</html>