<?php
include_once "BaseModel.php";
class ProductModel extends BaseModel
{
    protected $table = "products";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`, `category`, `price`, `quantity`, `dates`, `description`) values (?,?,?,?,?,?)";
        $stmt = $this->dbconnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["category"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["quantity"]);
        $stmt->bindParam(5, $data["dates"]);
        $stmt->bindParam(6, $data["description"]);
        $stmt->execute();
    }

    public function edit($data)
    {
        $sql = "UPDATE $this->table SET `name` = ?, `category` = ?, `price` = ?, `quantity` = ?, `dates` = ?, `description` = ?";
        $stmt = $this->dbconnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["category"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["quantity"]);
        $stmt->bindParam(5, $data["dates"]);
        $stmt->bindParam(6, $data["description"]);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->dbconnect->query($sql);
        return $stmt->fetchAll();
    }
}