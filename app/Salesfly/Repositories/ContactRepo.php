<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Contact;

class ContactRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Contact;
    }

    public function search($q)
    {
        $contacto =Contact::where('titulo','like', $q.'%')
                    
                    ->orderBy('id','desc')
                    ->paginate(15);
        return $contacto;
    }

    public function paginaterepo($c){
         $contacto =Contact::orderBy('id','desc')
                    ->paginate($c);

        return $contacto;
    }
    public function exportar($ini,$fin){ 
      //return $ini.'---'.$fin;
         $ontact =Contact::


                    select([
                            'id as Cod_Mensaje',
                            
                            'nombres as Nombre',
                            'email as Email',
                            'telefono as Telefono',
                            'descripcion as Mensaje'
                            //DB::raw("GROUP_CONCAT(tipo_quejas.descripcion SEPARATOR ' / ') as Quejas")
                            
                         ])
                    //->select()
                    //->groupBy('reclamos.id')
                    ->whereBetween('created_at',[$ini,$fin])
                    ->orderBy('id','asc')
                    ->get();

        return $ontact;
    }
} 