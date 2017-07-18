<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Distrit;

class DistritRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Distrit;
    }

    public function search($q)
    {
        $distrits =Distrit::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $distrits;
    }
    public function searchall($q)
    {
        $distrits =Distrit::get();
        return $distrits;
    }
    public function searchall1($q,$prov)
    {
        if(empty($q)){
           $distrits =Distrit::where('province_id','=',$prov)
         ->get();
        }else{
           $distrits =Distrit::where('nombre','like','%'.$q.'%')
         ->where('province_id','=',$prov)
         ->get();
        }        
        return $distrits;
    }

     public function findByProv($prov)
    {
    
        $authors =Distrit::where('province_id','=',$prov)
         ->get();
            
        return $authors;
    }
    
} 