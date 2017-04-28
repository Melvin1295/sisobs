<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\ReporteMedicamento;

class ReporteMedicamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new ReporteMedicamento;
    }

    public function search($q)
    {
        $reporteMedicamento =ReporteMedicamento::where('descripcion','like', $q.'%')
                    ->paginate(15);
        return $reporteMedicamento;
    }
    public function paginaterepo($c,$rol,$user_id){
        //return "Hola";
        if($rol==1){
            $medicamento =ReporteMedicamento::with('usuario.ubigeo')
                        ->orderBy('id','desc')
                        ->paginate($c); 
             return $medicamento;
        }else if($rol==2){
            $medicamento =ReporteMedicamento::orderBy('id','desc')
                    ->where('user_id',$user_id)
                    ->paginate($c);
            return $medicamento; 
        }     
       
    }
    
} 