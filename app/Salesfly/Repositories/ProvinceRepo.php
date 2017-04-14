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
        $authors =Province::paginate(30);
        return $authors;
    }
    
} 