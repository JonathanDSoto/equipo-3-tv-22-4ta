<?php
include "../app/config.php";

include '../assets/layouts/includes.php';
$idP = $_GET['idp'];

?><doctype html>
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
            <?php include '../assets/layouts/navbar.template.php' 
            ?>
            <!-- Termina navbar -->
            <!-- Inicia sidebar -->
            <?php include '../assets/layouts/sidebar.template.php' 
            ?>
            <!-- Termina sidebar -->
            <!-- ========== App Menu ========== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <form method="post" action="<?= BASE_PATH ?>presentation" enctype="multipart/form-data" id="form">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                            <i class="fas fa-home"></i> Precentation Details
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
                                                                    <label for="description" class="form-label">Description</label>
                                                                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter the description" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_description">The format only accepts letters and spaces.</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="weight_in_grams" class="form-label">weight In grams</label>
                                                                    <input name="weight_in_grams" type="text" class="form-control" id="weight_in_grams" placeholder="Enter the weight_in_grams" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_weight_in_grams">Just numbers.</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="code" class="form-label"> code</label>
                                                                    <input name="code" type="text" class="form-control" id="code" placeholder="Enter the code" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_code">Minimun 1 character and maximun 18 .</p>
                                                            </div>
                                                            <div class="col-lg-6 text-start">
                                                                <label for="status" class="form-label"> Status</label>
                                                                <select class="form-select" name="status" aria-label="Default select example">
                                                                    <option value="active">active</option>
                                                                    <option value="inactive">inactive</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="stock" class="form-label">Stock</label>
                                                                    <input name="stock" type="text" class="form-control" id="stock" placeholder="Enter the stock" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_stock">Just numbers.</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="stock_min" class="form-label">Stock min</label>
                                                                    <input name="stock_min" type="text" class="form-control" id="stock_min" placeholder="Enter the minimun stock" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_stock_min">Just numbers.</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="stock_max" class="form-label">Stock max</label>
                                                                    <input name="stock_max" type="text" class="form-control" id="stock_max" placeholder="Enter the stock maximun" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_stock_max">Just numbers.</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="amount" class="form-label">amount</label>
                                                                    <input name="amount" type="text" class="form-control" id="amount" placeholder="Enter the amount" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_amount">Just numbers.</p>

                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="imagen" class="form-label">imagen</label>
                                                                    <input name="imagen" type="file" class="form-control" id="imagen" placeholder="Enter the features" value="">
                                                                </div>
                                                                <p class="formulario__input-error text-danger" id="grupo_imagen">The photo is necesary (just .jpg .png .jpeg .svg).</p>

                                                            </div>
                                                            <!--end col-->

                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit" class="btn btn-primary" id="send">Add</button>
                                                                    <a href="productos.php" type="button" class="btn btn-soft-success">Cancel</a>
                                                                    <input type="hidden" name="action" value="create">
                                                                    <input type="hidden" name="product_id" value="<?= $idP ?>">
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
        <script src="../assets/js/config/newPres.js"></script>
    </body>

    </html>