<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\DetReclamosTipoQueja;

class DetReclamosTipoQuejaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new DetReclamosTipoQueja;
    }
    public function searchall($q)
    {
        $tipoMedicamento =DetReclamosTipoQueja::get();
        return $tipoMedicamento;
    }
    
    
} 