<?php
include "../app/config.php";
include "../app/UsersController.php";
include '../assets/layouts/includes.php';

$userController = new UserController();
$userDetails = $userController->getEspecificUser($_SESSION['id']);
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
            <div class="page-content ">
                <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                        <img src="../assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                    </div>
                </div>
                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                    <div class="row g-4 ">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="<?= $userDetails->avatar?>" alt="user-img" class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1"><?= $userDetails->name?></h3>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <a href="edituser.php?id=<?= $userDetails->id?>" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted ">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Name :</th>
                                                        <td class="text-muted"><?= $userDetails->name?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Last Name :</th>
                                                        <td class="text-muted"><?= $userDetails->lastname?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Email :</th>
                                                        <td class="text-muted"><?= $userDetails->email?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Role :</th>
                                                        <td class="text-muted"><?= $userDetails->role?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Phone Number :</th>
                                                        <td class="text-muted"><?= $userDetails->phone_number?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row-->
            </div>
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
</body>

</html>