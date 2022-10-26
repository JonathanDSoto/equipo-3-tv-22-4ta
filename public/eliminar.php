<?php
include '../app/AuthController.php';
include '../app/UsersController.php';
include '../app/ClientsController.php';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'delUser':
            $obj = new UserController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->deleteUser($objt);
            break;
        case 'delClient':
            $obj = new ClientsController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->deleteClients($objt);
            break;
        case 'logout':
            $sesion = new AuthController;
            $salir = $sesion->logout();
            break;
        case 'delAdd':
            break;
    }
}
