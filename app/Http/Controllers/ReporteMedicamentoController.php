<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ReporteMedicamentoRepo;
use Salesfly\Salesfly\Managers\ReporteMedicamentoManager;

use Salesfly\Salesfly\Repositories\DetReporteMedicamentoRepo;
use Salesfly\Salesfly\Managers\DetReporteMedicamentoManager;

class ReporteMedicamentoController extends Controller {

    protected $reporteMedicamentoRepo;

    public function __construct(ReporteMedicamentoRepo $reporteMedicamentoRepo)
    {
        $this->reporteMedicamentoRepo = $reporteMedicamentoRepo;
    }

    public function index()
    {
        return View('reportemedicamentos.index');
    }

    public function all()
    {
        $user = \Auth::user();
        $rol = $user->role_id;
        $user_id=$user->id;
        $reportemedicamentos = $this->reporteMedicamentoRepo->paginaterepo(15,$rol,$user_id);
        return response()->json($reportemedicamentos);
    }

    public function paginatep(){
        $user = \Auth::user();
        $rol = $user->role_id;
        $user_id=$user->id;
        $reportemedicamentos = $this->reporteMedicamentoRepo->paginaterepo(15,$rol,$user_id);
        return response()->json($reportemedicamentos);
    }


    public function form_create()
    {
        return View('reportemedicamentos.form_create');
    }

    public function form_edit()
    {
        return View('reportemedicamentos.form_edit');
    }

    

    public function create(Request $request)
    {
        \DB::beginTransaction();
        $user = \Auth::user();
        $request["user_id"]= $user->id;
        $detreporte = $request->detreporte;

        //$reportemedicamentos = $this->reporteMedicamentoRepo->getModel();
        //$manager = new ReporteMedicamentoManager($reportemedicamentos,$request->all());
        //$manager->save();
        //$temporal=$reportemedicamentos->id;

        //$detReporteMedicamentoRepo;
        foreach($detreporte as $objeto){
            $objeto['user_id'] = $user->id;

            $reportemedicamentos = $this->reporteMedicamentoRepo->getModel();
            $manager = new ReporteMedicamentoManager($reportemedicamentos,$objeto);
            $manager->save();
          
            $detReporteMedicamentoRepo = null;
        }
        \DB::commit();
        return response()->json(['estado'=>true, 'nombre'=>$reportemedicamentos->descripcion]);
    }

    public function find($id)
    {
        $reportemedicamento = $this->reporteMedicamentoRepo->find($id);
        return response()->json($reportemedicamento);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $reportemedicamentos = $this->reporteMedicamentoRepo->find($request->id);
        $manager = new ReporteMedicamentoManager($reportemedicamentos,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$reportemedicamentos->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $reportemedicamento= $this->reporteMedicamentoRepo->find($request->id);
        $reportemedicamento->delete();
        return response()->json(['estado'=>true, 'nombre'=>$reportemedicamento->nombreTienda]);
    }

    public function search($q)
    {
        $user = \Auth::user();
        $rol = $user->role_id;
        $user_id=$user->id;
        $reportemedicamentos = $this->reporteMedicamentoRepo->search($q,$rol,$user_id);

        return response()->json($reportemedicamentos);
    }
    
}