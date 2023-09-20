<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BranchModel;
use CodeIgniter\HTTP\RequestInterface;

class Branch extends BaseController
{
   protected $helpers = ['url', 'form'];

    public function index()
    {
        $branchModel = model(BranchModel::class);
        var_dump($branchModel->get_branches());
    }

    public function show(int $id)
    {
        $branchModel = model(branchModel::class);
        var_dump($branchModel->get_branch($id));
    }

    public function create()
    {
        $this->request->getPost();
        //if()
    }
}
