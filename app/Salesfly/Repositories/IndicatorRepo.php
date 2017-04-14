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
    
} 