<?php
include '../app/AuthController.php';
include '../app/ProductsController.php';
include '../app/BrandsController.php';
include '../app/CategoriesController.php';
include '../app/TagsController.php';

$tagss = new TagController();
$tags = $tagss->getTags();

$brandss = new BrandController;
$marcas = $brandss->getBrands();
$categoriess = new CategoryController;
$categories = $categoriess->getCategories();
$producto = new ProductosController;
$products = $producto->productos();
$user = new AuthController;

if (!isset($_SESSION['token'])) {
    header("Location:".BASE_PATH."/index.php");
}?>
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

        <!-- ========== App Menu ========== -->

        <?php include '../assets/layouts/sidebar.template.php' ?>
        <div class="main-content">

            <div class="page-content">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Productos</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <div class="col-sm-auto flex-grow-1">
                                <div>
                                    <a href="addproductos.php">
                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Agregar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                <tbody>
                                        <!-- Producto -->
                                        <?php foreach ($products as $lista) :
                                                $srt = $lista->name . '||' . $lista->description . '||' . $lista->features . '||' . $lista->brand_id . '||' . $lista->id;
                                                include '../assets/layouts/products.template.php';
                                            endforeach; ?>
                                        <!-- fin Producto -->
                                    </tbody>
                                </table>
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
    <script>
            function desc(name,target){
                swal(name,target);
            }
        </script>
</body>


</html>