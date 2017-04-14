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
        $manager = new DetPublisherManager($publishers,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$publishers->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $publisher= $this->publisherRepo->find($request->id);
        $publisher->delete();
        return response()->json(['estado'=>true, 'nombre'=>$publisher->nombreTienda]);
    }

    public function search($q)
    {
        $publishers = $this->publisherRepo->search($q);

        return response()->json($publishers);
    }
    
}