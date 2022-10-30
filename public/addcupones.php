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

                    <form method="post" action="../app/UsersController.php" enctype="multipart/form-data" id="form">
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
                                                                <input name="name" type="text" class="form-control" id="couponname" placeholder="Enter coupon name" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Percentage discount</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Percentage discount" value="0">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Amount discount</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Amount discount" value="0">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Min amount required</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Min amount required" value="0">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Min product required</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Min product required" value="0">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Max uses</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Max uses" value="0">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">Start date</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Start date, example: 2022-08-15" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="descriptionInput" class="form-label">End date</label>
                                                                <input name="description" type="text" class="form-control" id="description" placeholder="Enter End date, example: 2022-09-28" value="">
                                                            </div>
                    				                        <p class="formulario__input-error text-danger" id="grupo_lastname">The format only accepts letters and spaces.</p>

                                                        </div>
                                                        <!--end col-->
                                    
                                                        <div class="col-lg-6">
                                                            <label><b>Couponable type: </b></label>
                                                            <select name="marca" class="form-select form-select-md">
                                                                <option value=""></option>
                                                                <option value="">Cupon por porcentaje</option>
                                                                <option value="">Cupon fijo</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                        <a href="" type="button" class="btn btn-soft-success">Cancel</a>
                                                                
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