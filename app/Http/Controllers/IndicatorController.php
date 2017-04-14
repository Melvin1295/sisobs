<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\IndicatorRepo;
use Salesfly\Salesfly\Managers\IndicatorManager;

class IndicatorController extends Controller {

    protected $indicatorRepo;

    public function __construct(IndicatorRepo $indicatorRepo)
    {
        $this->indicatorRepo = $indicatorRepo;
    }

    public function index()
    {
        return View('indicators.index');
    }

    public function all()
    {
        $indicators = $this->indicatorRepo->paginaterepo(15);
        return response()->json($indicators);
    }

    public function paginatep(){
        $indicators = $this->indicatorRepo->paginaterepo(15);
        return response()->json($indicators);
    }


    public function form_create()
    {
        return View('indicators.form_create');
    }

    public function form_edit()
    {
        return View('indicators.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $indicators = $this->indicatorRepo->getModel();
        $manager = new IndicatorManager($indicators,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$indicators->nombreTienda]);
    }

    public function find($id)
    {
        $indicator = $this->indicatorRepo->find($id);
        return response()->json($indicator);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $indicators = $this->indicatorRepo->find($request->id);
        $manager = new IndicatorManager($indicators,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$indicators->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $indicator= $this->indicatorRepo->find($request->id);
        $indicator->delete();
        return response()->json(['estado'=>true, 'nombre'=>$indicator->nombreTienda]);
    }

    public function search($q)
    {
        $indicators = $this->indicatorRepo->search($q);

        return response()->json($indicators);
    }
    
}