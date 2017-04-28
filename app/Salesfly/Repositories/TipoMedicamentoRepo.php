<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\TipoMedicamento;

class TipoMedicamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new TipoMedicamento;
    }

    public function search($q)
    {
        $tipoMedicamento =TipoMedicamento::where('descripcion','like', $q.'%')
                    ->paginate(15);
        return $tipoMedicamento;
    }
    public function searchall($q)
    {
        $tipoMedicamento =TipoMedicamento::get();
        return $tipoMedicamento;
    }
    
} 