<?php
include '../app/AuthController.php';
include '../app/BrandsController.php';
include '../app/CategoriesController.php';
include '../app/TagsController.php';
include '../app/OrdersController.php';
$tagss = new TagController();
$tags = $tagss->getTags();

$brandss = new BrandController;
$marcas = $brandss->getBrands();
$categoriess = new CategoryController;
$categories = $categoriess->getCategories();

$ordenes = new OrdenController;
$orden = $ordenes->getOrden($_GET['idOrden']);

$productos = $orden->presentations;

if (!isset($_SESSION['token'])) {
    header("Location:" . BASE_PATH . "/index");
} ?>
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
                            <h4 class="mb-sm-0">Orden</h4>
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
                                        <h3>Orden</h3>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Folio :</th>
                                                        <td class="text-muted"><?= $orden->folio ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Total :</th>
                                                        <td class="text-muted">$<?= $orden->total ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Order Status :</th>
                                                        <td class="text-muted"><?= $orden->order_status->name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Paid :</th>
                                                        <td class="text-muted"><?php if (($orden->is_paid) == 1) {
                                                            echo 'Yes';
                                                        } else {
                                                            echo 'No';
                                                        } ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Payment type :</th>
                                                        <td class="text-muted"><?= $orden->payment_type->name ?></td>
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
                                        <h3>Client</h3>
                                        <a href="detailsclient.php?id=<?= $orden->client->id ?>" class="btn btn-info">See</a>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Name :</th>
                                                        <td class="text-muted"><?= $orden->client-> name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">email :</th>
                                                        <td class="text-muted"><?= $orden->client->email?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Phone :</th>
                                                        <td class="text-muted"><?= $orden->client->phone_number?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Suscribed :</th>
                                                        <td class="text-muted"><?php if (($orden->client->is_suscribed) == 1) {
                                                            echo 'Yes';
                                                        } else {
                                                            echo 'No';
                                                        } ?></td>
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
                                        <h3>Address</h3>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Name :</th>
                                                        <td class="text-muted"><?= $orden->address->first_name.' '.$orden->address->last_name?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Street and number :</th>
                                                        <td class="text-muted"><?= $orden->address->street_and_use_number ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Apartment :</th>
                                                        <td class="text-muted"><?= $orden->address->apartment?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Postal code :</th>
                                                        <td class="text-muted"><?= $orden->address->postal_code ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">City :</th>
                                                        <td class="text-muted"><?= $orden->address->city ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Province :</th>
                                                        <td class="text-muted"><?= $orden->address->province ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Phone :</th>
                                                        <td class="text-muted"><?= $orden->address->phone_number ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th class="ps-0" scope="row">Billing address :</th>
                                                        <td class="text-muted"><?php if (($orden->address->is_billing_address) == 1) {
                                                            echo 'Yes';
                                                        } else {
                                                            echo 'No';
                                                        } ?></td>
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
                <!-- end page title -->

                <div class="col-sm-12">
                    <div class="card">
                        <!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                
                                <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                    <tbody>
                                    <h3>Products</h3>

                                        <!-- Producto -->
                                        <?php if (isset($productos) && sizeof($productos) > 0) {
                                            foreach ($productos as $lista) :
                                        ?>
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-6" style="overflow:hidden;">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                        <a href="detailsprecentation.php?idP=<?= $lista->id ?>" style="width:100%;">
                                                                            <img src="https://crud.jonathansoto.mx/storage/products/<?php echo $lista->cover ?>" alt="" class="img-fluid d-block" />
                                                                        </a>

                                                                    </div>
                                                                    <div>
                                                                        <h5 class="fs-14 my-1"><a href="detailsprecentation.php?idP=<?= $lista->id ?>"><?php echo $lista->description ?></a></h5>
                                                                        <span class="text-muted">24 Apr 2021</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                                <div class="row">
                                                                    <div class="col"><?php
                                                                                        echo '<h5 class="fs-14 my-1 fw-normal">' . $lista->status . '</h5><span class="text-muted">Status</span>';
                                                                                        ?></div>
                                                                    <div class="col"><?php
                                                                                        echo '<h5 class="fs-14 my-1 fw-normal">' . $lista->pivot->quantity . '</h5><span class="text-muted">Quantity</span>';
                                                                                        ?></div>
                                                                    <div class="col"><?php
                                                                                        echo '<h5 class="fs-14 my-1 fw-normal">$' . $lista->current_price->amount . '</h5><span class="text-muted">Price C/U</span>';
                                                                                        ?></div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                        <?php
                                            endforeach;
                                        } else {
                                            echo '
                                    <div class="col bg-pink text-center">
                                    Lo sentimos, no tenemos productos disponibles sobre esta etiqueta :c
                                </div>';
                                        } ?>
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