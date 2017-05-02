<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\DetReporteMedicamento;

class DetReporteMedicamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new DetReporteMedicamento;
    }

    public function search($q)
    {
        $detReporteMedicamento =DetReporteMedicamento::where('descripcion','like', $q.'%')
                    ->paginate(15);
        return $detReporteMedicamento;
    }
    
} 