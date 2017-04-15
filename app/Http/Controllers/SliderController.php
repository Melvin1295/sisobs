<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\SliderRepo;
use Salesfly\Salesfly\Managers\SliderManager;

class SliderController extends Controller {

    protected $sliderRepo;

    public function __construct(SliderRepo $sliderRepo)
    {
        $this->sliderRepo = $sliderRepo;
    }

    public function index()
    {
        return View('sliders.index');
    }

    public function all()
    {
        $sliders = $this->sliderRepo->paginate(15);
        return response()->json($sliders);
    }

    public function slidersall()
    {
        $sliders = $this->sliderRepo->slidersall(15);
        return response()->json($sliders);
    }

    public function paginatep(){
        $sliders = $this->sliderRepo->paginate(15);
        return response()->json($sliders);
    }


    public function form_create()
    {
        return View('sliders.form_create');
    }

    public function form_edit()
    {
        return View('sliders.form_edit');
    }

    public function create(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $sliders = $this->sliderRepo->getModel();
        $manager = new SliderManager($sliders,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$sliders->nombreTienda]);
    }

    public function find($id)
    {
        $slider = $this->sliderRepo->find($id);
        return response()->json($slider);
    }

    public function edit(Request $request)
    {
        $user = \Auth::user();
        $request->merge(array('usuario_id' => $user->id));
        $sliders = $this->sliderRepo->find($request->id);

        if($request->imagen!=$sliders->imagen){
            if ($sliders->imagen!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$sliders->imagen);
            }            
        }

        $manager = new SliderManager($sliders,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$sliders->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $slider= $this->sliderRepo->find($request->id);
         if($slider->imagen!=""){
            $rest = substr(__DIR__, 0, -21);
            unlink($rest."/public".$slider->imagen);
        }
        $slider->delete();
        return response()->json(['estado'=>true, 'nombre'=>$slider->nombreTienda]);
    }

    public function search($q)
    {
        $sliders = $this->sliderRepo->search($q);

        return response()->json($sliders);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/slideshow/"))
            mkdir("images/slideshow/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/slideshow/".$time."_".$file))
        {
             
        }
        return "/images/slideshow/".$time."_".$file;      
    }
    
}