<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

//use Salesfly\Salesfly\Repositories\StoreRepo;
//use Salesfly\Salesfly\Managers\StoreManager;

class PageController extends Controller {

    protected $storeRepo;

   /* public function __construct(StoreRepo $storeRepo)
    {
        $this->storeRepo = $storeRepo;
    }*/

    public function index()
    {
        return View('stores.index');
    }

    
}