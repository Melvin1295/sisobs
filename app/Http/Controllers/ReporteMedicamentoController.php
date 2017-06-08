<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

use Salesfly\Salesfly\Repositories\ReporteMedicamentoRepo;
use Salesfly\Salesfly\Managers\ReporteMedicamentoManager;

use Salesfly\Salesfly\Repositories\DetReporteMedicamentoRepo;
use Salesfly\Salesfly\Managers\DetReporteMedicamentoManager;
use Salesfly\Salesfly\Entities\ReporteMedicamento;

use Salesfly\Salesfly\Repositories\TipoReporteRepo;


class ReporteMedicamentoController extends Controller {

    protected $reporteMedicamentoRepo;
    protected $fecha_inicio;
    protected $fecha_fin;
    public function __construct(ReporteMedicamentoRepo $reporteMedicamentoRepo,DetReporteMedicamentoRepo $detReporteMedicamentoRepo,TipoReporteRepo $tipoReporteRepo)
    {
        $this->reporteMedicamentoRepo = $reporteMedicamentoRepo;
        $this->detReporteMedicamentoRepo = $detReporteMedicamentoRepo;
        $this->tipoReporteRepo = $tipoReporteRepo;
        $this->fecha_inicio = 0;
        $this->fecha_fin = 0;
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
        $medicamentos = $request->medicamentos;

        $reportemedicamentos = $this->reporteMedicamentoRepo->getModel();
        $manager = new ReporteMedicamentoManager($reportemedicamentos,$request->all());
        $manager->save();

        $reporte_medicamento_id = $reportemedicamentos->id; 

        foreach ($medicamentos as $item) {
            if ($item['flag']) {
                $item['medicamento_id'] = $item['id'];
                $item['reporte_medicamento_id'] = $reporte_medicamento_id;
                $item['glosa'] = '';

                $medicamento = $this->detReporteMedicamentoRepo->getModel();
                $manager = new DetReporteMedicamentoManager($medicamento,$item);
                $manager->save();
            }
        }

        //$reportemedicamentos = $this->reporteMedicamentoRepo->getModel();
        //$manager = new ReporteMedicamentoManager($reportemedicamentos,$request->all());
        //$manager->save();
        //$temporal=$reportemedicamentos->id;

        //$detReporteMedicamentoRepo;
        /*foreach($detreporte as $objeto){
            $objeto['user_id'] = $user->id;

            $reportemedicamentos = $this->reporteMedicamentoRepo->getModel();
            $manager = new ReporteMedicamentoManager($reportemedicamentos,$objeto);
            $manager->save();
          
            $detReporteMedicamentoRepo = null;
        }*/
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

    public function exportar($ini,$fin)
    {
        $this->fecha_inicio = $ini;
        $this->fecha_fin = $fin;
        return Excel::create('Laravel Excel', function($excel) {
        
            $excel->sheet('reporte_mediamentos', function($sheet) {

                $products = $this->reporteMedicamentoRepo->exportar($this->fecha_inicio,$this->fecha_fin);
 
                $sheet->fromArray($products);
 
            });
        })->export('xls');
        //return Book::all();
    }

    public function searchAlltipoReporte($q)
    {
        $tipoReporte = $this->tipoReporteRepo->searchall($q);

        return response()->json($tipoReporte); 
    }
    
}