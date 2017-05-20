<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Reclamo;

class ReclamoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Reclamo;
    }

    public function search($q)
    {
        $reclamos =Reclamo::where('nombres','like', $q.'%')
                    ->orderBy('id','desc')
                    ->with('ubigeo')
                    ->paginate(15);
        return $reclamos;
    }
    public function paginaterepo($c){
         $indicator =Reclamo::with('ubigeo')
                    ->orderBy('id','desc')
                    ->paginate($c);

        return $indicator;
    }
    
} 