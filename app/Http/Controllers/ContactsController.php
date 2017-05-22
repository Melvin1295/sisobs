<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

use Salesfly\Salesfly\Repositories\ContactRepo;
use Salesfly\Salesfly\Managers\ContactManager;

class ContactsController extends Controller {

    protected $contactRepo;
    protected $fecha_inicio;
    protected $fecha_fin;

    public function __construct(ContactRepo $contactRepo)
    {
        $this->contactRepo = $contactRepo;
        $this->fecha_inicio = 0;
        $this->fecha_fin = 0;
    }

    public function index()
    {
        return View('contacts.index');
    }

    public function all()
    {
        $contacts = $this->contactRepo->paginaterepo(15);
        return response()->json($contacts);
    }

    public function paginatep(){
        $contacts = $this->contactRepo->paginaterepo(15);
        return response()->json($contacts);
    }


    public function form_create()
    {
        return View('contacts.form_create');
    }

    public function form_edit()
    {
        return View('contacts.form_edit');
    }

    public function create(Request $request)
    {
        //$user = \Auth::user();
        //$request->merge(array('usuario_id' => $user->id));
        $contacts = $this->contactRepo->getModel();
        $manager = new ContactManager($contacts,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$contacts->nombreTienda]);
    }

    public function find($id)
    {
        $menu = $this->contactRepo->find($id);
        return response()->json($menu);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $contacts = $this->contactRepo->find($request->id);
        $manager = new ContactManager($contacts,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$contacts->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $menu= $this->contactRepo->find($request->id);
        $menu->delete();
        return response()->json(['estado'=>true, 'nombre'=>$menu->nombreTienda]);
    }

    public function search($q)
    {
        $contacts = $this->contactRepo->search($q);

        return response()->json($contacts);
    }
    public function exportar($ini,$fin)
    {
        $this->fecha_inicio = $ini;
        $this->fecha_fin = $fin;
        return Excel::create('Laravel Excel', function($excel) {
        
            $excel->sheet('contacts', function($sheet) {

                $contact = $this->contactRepo->exportar($this->fecha_inicio,$this->fecha_fin);
 
                $sheet->fromArray($contact);
 
            });
        })->export('xls');
        //return Book::all();
    }
    
}