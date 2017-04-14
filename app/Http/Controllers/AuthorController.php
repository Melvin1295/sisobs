<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\AuthorRepo;
use Salesfly\Salesfly\Managers\AuthorManager;

use Intervention\Image\Facades\Image;

class AuthorController extends Controller {

    protected $authorRepo;

    public function __construct(AuthorRepo $authorRepo)
    {
        $this->authorRepo = $authorRepo;
    }

    public function index()
    {
        return View('authors.index');
    }

    public function all()
    {
        $authors = $this->authorRepo->paginate(15);
        return response()->json($authors);
        //var_dump($authors);
    }

    public function paginatep(){
        $authors = $this->authorRepo->paginate(15);
        return response()->json($authors);
    }


    public function form_create()
    {
        return View('authors.form_create');
    }

    public function form_edit()
    {
        return View('authors.form_edit');
    }

    public function create(Request $request)
    {
        //var_dump($request->all()); die();
        $employee = $this->authorRepo->getModel();

        //===================autogenerado========================//

        if($request->input('autogenerado') === true) {
            $codigo = \DB::table('employees')->max('codigo');
            if (!empty($codigo)) {
                $codigo = $codigo + 1;
            } else {
                $codigo = 1; //inicializar el sku;
            }
            $request->merge(array('codigo' => $codigo));
        }else{

        }

        //================fin auto==============================//
       
        $manager = new AuthorManager($employee,$request->except('fechanac','imagen'));
        $manager->save();

        //------------------------------------------------

        if($request->has('imagen') and substr($request->input('imagen'),5,5) === 'image'){
            $imagen = $request->input('imagen');
            $mime = $this->get_string_between($imagen,'/',';');
            $imagen = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen));
            Image::make($imagen)->resize(200,200)->save('images/authors/'.$employee->id.'.'.$mime);
            $employee->imagen='/images/authors/'.$employee->id.'.'.$mime;
            $employee->save();
        }else{
            $employee->imagen='/images/authors/default.jpg';
            $employee->save();
        }
        //-------------------------------------------------
        
       
        if($this->authorRepo->validateDate(substr($request->input('fechanac'),0,10))){
            $employee->fechanac = substr($request->input('fechanac'),0,10);
        }else{
            $employee->fechanac = null;
        }

        $employee->save();

        return response()->json(['estado'=>true, 'nombres'=>$employee->nombres]);
    }

    public function find($id)
    {
        $employee = $this->authorRepo->find($id);
        return response()->json($employee);
    }

    public function edit(Request $request)
    {
       $employee = $this->authorRepo->find($request->id);
       //var_dump($employee->all());die();
        //===================autogenerado========================//

        if($request->input('autogenerado') === true) {
            $codigo = \DB::table('employees')->max('codigo');
            if (!empty($codigo)) {
                $codigo = $codigo + 1;
            } else {
                $codigo = 1; //inicializar el sku;
            }
            $request->merge(array('codigo' => $codigo));
        }else{

        }

        //================fin auto==============================//
        $manager = new AuthorManager($employee,$request->except('fechanac','imagen'));
        $manager->save();
        //------------------------------------------------
        
        if($request->has('imagen') and substr($request->input('imagen'),5,5) === 'image'){
            $imagen = $request->input('imagen');
            $mime = $this->get_string_between($imagen,'/',';');
            $imagen = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen));
            Image::make($imagen)->resize(200,200)->save('images/authors/'.$employee->id.'.'.$mime);
            $employee->imagen='/images/authors/'.$employee->id.'.'.$mime;
            $employee->save();
        }
        //-------------------------------------------------
        
       
        if($this->authorRepo->validateDate(substr($request->input('fechanac'),0,10))){
            $employee->fechanac = substr($request->input('fechanac'),0,10);
        }else{
            $employee->fechanac = null;
        }

        //===================autogenerado========================//

        if($request->input('autogenerado') === true) {
            $codigo = \DB::table('employees')->max('codigo');
            if (!empty($codigo)) {
                $codigo = $codigo + 1;
            } else {
                $codigo = 1; //inicializar el sku;
            }
            $request->merge(array('codigo' => $codigo));
        }else{

        }

        //================fin auto==============================//

        $employee->save();

        return response()->json(['estado'=>true, 'nombres'=>$employee->nombres]);
    }

    public function destroy(Request $request)
    {
        $employee= $this->authorRepo->find($request->id);
        $employee->delete();
        //Event::fire('update.employee',$employee->all());
        return response()->json(['estado'=>true, 'nombre'=>$employee->nombre]);
    }

    public function search($q)
    {
        //$q = Input::get('q');
        $authors = $this->authorRepo->search($q);

        return response()->json($authors);
    }
    public function searchall($q)
    {
        //$q = Input::get('q');
        $authors = $this->authorRepo->searchall($q);

        return response()->json($authors); 
    }

    public function get_string_between($string, $start, $end){
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    }
}