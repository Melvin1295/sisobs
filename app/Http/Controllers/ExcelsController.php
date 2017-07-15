<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


use Salesfly\Salesfly\Repositories\DepartamentRepo;
use Salesfly\Salesfly\Managers\DepartamentManager;

use Salesfly\Salesfly\Repositories\ProvinceRepo;
use Salesfly\Salesfly\Managers\ProvinceManager;

use Salesfly\Salesfly\Repositories\DistritRepo;
use Salesfly\Salesfly\Managers\DistritManager;

use Salesfly\Salesfly\Repositories\IndicatorRepo;
use Salesfly\Salesfly\Managers\IndicatorManager;

use Salesfly\Salesfly\Repositories\IndicatorsDataRepo;
use Salesfly\Salesfly\Managers\IndicatorsDataManager;

use Salesfly\Salesfly\Entities\IndicatorsData;


use Excel;


class ExcelsController extends Controller {

    protected $menuRepo;

    public function __construct(DepartamentRepo $departamentRepo,ProvinceRepo $provinceRepo,DistritRepo $distritRepo,IndicatorRepo $indicatorRepo,IndicatorsDataRepo $indicatorsDataRepo)
    {
        $this->departamentRepo = $departamentRepo;
        $this->provinceRepo=$provinceRepo;
        $this->distritRepo=$distritRepo;
        $this->indicatorRepo=$indicatorRepo;
        $this->indicatorsDataRepo=$indicatorsDataRepo;
    }

    public function index()
    {
        return View('excels.index');
    }
   
    public function all()
    {
        $menus = $this->menuRepo->paginate(15);
        return response()->json($menus);
    }

    public function paginatep(){
        $menus = $this->menuRepo->paginate(15);
        return response()->json($menus);
    }


    public function form_create()
    {
        return View('excels.form_create');
    }

    public function form_edit()
    {
        return View('menus.form_edit');
    }

    
    
    public function getAllDepartament(){
            $departaments = $this->departamentRepo->searchall(30);
            return response()->json($departaments);
    }

    public function getAllProvince(){
            $provinces = $this->provinceRepo->searchall(30);
            return response()->json($provinces);
    }

    public function getAllDistrit(){
            $distrits = $this->distritRepo->searchall(30);
            return response()->json($distrits);
    }
    
