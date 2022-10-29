<?php 
include '../app/BrandsController.php';
include '../app/CategoriesController.php';
include '../app/TagsController.php';

$tagss = new TagController();
$tags = $tagss->getTags();

$brandss = new BrandController;
$marcas = $brandss->getBrands();
$categoriess = new CategoryController;
$categories = $categoriess->getCategories();
?>