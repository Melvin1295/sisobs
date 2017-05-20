<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ReclamoRepo;
use Salesfly\Salesfly\Managers\ReclamoManager;

class ReclamoController extends Controller {

    protected $reclamoRepo;

    public function __construct(ReclamoRepo $reclamoRepo)
    {
        $this->reclamoRepo = $reclamoRepo;
    }

    public function index()
    {
        return View('reclamos.index');
    }

    public function all()
    {
        $reclamos = $this->reclamoRepo->paginaterepo(15);
        return response()->json($reclamos);
    }

    public function paginatep(){
        $reclamos = $this->reclamoRepo->paginaterepo(15);
        return response()->json($reclamos);
    }


    public function form_create()
    {
        return View('reclamos.form_create');
    }

    public function form_edit()
    {
        return View('reclamos.form_edit');
    }

    public function create(Request $request)
    {
        $reclamos = $this->reclamoRepo->getModel();
        $manager = new ReclamoManager($reclamos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$reclamos->nombres]);
    }

    public function find($id)
    {
        $reclamo = $this->reclamoRepo->find($id);
        return response()->json($reclamo);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $reclamos = $this->reclamoRepo->find($request->id);
        $manager = new ReclamoManager($reclamos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$reclamos->nombres]);
    }

    
    public function destroy(Request $request)
    {
        $reclamo= $this->reclamoRepo->find($request->id);
        $reclamo->delete();
        return response()->json(['estado'=>true, 'nombre'=>$reclamo->nombres]);
    }

    public function search($q)
    {
        $reclamos = $this->reclamoRepo->search($q);

        return response()->json($reclamos);
    }
    
}