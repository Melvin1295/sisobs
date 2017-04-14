<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\MenuRepo;
use Salesfly\Salesfly\Managers\MenuManager;

class MenuController extends Controller {

    protected $menuRepo;

    public function __construct(MenuRepo $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }

    public function index()
    {
        return View('menus.index');
    }

    public function all()
    {
        $menus = $this->menuRepo->paginate(15);
        return response()->json($menus);
    }

    public function paginatep(){
        $menus = $this->menuRepo->paginate(15);
        return response()->json($menus);
    }


    public function form_create()
    {
        return View('menus.form_create');
    }

    public function form_edit()
    {
        return View('menus.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $menus = $this->menuRepo->getModel();
        $manager = new MenuManager($menus,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$menus->nombreTienda]);
    }

    public function find($id)
    {
        $menu = $this->menuRepo->find($id);
        return response()->json($menu);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $menus = $this->menuRepo->find($request->id);
        $manager = new MenuManager($menus,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$menus->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $menu= $this->menuRepo->find($request->id);
        $menu->delete();
        return response()->json(['estado'=>true, 'nombre'=>$menu->nombreTienda]);
    }

    public function search($q)
    {
        $menus = $this->menuRepo->search($q);

        return response()->json($menus);
    }
    
}