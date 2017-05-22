<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\TipoReporte;

class TipoReporteRepo extends BaseRepo{
    
    public function getModel()
    {
        return new TipoReporte;
    }

    public function search($q)
    {
        $tipoReporte =TipoReporte::where('descripcion','like', $q.'%')
                    ->paginate(15);
        return $tipoReporte;
    }
    public function searchall($q)
    {
        $tipoReporte =TipoReporte::get();
        return $tipoReporte;
    }
    
} 