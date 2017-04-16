<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Colaborador;

class ColaboradorRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Colaborador;
    }

    public function search($q)
    {
        $coloborador =Colaborador::where('titulo','like', $q.'%')
                    ->with('province')
                    ->paginate(15);
        return $coloborador;
    }
    public function paginaterepo($c){
         $coloborador =Colaborador::paginate($c);
        return $coloborador;
    }
    public function searchUltimo()
    {
        $coloborador =Colaborador::where('estado',1)
                    ->orderBy('fecha_publicacion','desc')
                    ->with('province')
                    ->orderBy('fecha_publicacion','desc')
                    ->first();
        return $coloborador;
    }
    public function indicators_all()
    {
        $coloborador =Colaborador::where('estado',1)
                    ->with('province')
                    ->paginate(15);
        return $coloborador;
    }
    
} 