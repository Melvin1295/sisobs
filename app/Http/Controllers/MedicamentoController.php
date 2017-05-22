<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\MedicamentoRepo;
use Salesfly\Salesfly\Managers\MedicamentoManager;

class MedicamentoController extends Controller {

    protected $medicamentoRepo;

    public function __construct(MedicamentoRepo $medicamentoRepo)
    {
        $this->medicamentoRepo = $medicamentoRepo;
    }

    public function index()
    {
        return View('medicamentos.index');
    }

    public function all()
    {
        $medicamentos = $this->medicamentoRepo->paginaterepo(15);
        return response()->json($medicamentos);
    }

    public function paginatep(){
        $medicamentos = $this->medicamentoRepo->paginaterepo(15);
        return response()->json($medicamentos);
    }


    public function form_create()
    {
        return View('medicamentos.form_create');
    }

    public function form_edit()
    {
        return View('medicamentos.form_edit');
    }

    public function create(Request $request)
    {
        $medicamentos = $this->medicamentoRepo->getModel();
        $manager = new MedicamentoManager($medicamentos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$medicamentos->nombreTienda]);
    }

    public function find($id)
    {
        $medicamento = $this->medicamentoRepo->find($id);
        return response()->json($medicamento);
    }

    public function edit(Request $request)
    {
        $medicamentos = $this->medicamentoRepo->find($request->id);
        $manager = new MedicamentoManager($medicamentos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$medicamentos->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $medicamento= $this->medicamentoRepo->find($request->id);
        $medicamento->delete();
        return response()->json(['estado'=>true, 'nombre'=>$medicamento->nombreTienda]);
    }

    public function search($q)
    {
        $medicamentos = $this->medicamentoRepo->search($q);

        return response()->json($medicamentos);
    } 
    public function buscarmedicamento($q)
    {
        $medicamentos = $this->medicamentoRepo->buscarmedicamento($q);
        return response()->json($medicamentos);
    }

    public function searchall($q)
    {
        $medicamentos = $this->medicamentoRepo->searchall($q);

        return response()->json($medicamentos); 
    }
    
}