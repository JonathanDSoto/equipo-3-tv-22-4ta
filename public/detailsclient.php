<?php
include "../app/config.php";
include '../assets/layouts/includes.php';
include "../app/ClientsController.php";
$clientController = new ClientsController();
$id = $_GET['id'];
$clientDetails = $clientController->getEspecificClients($id);
$orders = $clientDetails->orders;
$addressess = $clientDetails->addresses;
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
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1"><?= $clientDetails->name ?></h3>
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
                                                        <th class="ps-0" scope="row">Name :</th>
                                                        <td class="text-muted"><?= $clientDetails->name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Email :</th>
                                                        <td class="text-muted"><?= $clientDetails->email ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Phone Number :</th>
                                                        <td class="text-muted"><?= $clientDetails->phone_number ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Subscribed :</th>
                                                        <td class="text-muted"><?php if (($clientDetails->is_suscribed) == 1) {
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
                                        <h2>Nivel</h2>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nivel:</th>
                                                        <td class="text-muted"><?= $clientDetails->level->name ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Ordenes</h2>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>Folio</th>
                                                        <th>Mount</th>
                                                        <th>Direction ID</th>
                                                        <th>Status</th>
                                                        <th>Paid</th>
                                                        <th>Details</th>
                                                    </tr>
                                                    <?php 
                                                    if(isset($orders)){foreach ($orders as $orden) : ?>
                                                        <tr>
                                                            <td class="text-muted">#<?= $orden->folio ?></td>
                                                            <td class="text-muted">$<?= $orden->total ?></td>
                                                            <td class="text-muted">#<?= $orden->address_id ?></td>
                                                            <td class="text-muted"><?php if (($orden->order_status_id) == 1) {
                                                                                        echo 'Pediente de pago';
                                                                                    } else {
                                                                                        echo 'Pagada';
                                                                                    } ?></td>
                                                            <td class="text-muted"><?php if (($orden->is_paid) == 1) {
                                                                                        echo 'Yes';
                                                                                    } else {
                                                                                        echo 'No';
                                                                                    } ?></td>
                                                            <td class="text-muted"><a href="detailsOrden.php?idOrden=<?= $orden->id ?>" class="btn btn-info">See</a></td>
                                                        </tr>
                                                    <?php endforeach; }else{
                                                        echo'<div>Este usuario no tiene ordenes :c</div>';
                                                        }?>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row-->
                <!-- end row -->
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
                                        <div class="col-sm-2">
                                            <a href="address.php?user=<?= $clientDetails->id?>" class="btn btn-secondary"> Add</a>
                                        </div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Last Name</th>
                                                    <th>Street</th>
                                                    <th>Apartament</th>
                                                    <th>Postal Code</th>
                                                    <th>City</th>
                                                    <th>Options</th>
                                                </tr>
                                                <?php if(isset($orders)){foreach ($addressess as $address) : ?>
                                                    <tr>
                                                        <td class="text-muted"><?= $address-> first_name?></td>
                                                        <td class="text-muted"><?= $address->last_name ?></td>
                                                        <td class="text-muted"><?= $address->street_and_use_number ?></td>
                                                        <td class="text-muted"><?= $address->apartment ?></td>
                                                        <td class="text-muted"><?= $address->postal_code ?></td>
                                                        <td class="text-muted"><?= $address->city ?></td>
                                                        <td class="text-muted"><a href="eliminar.php?action=delAdd&idAddress=<?= $address->id ?>" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                <?php endforeach;  }else{
                                                        echo'<div>Este usuario no tiene ordenes :c</div>';
                                                        }?>
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