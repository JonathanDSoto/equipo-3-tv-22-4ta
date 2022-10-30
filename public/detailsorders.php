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
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1"></h3>
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
                                        <h3>Info</h3>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">id :</th>
                                                        <td class="text-muted">1</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">folio :</th>
                                                        <td class="text-muted">82713</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">total :</th>
                                                        <td class="text-muted">$8999.989</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">order status :</th>
                                                        <td class="text-muted">Cancelada</td>
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
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted ">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Productos</h2>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>description</th>
                                                        <th>Status</th>
                                                        <th>Details</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="text-muted">1</td>
                                                        <td class="text-muted">Comedor Miguel con 4 Sillas</td>
                                                        <td class="text-muted">activo</td>
                                                        <td class="text-muted"><a href="productos.php" class="btn btn-info">See</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted ">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Cliente</h2>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>email</th>
                                                        <th>phone number</th>
                                                        <th>action</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="text-muted">10</td>
                                                        <td class="text-muted">Dredgen Yor</td>
                                                        <td class="text-muted">dredyor@gmail.com</td>
                                                        <td class="text-muted">6123127371</td>
                                                        <td class="text-muted"><a href="detailsclient.php" class="btn btn-info">See</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h2>Direcciones</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Last Name</th>
                                                    <th>Street</th>
                                                    <th>Postal Code</th>
                                                    <th>Actions</th>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="text-muted">Dredgen</td>
                                                    <td class="text-muted">Yor</td>
                                                    <td class="text-muted">Calle El Diseño, 11</td>
                                                    <td class="text-muted">19200</td>
                                                    <td class="text-muted"><a href="detailsaddress.php" class="btn btn-info">See</a></td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <h2>Cupon</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <tbody>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>percentage discount</th>
                                                    <th>amount discount</th>
                                                    <th>couponable type</th>
                                                    <th>Action</th>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="text-muted">9</td>
                                                    <td class="text-muted">200 MXN off</td>
                                                    <td class="text-muted">0</td>
                                                    <td class="text-muted">200</td>
                                                    <td class="text-muted">Cupon de descuento fijo</td>
                                                    <td class="text-muted"><a href="detailscoupon.php" class="btn btn-info">See</a></td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
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
</body>

</html>