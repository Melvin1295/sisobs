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
        if($rol==1){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                        //->with('usuario.ubigeo')
                        ->with('medicamento')
                        ->where('descripcion','like', $q.'%')
                        ->orderBy('reporte_mediamentos.id','desc')
                        ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento'

                         ])
                        ->paginate(15); 
             return $medicamento;
        }else if($rol==2){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                    ->orderBy('reporte_mediamentos.id','desc')
                    ->with('medicamento')
                    ->where('user_id',$user_id)
                    ->where('descripcion','like', $q.'%')
                    ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento'

                         ])
                    ->paginate(15);
            return $medicamento; 
        }
    }
    public function paginaterepo($c,$rol,$user_id){
        //return "Hola";
        if($rol==1){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                        //->with('usuario.ubigeo')
                        ->with('medicamento')
                        ->orderBy('reporte_mediamentos.id','desc')
                        ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento'

                         ])
                        ->paginate($c); 
             return $medicamento;
        }else if($rol==2){
            $medicamento =ReporteMedicamento::join('users', function($join) {
                              $join->on('users.id','=', 'reporte_mediamentos.user_id')
                              ->where('users.estado','=',1);
                            })
                        ->join('ubigeos', function($join) {
                              $join->on('ubigeos.id','=', 'users.ubigeo_id')
                              ->where('users.estado','=',1);
                            })
                    ->orderBy('reporte_mediamentos.id','desc')
                    ->with('medicamento')
                    ->where('user_id',$user_id)
                    ->select([
                            'reporte_mediamentos.*',
                            'users.name',
                            'ubigeos.departamento'

                         ])
                    ->paginate($c);
            return $medicamento; 
        }     
       
    }
    
} 