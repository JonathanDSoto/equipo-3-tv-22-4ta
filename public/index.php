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
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Termina navbar -->

        <!-- ========== App Menu ========== -->

         <?php include '../assets/templates/sidebar.template.php'?>
        <div class="main-content">

            <div class="page-content">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>
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
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- fin Producto -->
                                        <!-- relleno -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="https://www.elsoldetoluca.com.mx/incoming/qd6gcq-cerveza-caguama.jpg/alternates/LANDSCAPE_768/cerveza-caguama.jpg" alt="" class="img-fluid d-block" />
                                                    </div>
                                                    <div>
                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>
                                                        <span class="text-muted">24 Apr 2021</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                                <span class="text-muted">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                <span class="text-muted">Precentations</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
                                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Nombre</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis! Laboriosam eligendi neque libero quis, veritatis
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- fin relleno -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="align-items-center mt-4 pt-2 justify-content-between d-flex ">
                                <div class="flex-shrink-0 ">
                                    <div class="text-muted ">
                                        Showing <span class="fw-semibold ">5</span> of <span class="fw-semibold ">25</span> Results
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


                <!-- .col-->
            </div>
        </div>
    </div>
    <div class="content-main ">

        <!-- end row-->
    </div>
    <footer class="footer ">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-sm-6 ">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © UABCS EQUIPO 3.
                </div>

            </div>
        </div>
    </footer>
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