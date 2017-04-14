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
        $manager = new SliderManager($sliders,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$sliders->nombreTienda]);
    }

    
    public function destroy(Request $request)
    {
        $slider= $this->sliderRepo->find($request->id);
        $slider->delete();
        return response()->json(['estado'=>true, 'nombre'=>$slider->nombreTienda]);
    }

    public function search($q)
    {
        $sliders = $this->sliderRepo->search($q);

        return response()->json($sliders);
    }
    
}