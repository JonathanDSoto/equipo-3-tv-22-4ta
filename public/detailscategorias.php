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
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Categorias</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Info</h5>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th class="ps-0" scope="row">Category :</th>
                                                <td class="text-muted">Hogar y Muebles</td>
                                            </tr>
                                            <tr>
                                                <th class="ps-0" scope="row">Description :</th>
                                                <td class="text-muted">Elementos y muebles para el hogar</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                 
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Products</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                        <tbody>
                                            <!-- Producto -->
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                                            <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                        </div>
                                                        <div>
                                                            <h5 class="fs-14 my-1"><a href="" class="text-reset">Laptop Gamer Asus ROG G513RC 15.6</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1 fw-normal">Asus</h5>
                                                    <span class="text-muted">Brand</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1 fw-normal">Trabaja con un procesador AMD Ryzen 7</h5>
                                                    <span class="text-muted">Features</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 my-1 fw-normal">Para un ávido jugador de videojuegos, como tú.</h5>
                                                    <span class="text-muted">Description</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="View">
                                                            <a href="detailsproductos.php">
                                                                <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="">Ver</button>
                                                            </a>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="editproductos.php">
                                                                <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Editar</button>
                                                            </a>
                                                        </div>
                                                        <div class="remove">
                                                            <button onclick="eliminar()" class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Eliminar</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- fin Producto -->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex ">
                                    <div class="flex-shrink-0 ">
                                        <div class="text-muted ">
                                            Showing <span class="fw-semibold ">1</span> of <span class="fw-semibold ">25</span> Results
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-separated pagination-sm mb-0 ">
                                        <li class="page-item disabled ">
                                            <a href="# " class="page-link ">←</a>
                                        </li>
                                        <li class="page-item ">
                                            <a href="# " class="page-link ">1</a>
                                        </li>
                                        <li class="page-item active ">
                                            <a href="# " class="page-link ">2</a>
                                        </li>
                                        <li class="page-item ">
                                            <a href="# " class="page-link ">3</a>
                                        </li>
                                        <li class="page-item ">
                                            <a href="# " class="page-link ">→</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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