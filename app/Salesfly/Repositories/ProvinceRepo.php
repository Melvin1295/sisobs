<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Province;

class ProvinceRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Province;
    }

    public function search($q)
    {
        $menus =Province::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $menus;
    }
    public function searchall($q)
    {
        $authors =Province::get();
        return $authors;
    }
     public function searchall1($q,$depId)
    {
     if(empty($q)){
        $authors =Province::where('departament_id','=',$depId)
         ->get();
     }else{
        $authors =Province::where('nombre','like','%'.$q.'%')
         ->where('departament_id','=',$depId)
         ->get();
     }        
        return $authors;
    }
    
} 