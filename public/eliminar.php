<?php
include '../app/AuthController.php';
include '../app/UsersController.php';
include '../app/ClientsController.php';
include '../app/ProductsController.php';
include '../app/presentationController.php';
include '../app/BrandsController.php';
include '../app/CategoriesController.php';
include '../app/TagsController.php';
include '../app/CouponsController.php';
include '../app/OrdersController.php';
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
        case 'deleteP':
            $obj = new ProductosController;
            $objt = strip_tags($_GET['idP']);
            $del = $obj->delete($objt);
            break;
        case 'logout':
            $sesion = new AuthController;
            $salir = $sesion->logout();
            break;
        case 'delAdd':
            $obj = new ClientsController;
            $objt = strip_tags($_GET['idAddress']);
            $del = $obj->deleteAddress($objt);
            break;
        case 'delPres':
            $obj = new PresentationController;
            $objt = strip_tags($_GET['idObj']);
            $del = $obj->delete($objt);
            break;
        case 'delTag':
            $obj = new TagController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->delTag($objt);
            break;
        case 'delBrand':
            $obj = new BrandController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->delBrand($objt);
            break;
        case 'delCategory':
            $obj = new CategoryController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->delCat($objt);
            break;
        case 'delCupon':
            $obj = new CouponsController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->deleteCoupons($objt);
            break;
        case 'delOr':
            $obj = new OrdenController;
            $objt = strip_tags($_GET['id']);
            $del = $obj->delete($objt);
            break;
    }
}
?>