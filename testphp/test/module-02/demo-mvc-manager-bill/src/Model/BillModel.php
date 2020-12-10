<?php


namespace App\Model;


class BillModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM orders LIMIT 1,15";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $sql = "SELECT c.customerName, c.phone, c.addressLine1 , p.productName, odt.quantityOrdered , od.orderNumber, od.status
                FROM customers c
                INNER JOIN orders od ON c.customerNumber = od.customerNumber
                INNER JOIN orderdetails odt ON od.orderNumber = odt.orderNumber
                INNER JOIN products p ON odt.productCode = p.productCode
                WHERE od.orderNumber = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function totalPriceOrder($id)
    {

    }

    public function updateStatus($id)
    {

    }
}