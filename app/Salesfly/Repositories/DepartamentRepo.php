<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Departament;

class DepartamentRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Departament;
    }

    public function search($q)
    {
        $departaments =Departament::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $departaments;
    }
    public function searchall($q)
    {
        $departaments =Departament::get();
        return $departaments;
    }
    
} 