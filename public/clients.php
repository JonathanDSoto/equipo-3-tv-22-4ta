<?php
include "../app/config.php";
include '../assets/layouts/includes.php';
include "../app/ClientsController.php";
$clientController = new ClientsController();
$clients = $clientController->getAllClients();
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

        <!-- ========== App Menu ========== -->

        <?php include '../assets/layouts/sidebar.template.php' ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Clientes</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="d-sm-block d-md-none row">
                        <div class="row">

                            <?php if (isset($clients) && count($clients)) : ?>
                                <?php foreach ($clients as $client) : ?>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="card" style="width: 100%;">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Name : <?= $client->name ?></li>
                                                
                                                <li class="list-group-item">Phone : <?= $client->phone_number ?></li>
                                                <li class="list-group-item">
                                                    <div class="row text-center">
                                                        <div class="col">

                                                            <div class="View">
                                                                <a href="detailsclient?id=<?= $client->id ?>">
                                                                    <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="">Ver</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col">

                                                            <div class="edit">
                                                                <a href="editclient?id=<?= $client->id ?>">
                                                                    <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Editar</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col">

                                                            <div class="remove">
                                                                <a href="<?= BASE_PATH ?>public/eliminar?action=delClient&id=<?= $client->id ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="card">

                                <div class="card-body">
                                    <div id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="addclient">
                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Agregar</button>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="d-none d-lg-block d-md-block">
                                            <div class="table-responsive table-card mt-3 mb-1">
                                                <table class="table align-middle table-nowrap" id="customerTable">

                                                    <tbody class="list form-check-all">
                                                        <?php if (isset($clients) && count($clients)) : ?>
                                                            <?php foreach ($clients as $client) : ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="row p-1">
                                                                            <div class="col-md-12 col-lg-9">
                                                                                <div class="row">
                                                                                    <div class="col-lg-1 col-md-1"><?= $client->id ?></div>
                                                                                    <div class="col-lg-3 col-md-3"><?= $client->name ?></div>
                                                                                    <div class="col-lg-3 col-md-3"><?= $client->email ?></div>
                                                                                    <div class="col-lg-3 col-md-3"><?= $client->phone_number ?></div>
                                                                                    <div class="col-lg-2 col-md-2"><?= $client->level->name ?></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-lg-3">
                                                                                <div class="col-lg-3">
                                                                                    <div class="d-flex gap-2 text-center">
                                                                                        <div class="View">
                                                                                            <a href="detailsclient?id=<?= $client->id ?>">
                                                                                                <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="">Ver</button>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="edit">
                                                                                            <a href="editclient?id=<?= $client->id ?>">
                                                                                                <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Editar</button>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="remove">
                                                                                            <a href="<?= BASE_PATH ?>public/eliminar?action=delClient&id=<?= $client->id ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>

                                            </div>
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
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

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