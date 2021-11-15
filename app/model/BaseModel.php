<?php
include_once "DB.php";

class BaseModel
{
    protected $table;
    protected $dbconnect;

    public function __construct()
    {
        $db = new DB();
        $this->dbconnect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->dbconnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id = $id";
        $stmt = $this->dbconnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "delete from $this->table where id = ?";
        $stmt = $this->dbconnect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}