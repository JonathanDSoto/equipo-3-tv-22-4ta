<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <style TYPE="text/css">
        .todo {
            justify-content: center;
            display: flex;
            height: auto;
            width: 100%;

        }
    </style>
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

        <!-- ========== App Menu ========== -->


        <div class="main-content">
            <?php include '../assets/layouts/sidebar.template.php' ?>

            <div class="page-content ">

                <div>
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="../assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4 ">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">Jeff The Killer</h3>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2">
                                            <i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>California, United States
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="todo">
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted ">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Info</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                                            <td class="text-muted">Jeff The Killer</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                                            <td class="text-muted">+(1) 987 6543</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                                            <td class="text-muted">JeffvsSlenderman@gmail.com</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">About</h5>
                                                            <p>Venga ya, ¡tus juegos son basura! Yo he causado infartos con el link de Gifura Tu a la suela del zapato ni me llegas Cortare tus tentáculos y así cenare pulpo a la gallega</p>
                                                            <div class="row">
                                                                <div class="col-6 col-md-4">
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary shadow">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end card-body-->
                                                        </div><!-- end card -->
                                                    </div>
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
        </div>
        <div class="content-main ">

            <!-- end row-->
        </div>
        <?php include '../assets/layouts/footer.template.php' ?>
        <!-- END layout-wrapper -->



        <!--start back-to-top
        <button onclick="topFunction() " class="btn btn-danger btn-icon " id="back-to-top ">
            <i class="ri-arrow-up-line "></i>
        </button>
        -->
        <!--end back-to-top-->

        <!--preloader
        <div id="preloader ">
            <div id="status ">
                <div class="spinner-border text-primary avatar-sm " role="status ">
                    <span class="visually-hidden ">Loading...</span>
                </div>
            </div>
        </div>
        -->

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js "></script>
        <script src="../assets/libs/simplebar/simplebar.min.js "></script>
        <script src="../assets/libs/node-waves/waves.min.js "></script>
        <script src="../assets/libs/feather-icons/feather.min.js "></script>
        <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js "></script>
        <script src="../assets/js/plugins.js "></script>

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