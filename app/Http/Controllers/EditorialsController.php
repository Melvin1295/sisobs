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
        $manager = new EditorialManager($editorials,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$editorials->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $editorial= $this->editorialRepo->find($request->id);
        $editorial->delete();
        return response()->json(['estado'=>true, 'nombre'=>$editorial->nombreTienda]);
    }

    public function search($q)
    {
        $editorials = $this->editorialRepo->search($q);

        return response()->json($editorials);
    }
    
}