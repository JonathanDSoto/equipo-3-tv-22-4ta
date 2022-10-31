<?php 
include '../app/BrandsController.php';
include '../app/CategoriesController.php';
include '../app/TagsController.php';
include '../app/CouponsController.php';
include '../app/OrdersController.php';

$tagss = new TagController();
$tags = $tagss->getTags();

$brandss = new BrandController;
$marcas = $brandss->getBrands();

$categoriess = new CategoryController;
$categories = $categoriess->getCategories();

$couponController = new CouponsController();
$coupons = $couponController->getAllCoupons();

$orderController = new OrdenController();
$orders = $orderController->getOrders();
?>