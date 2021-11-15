<?php

include_once "app/model/ProductModel.php";
class ProductController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "app/view/product/list.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $_REQUEST["name"],
            "category" => $_REQUEST["category"],
            "price" => $_REQUEST["price"],
            "quantity" => $_REQUEST["quantity"],
            "dates" => $_REQUEST["dates"],
            "description" => $_REQUEST["description"],
        ];
        $this->productModel->create($data2);
        header("location:index.php");
    }

    public function showFormCreate()
    {
        $product = $this->productModel->getAll();
        include_once "app/view/product/create.php";
    }
    public function delete($id)
    {
        $this->productModel->delete($id);
        header("Location:index.php?page=product-list");
    }
    public function edit($id, $request)
    {

        $product = $this->productModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "name" => $request['name'],
                "category" => $request['category'],
                "price" => $request['price'],
                "quantity" => $request['quantity'],
                "dates" => $request['dates'],
                "description" => $request['description'],
                "id" => $id
            ];
        }
        $this->productModel->edit($data);
        header("Location:index.php?page=product-list");
    }
    public function showFormEdit()
    {
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "app/view/product/edit.php";
    }

    public function showResultSearch()
    {
        $key = $_GET["search"];
        if (empty($key)) {
            echo " echo <script>alert('Input Search!!');window.location.href='index.php'</script>";
        }else {
            $products = $this->productModel->search($key);
            include_once "index.php";
        }
    }
}