    public function getAllIndicator(){
            $indicators = $this->indicatorRepo->searchall(30);
            return response()->json($indicators);
    }
     public function searchByIndicator($indicator){
        $indicatorsData = $this->indicatorsDataRepo->searchByIndicator($indicator);
            return response()->json($indicatorsData);
     }
     public function searchByDepartament($indicador,$dep_id){
        $indicatorsData = $this->indicatorsDataRepo->searchByDepartament($indicador,$dep_id);
            return response()->json($indicatorsData);
     }
     public function indicadoresCargados(){
         $indicatorsData = $this->indicatorsDataRepo->indicadoresCargados();
            return response()->json($indicatorsData);
     }
    public function import(Request $request)
    {
         
          //var_dump($request->archivo); die();;
          //$num=$request->numero;

        if($request->departament_id==0){
             $dep=null;
        }else{
            $dep=$request->departament_id;
        }
        if($request->province_id==0){
            $prov=null;
        }else{
            $prov=$request->province_id;
        }
        if($request->distrit_id==0){
            $dist=null;
        }else{
            $dist=$request->distrit_id;
        }
        if($request->numero == 0){
           IndicatorsData::where('numero','=',0)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 1){
           IndicatorsData::where('numero','=',1)
                    ->where('departament_id','=',$dep)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 2){
           IndicatorsData::where('numero','=',2)
                    ->where('province_id','=',$prov)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 3){
           IndicatorsData::where('numero','=',3)
                    ->where('distrit_id','=',$dist)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
                             
          $data= Excel::load('images/excel/carga.xlsx', function($reader){})->get();
          //var_dump($data);die();
         // Excel::load('images/excel/carga.xlsx', function($reader) {
 
                      foreach ($data as $indi) {
                        //var_dump($num);die();
                             $anio1=0;
                             $anio2=0;
                             $anio3=0;
                             $anio4=0;
                             $anio5=0;
                             $anio6=0;
                             $anio7=0;
                             $anio8=0;
                             $anio9=0;
                             $anio10=0;
                             $anio11=0;
                             $anio12=0;
                             $anio13=0;
                             $anio14=0;
                             $anio15=0;
                             $anio16=0;
                             $anio17=0;
                             $anio18=0;
                             $anio19=0;

                            if(!empty($indi['2000'])){$anio1=$indi['2000'];}else{$anio1=0;}
                            if(!empty($indi['2001'])){$anio2=$indi['2001'];}else{$anio2=0;} 
                            if(!empty($indi['2002'])){$anio3=$indi['2002'];}else{$anio3=0;} 
                            if(!empty($indi['2003'])){$anio4=$indi['2003'];}else{$anio4=0;} 
                            if(!empty($indi['2004'])){$anio5=$indi['2004'];}else{$anio5=0;} 
                            if(!empty($indi['2005'])){$anio6=$indi['2005'];}else{$anio6=0;} 
                            if(!empty($indi['2006'])){$anio7=$indi['2006'];}else{$anio7=0;} 
                            if(!empty($indi['2007'])){$anio8=$indi['2007'];}else{$anio8=0;} 
                            if(!empty($indi['2008'])){$anio9=$indi['2008'];}else{$anio9=0;} 
                            if(!empty($indi['2009'])){$anio10=$indi['2009'];}else{$anio10=0;} 
                            if(!empty($indi['2010'])){$anio11=$indi['2010'];}else{$anio11=0;} 
                            if(!empty($indi['2011'])){$anio12=$indi['2011'];}else{$anio12=0;} 
                            if(!empty($indi['2012'])){$anio13=$indi['2012'];}else{$anio13=0;} 
                            if(!empty($indi['2013'])){$anio14=$indi['2013'];}else{$anio14=0;} 
                            if(!empty($indi['2014'])){$anio15=$indi['2014'];}else{$anio15=0;} 
                            if(!empty($indi['2015'])){$anio16=$indi['2015'];}else{$anio16=0;} 
                            if(!empty($indi['2016'])){$anio17=$indi['2016'];}else{$anio17=0;} 
                            if(!empty($indi['2017'])){$anio18=$indi['2017'];}else{$anio18=0;} 
                            if(!empty($indi['2018'])){$anio19=$indi['2018'];}else{$anio19=0;} 
                           $indicators = $this->indicatorsDataRepo->getModel();
                           $manager = new IndicatorsDataManager($indicators,
                                 ['descripcion'=>$indi['descripcion'],
                                    '2000'=>$anio1,
                                    '2001'=>$anio2,
                                    '2002'=>$anio3,
                                    '2003'=>$anio4,
                                    '2004'=>$anio5,
                                    '2005'=>$anio6,
                                    '2006'=>$anio7,
                                    '2007'=>$anio8,
                                    '2008'=>$anio9,
                                    '2009'=>$anio10,
                                    '2010'=>$anio11,
                                    '2011'=>$anio12,
                                    '2012'=>$anio13,
                                    '2013'=>$anio14,
                                    '2014'=>$anio15,
                                    '2015'=>$anio16,
                                    '2016'=>$anio17,
                                    '2017'=>$anio18,
                                    '2018'=>$anio19,
                                    'numero'=>$request->numero,
                                    'departament_id'=>$dep,
                                    'province_id'=>$prov,
                                    'distrit_id'=>$dist,
                                    'indicator_id'=>$request->indicator_id,
                                    'fuente'=>$request->fuente]
                            );
                     $manager->save();
                      }
        // });
        return response()->json(['estado'=>true, 'nombre'=>'Ejemplo']);
    }
    //ultimos cambios
    public function deleteFileIndicador(Request $request){
       //var_dump($request->indicator_id);die();
         if($request->idDep==0){
             $dep=null;
        }else{
            $dep=$request->idDep;
        }
        if($request->idePro==0){
            $prov=null;
        }else{
            $prov=$request->idPro;
        }
        if($request->idDist==0){
            $dist=null;
        }else{
            $dist=$request->idDist;
        }
        if($request->numero == 0){
           IndicatorsData::where('numero','=',0)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 1){
           IndicatorsData::where('numero','=',1)
                    ->where('departament_id','=',$dep)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 2){
           IndicatorsData::where('numero','=',2)
                    ->where('province_id','=',$prov)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        if($request->numero == 3){
            //var_dump($dist);die();
           IndicatorsData::where('numero','=',3)
                    ->where('distrit_id','=',$dist)
                    ->where('indicator_id','=',$request->indicator_id)
                    ->delete();
        }
        return response()->json(['estado'=>true, 'nombre'=>'Elimando']);
    }
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        //var_dump($_FILES["file"]);
        $time=time();
        if(!is_dir("images/excel/"))
            mkdir("images/excel/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/excel/".$file))
        {
             
        }
        return "/images/excel/".$file;      
    }
    public function exportarGlobal($indicador)
    {
        $this->indicador = $indicador;
        Excel::create('Indicador Global', function($excel) {
 
            $excel->sheet('reporte_mediamentos', function($sheet) {
 
                $reclamos = $this->indicatorsDataRepo->excelsDataInidcador($this->indicador);
 
                $sheet->fromArray($reclamos);
 
            });
        })->export('xls');
        return Book::all();
    }
    public function exportarGlobalD($departament,$indicador)
    {
        $this->indicador = $indicador;
        $this->dep = $departament;
        Excel::create('Indicador por Departamento', function($excel) {
 
            $excel->sheet('reporte_mediamentos', function($sheet) {
 
                $reclamos = $this->indicatorsDataRepo->excelsDataInidcadorD($this->dep,$this->indicador);
 
                $sheet->fromArray($reclamos);
 
            });
        })->export('xls');
        return Book::all();
    }
     public function exportarGlobalP($departament,$indicador)
    {
        $this->indicador = $indicador;
        $this->dep = $departament;
        Excel::create('Indicador por Provincia', function($excel) {
 
            $excel->sheet('reporte_mediamentos', function($sheet) {
 
                $reclamos = $this->indicatorsDataRepo->excelsDataInidcadorD($this->dep,$this->indicador);
 
                $sheet->fromArray($reclamos);
 
            });
        })->export('xls');
        return Book::all();
    }
     public function exportarGlobalZ($departament,$indicador)
    {
        $this->indicador = $indicador;
        $this->dep = $departament;
        Excel::create('Indicador por Distrito', function($excel) {
 
            $excel->sheet('reporte_mediamentos', function($sheet) {
 
                $reclamos = $this->indicatorsDataRepo->excelsDataInidcadorZ($this->dep,$this->indicador);
 
                $sheet->fromArray($reclamos);
 
            });
        })->export('xls');
        return Book::all();
    }
}