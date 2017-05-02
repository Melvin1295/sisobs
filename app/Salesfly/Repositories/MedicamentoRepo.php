<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Medicamento;

class MedicamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Medicamento;
    }

    public function search($q)
    {
        $medicamento =Medicamento::with('tipomedicamento')
                    ->where('descripcion','like', $q.'%')
                    ->paginate(15);
        return $medicamento;
    }
    public function paginaterepo($c){
         $medicamento =Medicamento::with('tipomedicamento')
                    ->paginate($c); 

        return $medicamento;
    }
    public function buscarmedicamento($q){
      $medicamento = Medicamento::where('descripcion','like',$q.'%')               
                            ->get();
            return $medicamento;
    }
    
} 