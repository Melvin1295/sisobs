<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ColaboradorRepo;
use Salesfly\Salesfly\Managers\ColaboradorManager;

class ColaboradorController extends Controller {

    protected $coloboradorRepo;

    public function __construct(ColaboradorRepo $coloboradorRepo)
    {
        $this->coloboradorRepo = $coloboradorRepo;
    }

    public function index()
    {
        return View('colaboradores.index');
    }

    public function all()
    {
        $colaboradores = $this->coloboradorRepo->paginaterepo(15);
        return response()->json($colaboradores);
    }

    public function paginatep(){
        $colaboradores = $this->coloboradorRepo->paginaterepo(15);
        return response()->json($colaboradores);
    }


    public function form_create()
    {
        return View('colaboradores.form_create');
    }

    public function form_edit()
    {
        return View('colaboradores.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $colaboradores = $this->coloboradorRepo->getModel();
        $manager = new ColaboradorManager($colaboradores,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$colaboradores->nombreTienda]);
    }

    public function find($id)
    {
        $colaborador = $this->coloboradorRepo->find($id);
        return response()->json($colaborador);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $colaboradores = $this->coloboradorRepo->find($request->id);
        if($request->imagen!=$colaboradores->imagen){
            if ($colaboradores->imagen!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$colaboradores->imagen);
            }            
        }
        $manager = new ColaboradorManager($colaboradores,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$colaboradores->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $colaborador= $this->coloboradorRepo->find($request->id);
        if($colaborador->imagen!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$colaborador->imagen);
        }
        $colaborador->delete();
        return response()->json(['estado'=>true, 'nombre'=>$colaborador->nombreTienda]);
    }

    public function search($q)
    {
        $colaboradores = $this->coloboradorRepo->search($q);

        return response()->json($colaboradores);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/colaboradores/"))
            mkdir("images/colaboradores/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/colaboradores/".$time."_".$file))
        {
             
        }
        return "/images/colaboradores/".$time."_".$file;      
    }

    public function indicatorsUltimo($q)
    {
        $colaboradores = $this->coloboradorRepo->searchUltimo();

        return response()->json($colaboradores);
    }
    public function indicators_all($q)
    {
        $colaboradores = $this->coloboradorRepo->indicators_all();

        return response()->json($colaboradores);
    }
    
}