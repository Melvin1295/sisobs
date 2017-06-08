<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\ReporteMedicamento;

class ReporteMedicamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new ReporteMedicamento;
    } 

    public function search($q,$rol,$user_id)
    {
        if($rol!=0){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                        //->with('usuario.ubigeo')
                        ->with('det_medicamentos.medicamento')
                        ->where('descripcion','like', $q.'%')
                        ->orderBy('reporte_mediamentos.id','desc')
                        ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento',
                            'ubigeos.provincia',
                            'ubigeos.distrito'
                         ])
                        ->paginate(15); 
             return $medicamento;
        }else if($rol==0){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                    ->orderBy('reporte_mediamentos.id','desc')
                    ->with('det_medicamentos.medicamento')
                    ->where('user_id',$user_id)
                    ->where('descripcion','like', $q.'%')
                    ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento',
                            'ubigeos.provincia',
                            'ubigeos.distrito'

                         ])
                    ->paginate(15);
            return $medicamento; 
        }
    }
    public function paginaterepo($c,$rol,$user_id){
        //return "Hola";
        if($rol!=0){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                        //->with('usuario.ubigeo')
                        ->with('det_medicamentos.medicamento')
                        ->orderBy('reporte_mediamentos.id','desc')
                        ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento',
                            'ubigeos.provincia',
                            'ubigeos.distrito'

                         ])
                        ->paginate($c); 
             return $medicamento;
        }else if($rol==0){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                    ->orderBy('reporte_mediamentos.id','desc')
                    ->with('det_medicamentos.medicamento')
                    ->where('user_id',$user_id)
                    ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento',
                            'ubigeos.provincia',
                            'ubigeos.distrito'

                         ])
                    ->paginate($c);
            return $medicamento; 
        }     
       
    }

    public function exportar($ini,$fin){ 
      //return $ini.'---'.$fin;
         $reporte_mediamentos =ReporteMedicamento::
                    leftjoin('det_reporte_medicamentos', function($join) { 
                              $join->on('reporte_mediamentos.id','=', 'det_reporte_medicamentos.reporte_medicamento_id')
                              ->where('det_reporte_medicamentos.estado','=',1);
                            })
                    ->leftjoin('medicamentos', function($join) {
                              $join->on('medicamentos.id','=', 'det_reporte_medicamentos.medicamento_id')
                              ->where('medicamentos.estado','=',1);
                            })

                    ->leftjoin('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                    ->leftjoin('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('ubigeos.estado','=',1);
                            })

                    ->leftjoin('tipos_reporte', function($join) {
                              $join->on('tipos_reporte.id','=', 'reporte_mediamentos.tipo_reporte_id')
                              ->where('tipos_reporte.estado','=',1);
                            })


                    ->select([
                            'reporte_mediamentos.id as Cod_Reporte',
                            'reporte_mediamentos.created_at as Fecha',
                            'users.name as Usuario',
                            
                            'ubigeos.departamento as Departamento',
                            'ubigeos.provincia as Provincia',
                            'ubigeos.distrito as Distrito',
                            
                            'reporte_mediamentos.mes as Mes',
                            'reporte_mediamentos.anio as Año',
                            'tipos_reporte.descripcion as Estado',
                            'reporte_mediamentos.descripcion as Descripcion',
                            'medicamentos.descripcion as Medicamento'
                            //DB::raw("GROUP_CONCAT(tipo_quejas.descripcion SEPARATOR ' / ') as Quejas")
                            
                         ])
                    //->select()
                    //->groupBy('reclamos.id')
                    ->whereBetween('reporte_mediamentos.created_at',[$ini,$fin])
                    ->orderBy('reporte_mediamentos.id','asc')
                    ->get();

        return $reporte_mediamentos;
    }
    
} 