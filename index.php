<?php
include_once "app/controller/ProductController.php";
$productController = new ProductController();
session_start();
$page = (isset($_GET["page"]) ? $_GET["page"] : "");
switch ($page) {
    case "product-list":
            $productController->index();
        break;
    case "product-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $productController->showFormCreate();
        }else {
            $productController->create($_REQUEST);
        }
        break;
    case "product-delete":
        $id = $_GET["id"];
        $productController->delete($id);
        break;
    case "product-edit":
        $id = $_GET["id"];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $productController->showFormEdit();
        } else {
            $productController->edit($id, $_REQUEST);
        }
        break;
    case "product-search":
        $productController->showResultSearch();
        include_once "index.php";
        break;
    default:
        if (!isset($_GET["search"])) {
            $productController->index();
        }else {
            $productController->showResultSearch();
        }
}
