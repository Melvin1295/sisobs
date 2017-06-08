<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\TipoQueja;

class TipoQuejaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new TipoQueja;
    }
    public function searchall($q)
    {
        $tipoMedicamento =TipoQueja::get();
        return $tipoMedicamento;
    }
    
} 