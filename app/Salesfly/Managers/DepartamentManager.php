<?php
namespace Salesfly\Salesfly\Managers;
class DepartamentManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombre'=> '',
            'descripcion'=> '',
            'pais'=> ''
                  ];
        return $rules;
    }
}