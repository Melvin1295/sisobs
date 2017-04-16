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
        return View('pages.index');
    }
    public function form_blog()
    {
        return View('pages.form_blog');
    }
    public function form_contact(){
    	return View('pages.form_contact');
    }
    public function form_indicadores(){
        return View('pages.form_indicadores');
    }

    
}