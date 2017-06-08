<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\TipoPublicacion;

class TipoPublicacionRepo extends BaseRepo{
    
    public function getModel()
    {
        return new TipoPublicacion;
    }

    public function searchall($q)
    {
        $tipo =TipoPublicacion::get();
        return $tipo;
    }
    
} 