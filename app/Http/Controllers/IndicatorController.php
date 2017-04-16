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
        if($request->archivo_adjunto!=$indicators->archivo_adjunto){
            if ($indicators->archivo_adjunto!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$indicators->archivo_adjunto);
            }            
        }
        $manager = new IndicatorManager($indicators,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$indicators->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $indicator= $this->indicatorRepo->find($request->id);
        if($indicator->archivo_adjunto!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$indicator->archivo_adjunto);
        }
        $indicator->delete();
        return response()->json(['estado'=>true, 'nombre'=>$indicator->nombreTienda]);
    }

    public function search($q)
    {
        $indicators = $this->indicatorRepo->search($q);

        return response()->json($indicators);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/indicadores/"))
            mkdir("images/indicadores/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/indicadores/".$time."_".$file))
        {
             
        }
        return "/images/indicadores/".$time."_".$file;      
    }

    public function indicatorsUltimo($q)
    {
        $indicators = $this->indicatorRepo->searchUltimo();

        return response()->json($indicators);
    }
    public function indicators_all($q)
    {
        $indicators = $this->indicatorRepo->indicators_all();

        return response()->json($indicators);
    }
    
}