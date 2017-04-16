<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\DetPublisherRepo;
use Salesfly\Salesfly\Managers\DetPublisherManager;

class PublishersController extends Controller {

    protected $publisherRepo;

    public function __construct(DetPublisherRepo $publisherRepo)
    {
        $this->publisherRepo = $publisherRepo;
    }

    public function index()
    {
        return View('publishers.index');
    }

    public function all()
    {
        $publishers = $this->publisherRepo->paginate(15);
        return response()->json($publishers);
    }

    public function paginatep(){
        $publishers = $this->publisherRepo->paginate(15);
        return response()->json($publishers);
    }


    public function form_create()
    {
        return View('publishers.form_create');
    }

    public function form_edit()
    {
        return View('publishers.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $publishers = $this->publisherRepo->getModel();
        $manager = new DetPublisherManager($publishers,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$publishers->nombreTienda]);
    }

    public function find($id)
    {
        $publisher = $this->publisherRepo->find($id);
        return response()->json($publisher);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $publishers = $this->publisherRepo->find($request->id);
        if($request->imagen!=$publishers->imagen){
            if ($publishers->imagen!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$publishers->imagen);
            }            
        }
        if($request->archivo_adjunto!=$publishers->archivo_adjunto){
            if ($publishers->archivo_adjunto!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$publishers->archivo_adjunto);
            }            
        }
        $manager = new DetPublisherManager($publishers,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$publishers->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $publisher= $this->publisherRepo->find($request->id);
        if($publisher->imagen!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$publisher->imagen);
        }
        if($publisher->archivo_adjunto!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$publisher->archivo_adjunto);
        }
        $publisher->delete();
        return response()->json(['estado'=>true, 'nombre'=>$publisher->nombreTienda]);
    }

    public function search($q)
    {
        $publishers = $this->publisherRepo->search($q);

        return response()->json($publishers);
    }
    public function publishersUltimo($q)
    {
        $publishers = $this->publisherRepo->searchUltimo();

        return response()->json($publishers);
    }
    public function publishers_all($q)
    {
        $publishers = $this->publisherRepo->publishers_all();

        return response()->json($publishers);
    }
    public function publisher_id($q)
    {
        $publishers = $this->publisherRepo->publisher_id($q);

        return response()->json($publishers);
    }
    public function getPublisher()
    {
        $publishers = $this->publisherRepo->getPublisher();

        return response()->json($publishers);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/publisher/"))
            mkdir("images/publisher/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/publisher/".$time."_".$file))
        {
             
        }
        return "/images/publisher/".$time."_".$file;      
    }
    
}