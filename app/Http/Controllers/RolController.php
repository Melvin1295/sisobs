<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\RolRepo;
use Salesfly\Salesfly\Managers\RolManager;

class RolController extends Controller {

    protected $rolRepo;

    public function __construct(RolRepo $rolRepo)
    {
        $this->rolRepo = $rolRepo;
    }

    
    public function roles_all($q)
    {
        $roles = $this->rolRepo->roles_all();

        return response()->json($roles);
    }
    
}