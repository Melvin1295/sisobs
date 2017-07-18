<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Indicator;

class IndicatorRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Indicator;
    }

    public function search($q)
    {
        $indicator =Indicator::where('titulo','like', $q.'%')
                    ->with('province')
                    ->paginate(15);
        return $indicator;
    }
    public function paginaterepo($c){
         $indicator =Indicator::with('province')
                    ->paginate($c);
        return $indicator;
    }
    public function searchUltimo()
    {
        $publisher =Indicator::where('estado',1)
                    ->orderBy('fecha_publicacion','desc')
                    ->with('province')
                    ->orderBy('fecha_publicacion','desc')
                    ->first();
        return $publisher;
    }
    public function indicators_all($q)
    {
        if(!empty($q)){
            $publisher =Indicator::where('estado',1)
                    ->where('titulo','like','%'.$q.'%')
                    ->with('province')
                    ->paginate(1000);
                }else{
                    $publisher =Indicator::where('estado',1)
                    ->with('province')
                    ->paginate(1000);
                }
        
        return $publisher;
    }
     public function indicators_all2()
    {
        $publisher =Indicator::where('estado',1)
                    ->with('province')
                    ->paginate(2);
        return $publisher;
    }
    public function searchall($q)
    {
        $indicator =Indicator::get();
        return $indicator;
    }
    
} 