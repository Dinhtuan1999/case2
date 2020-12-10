<?php

namespace Controller;
require ('model/DBConnection.php');
use Model\DBConnection;

class CustomerController
{
    public function index()
    {
        $dbConnect = new DBConnection();
        $customers = $dbConnect->readDataFromJson();
//        echo "<pre>";
//        print_r($customers);
//        die();
        include 'view/list.php';
    }
}