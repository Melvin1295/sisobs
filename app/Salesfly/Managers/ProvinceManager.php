<?php
namespace Salesfly\Salesfly\Managers;
class ProvinceManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombre'=> '',
            'descripcion'=> '',
            'codigo'=> '',
            'pais'=> '',
            'estado'=> '',
            'departament_id'=>''
                  ];
        return $rules;
    }
}