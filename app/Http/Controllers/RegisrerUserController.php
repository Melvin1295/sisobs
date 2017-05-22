<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\UserRepo;
use Salesfly\Salesfly\Managers\UserManager;

class RegisrerUserController extends Controller {

    protected $userRepo;
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function create(Request $request)
    {
        $request['image']  = !empty($request['image'])? $request['image']: '/images/users/default.jpg';
        $request['password'] = bcrypt($request['password']);
        $users = $this->userRepo->getModel();
        $manager = new UserManager($users,$request->all());
        $manager->save();

        return response()->json(['estado'=>true]);
    }
    public function edit(Request $request)
    {
        $user = $this->userRepo->find($request->id);
        $manager = new UserManager($user,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$user->name]);
    }
    
    
}