<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Reclamo;
use DB;

class ReclamoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Reclamo;
    }

    public function search($q)
    {
        $reclamos =Reclamo::where('nombres','like', $q.'%')
                    ->orderBy('id','desc')
                    ->with('ubigeo')
                    ->with('quejas.tipoQuejaDescripcion')
                    ->paginate(15);
        return $reclamos;
    }
    public function paginaterepo($c){
         $reclamos =Reclamo::with('ubigeo')
                    ->orderBy('id','desc')
                    ->with('quejas.tipoQuejaDescripcion')
                    ->paginate($c);

        return $reclamos;
    }

    public function exportar($ini,$fin){
         $reclamos =Reclamo::
                    leftjoin('det_reclamos_tipo_quejas', function($join) {
                              $join->on('reclamos.id','=', 'det_reclamos_tipo_quejas.reclamo_id')
                              ->where('det_reclamos_tipo_quejas.estado','=',1);
                            })
                    ->leftjoin('tipo_quejas', function($join) {
                              $join->on('tipo_quejas.id','=', 'det_reclamos_tipo_quejas.tipo_queja_id')
                              ->where('tipo_quejas.estado','=',1);
                            })
                    ->select([
                            'reclamos.id as Cod_Reclamo',
                            'reclamos.nombres as Nombres',
                            'reclamos.correo as Correo',
                            'reclamos.telefono as Telefono',
                            'reclamos.establecimiento as Establecimiento',
                            'reclamos.descripcion_reclamo as Descripcion(Queja/Reclamo)',
                            DB::raw("GROUP_CONCAT(tipo_quejas.descripcion SEPARATOR ' / ') as Quejas")
                            
                         ])
                    ->whereBetween('reclamos.created_at',[$ini,$fin])
                    //->select()
                    ->groupBy('reclamos.id')
                    ->get();

        return $reclamos;
    }
    
} 