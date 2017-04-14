<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ProvinceRepo;
use Salesfly\Salesfly\Managers\ProvinceManager;

class ProvincesController extends Controller {

    protected $provinceRepo;

    public function __construct(ProvinceRepo $provinceRepo)
    {
        $this->provinceRepo = $provinceRepo;
    }

    public function index()
    {
        return View('provinces.index');
    }

    public function all()
    {
        $provinces = $this->provinceRepo->paginate(15);
        return response()->json($provinces);
    }

    public function paginatep(){
        $provinces = $this->provinceRepo->paginate(15);
        return response()->json($provinces);
    }


    public function form_create()
    {
        return View('provinces.form_create');
    }

    public function form_edit()
    {
        return View('provinces.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $provinces = $this->provinceRepo->getModel();
        $manager = new ProvinceManager($provinces,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$provinces->nombreTienda]);
    }

    public function find($id)
    {
        $province = $this->provinceRepo->find($id);
        return response()->json($province);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $provinces = $this->provinceRepo->find($request->id);
        $manager = new ProvinceManager($provinces,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$provinces->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $province= $this->provinceRepo->find($request->id);
        $province->delete();
        return response()->json(['estado'=>true, 'nombre'=>$province->nombreTienda]);
    }

    public function search($q)
    {
        $provinces = $this->provinceRepo->search($q);

        return response()->json($provinces);
    }
    public function searchall($q)
    {
        $provinces = $this->provinceRepo->searchall($q);

        return response()->json($provinces); 
    }
    
}