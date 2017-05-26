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
    
} 