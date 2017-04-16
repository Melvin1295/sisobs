<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\EditorialRepo;
use Salesfly\Salesfly\Managers\EditorialManager;

class EditorialsController extends Controller {

    protected $editorialRepo; 

    public function __construct(EditorialRepo $editorialRepo)
    {
        $this->editorialRepo = $editorialRepo;
    }

    public function index()
    {
        return View('editorials.index');
    }

    public function all()
    {
        $editorials = $this->editorialRepo->paginate(15);
        return response()->json($editorials);
    }

    public function paginatep(){
        $editorials = $this->editorialRepo->paginate(15);
        return response()->json($editorials);
    }


    public function form_create()
    {
        return View('editorials.form_create');
    }

    public function form_edit()
    {
        return View('editorials.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $editorials = $this->editorialRepo->getModel();
        $manager = new EditorialManager($editorials,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$editorials->nombreTienda]);
    }

    public function find($id)
    {
        $editorial = $this->editorialRepo->find($id);
        return response()->json($editorial);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $editorials = $this->editorialRepo->find($request->id);
        if($request->archivo_adjunto!=$editorials->archivo_adjunto){
            if ($editorials->archivo_adjunto!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$editorials->archivo_adjunto);
            }            
        }
        $manager = new EditorialManager($editorials,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$editorials->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $editorial= $this->editorialRepo->find($request->id);
        if($editorial->archivo_adjunto!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$editorial->archivo_adjunto);
        }
        $editorial->delete();
        return response()->json(['estado'=>true, 'nombre'=>$editorial->nombreTienda]);
    }

    public function search($q)
    {
        $editorials = $this->editorialRepo->search($q);

        return response()->json($editorials);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/editoriales/"))
            mkdir("images/editoriales/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/editoriales/".$time."_".$file))
        {
             
        }
        return "/images/editoriales/".$time."_".$file;      
    }


    public function editorialsUltimo($q)
    {
        $editorials = $this->editorialRepo->searchUltimo();

        return response()->json($editorials);
    }
    public function editorials_all($q)
    {
        $editorials = $this->editorialRepo->editorials_all();

        return response()->json($editorials);
    }
    
}