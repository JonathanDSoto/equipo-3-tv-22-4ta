<?php
include "../app/config.php";

include "../app/ProductsController.php";
include '../assets/layouts/includes.php';

$productController = new ProductosController();
$slug = $_GET['slug'];
$productDetails = $productController->spcfP($slug);
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
                    <form method="post" action="<?= BASE_PATH ?>prod" enctype="multipart/form-data">
                        <div class="row">
                            <!--end col-->
                            <div class="col-xxl-9">
                                <div class="card mt-xxl-n5">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab">
                                                    <i class="fas fa-home"></i> Product Details
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
                                                            <label for="name" class="form-label">Product Name</label>
                                                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter product name" value="<?= $productDetails->name ?>">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_name">The format only accepts letters and spaces.</p>

                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Product description</label>
                                                            <input name="description" type="text" class="form-control" id="description" placeholder="Enter product description" value="<?= $productDetails->description ?>">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_description">The format only accepts letters and spaces.</p>

                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="features" class="form-label">Features</label>
                                                            <input name="features" type="text" class="form-control" id="features" placeholder="Enter product features" value="<?= $productDetails->features ?>">
                                                        </div>
                                                        <p class="formulario__input-error text-danger" id="grupo_features">The format only accepts letters and spaces.</p>

                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <label><b>Brand: </b></label>
                                                        <select name="marca" class="form-select form-select-md">
                                                            <?php foreach ($marcas as $brand) : ?>
                                                                <option value="<?= $brand->id ?>"><?= $brand->name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Categories
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body row">
                                                                    <?php foreach ($categories as $category) : ?>
                                                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" name="categories[]" id="categories<?= $category->id ?>" value="<?= $category->id ?>">
                                                                                <label class="form-check-label" for="tags<?= $category->id ?>">
                                                                                <?= $category->name ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Tags
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body row">
                                                                    <?php foreach ($tags as $tag) : ?>

                                                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" name="tags[]" id="tags<?= $tag->id ?>" value="<?= $tag->id ?>">
                                                                                <label class="form-check-label" for="tags<?= $tag->id ?>">
                                                                                <?= $tag->name ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                            <a type="button" href="index" class="btn btn-soft-success">Cancel</a>
                                                            <input type="hidden" name="action" value="update">
                                                            <input type="hidden" name="objetivo" value="<?= $productDetails->id ?>">
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
                    </form>
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
    <script src="../assets/js/config/editProd.js "></script>
</body>

</html>