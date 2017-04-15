<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Editorial;

class EditorialRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Editorial;
    }

    public function search($q)
    {
        $editorials =Editorial::where('nombre','like', $q.'%')
                    ->orwhere('titulo_descripcion','like', $q.'%')
                    ->paginate(15);
        return $editorials;
    }
    
} 