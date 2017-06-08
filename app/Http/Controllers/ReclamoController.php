<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

use Salesfly\Salesfly\Repositories\ReclamoRepo;
use Salesfly\Salesfly\Managers\ReclamoManager;

use Salesfly\Salesfly\Repositories\TipoQuejaRepo;
use Salesfly\Salesfly\Managers\TipoQuejaManager;

use Salesfly\Salesfly\Repositories\DetReclamosTipoQuejaRepo;
use Salesfly\Salesfly\Managers\DetReclamosTipoQuejaManager;

class ReclamoController extends Controller {

    protected $reclamoRepo;
    protected $tipoQuejaRepo;
    protected $fecha_inicio;
    protected $fecha_fin;

    public function __construct(ReclamoRepo $reclamoRepo, TipoQuejaRepo $tipoQuejaRepo, DetReclamosTipoQuejaRepo $detReclamosTipoQuejaRepo)
    {
        $this->reclamoRepo = $reclamoRepo;
        $this->tipoQuejaRepo = $tipoQuejaRepo;
        $this->detReclamosTipoQuejaRepo = $detReclamosTipoQuejaRepo;
        $this->fecha_inicio = 0;
        $this->fecha_fin = 0;
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
        $tipo_quejas=$request->tipoQuejas;
        $reclamos = $this->reclamoRepo->getModel();
        $manager = new ReclamoManager($reclamos,$request->all());
        $manager->save();

        $reclamo_id = $reclamos->id; 
        foreach ($tipo_quejas as $item) {
            if ($item['flag']) {
                $item['tipo_queja_id'] = $item['id'];
                $item['reclamo_id'] = $reclamo_id;
                $item['glosa'] = '';

                $detReclamosTipoQueja = $this->detReclamosTipoQuejaRepo->getModel();
                $manager = new DetReclamosTipoQuejaManager($detReclamosTipoQueja,$item);
                $manager->save();
            }
        }

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
    //============================================
    public function searchalltipoQueja($q)
    {
        $tipoQuejas = $this->tipoQuejaRepo->searchall($q);

        return response()->json($tipoQuejas); 
    }

    public function exportar($ini,$fin)
    {
        $this->fecha_inicio = $ini;
        $this->fecha_fin = $fin;
        Excel::create('Laravel Excel', function($excel) {
 
            $excel->sheet('reporte_mediamentos', function($sheet) {
 
                $reclamos = $this->reclamoRepo->exportar($this->fecha_inicio,$this->fecha_fin);
 
                $sheet->fromArray($reclamos);
 
            });
        })->export('xls');
        return Book::all();
    }
    
}