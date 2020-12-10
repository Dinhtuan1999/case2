<?php
namespace App\Controller;

use App\Model\BillModel;

class BillController
{
    protected $billModel;

    public function __construct()
    {
        $this->billModel = new BillModel();
    }

    public function index()
    {
        $bills = $this->billModel->getAll();
        include "src/View/bill/list.php";
    }

    public function show($id)
    {
        $bill = $this->billModel->findById($id);
        include "src/View/bill/detail.php";
    }
}