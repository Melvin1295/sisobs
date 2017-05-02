<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\TipoMedicamentoRepo;
use Salesfly\Salesfly\Managers\TipoMedicamentoManager;

class TipoMedicamentoController extends Controller {

    protected $tipoMedicamentoRepo;

    public function __construct(TipoMedicamentoRepo $tipoMedicamentoRepo)
    {
        $this->tipoMedicamentoRepo = $tipoMedicamentoRepo;
    }

    public function index()
    {
        return View('tipomedicamentos.index');
    }

    public function all()
    {
        $tipomedicamentos = $this->tipoMedicamentoRepo->paginate(15);
        return response()->json($tipomedicamentos);
    }

    public function paginatep(){
        $tipomedicamentos = $this->tipoMedicamentoRepo->paginate(15);
        return response()->json($tipomedicamentos);
    }


    public function form_create()
    {
        return View('tipomedicamentos.form_create');
    }

    public function form_edit()
    {
        return View('tipomedicamentos.form_edit');
    }

    public function create(Request $request)
    {
        $tipomedicamentos = $this->tipoMedicamentoRepo->getModel();
        $manager = new TipoMedicamentoManager($tipomedicamentos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$tipomedicamentos->nombreTienda]);
    }

    public function find($id)
    {
        $tipomedicamento = $this->tipoMedicamentoRepo->find($id);
        return response()->json($tipomedicamento);
    }

    public function edit(Request $request)
    {
        $tipomedicamentos = $this->tipoMedicamentoRepo->find($request->id);
        $manager = new TipoMedicamentoManager($tipomedicamentos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$tipomedicamentos->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $tipomedicamento= $this->tipoMedicamentoRepo->find($request->id);
        $tipomedicamento->delete();
        return response()->json(['estado'=>true, 'nombre'=>$tipomedicamento->nombreTienda]);
    }

    public function search($q)
    {
        $tipomedicamentos = $this->tipoMedicamentoRepo->search($q);

        return response()->json($tipomedicamentos);
    }
    public function searchall($q)
    {
        $tipomedicamento = $this->tipoMedicamentoRepo->searchall($q);

        return response()->json($tipomedicamento); 
    }
    
}