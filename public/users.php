<?php
include "../app/config.php";
include "../app/UsersController.php";
include '../assets/layouts/includes.php';

$userController = new UserController();
$users = $userController->getAllUsers();
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
                                <h4 class="mb-sm-0">Usuarios</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="adduser.php">
                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Agregar</button>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="" data-sort="id">ID</th>
                                                        <th class="" data-sort="name">Name</th>
                                                        <th class="" data-sort="lastname">Last name</th>
                                                        <th class="" data-sort="phone">Phone number</th>
                                                        <th class="" data-sort="email">Email</th>
                                                        <th class="" data-sort="rol">Role</th>
                                                        <th class="" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php if (isset($users) && count($users)) : ?>
                                                        <?php foreach ($users as $user) : ?>
                                                            <tr> 
                                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                                 
                                                                <td class="id"><?= $user->id ?></td>
                                                                <td class="name"><?= $user->name ?></td>
                                                                <td class="lastname"><?= $user->lastname ?></td>
                                                                <td class="phone"><?= $user->phone_number ?></td>
                                                                <td class="email"><?= $user->email ?></td>
                                                                <td class="rol"><?= $user->role ?></td>

                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <div class="View">
                                                                            <a href="detailsusers.php?id=<?= $user->id ?>">
                                                                                <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="">Ver</button>
                                                                            </a>
                                                                        </div>
                                                                        <div class="edit">
                                                                            <a href="edituser.php?id=<?= $user->id ?>">
                                                                                <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Editar</button>
                                                                            </a>
                                                                        </div>
                                                                        <div class="remove">
                                                                            <a href="<?= BASE_PATH ?>public/eliminar.php?action=delUser&id=<?= $user->id ?>" class="btn btn-sm btn-danger">Eliminar</a>
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
    <div id="preloader ">
        <div id="status ">
            <div class="spinner-border text-primary avatar-sm " role="status ">
                <span class="visually-hidden ">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <<?php include '../assets/layouts/js.template.php' ?>
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