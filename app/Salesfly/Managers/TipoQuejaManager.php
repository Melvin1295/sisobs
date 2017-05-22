<?php
namespace Salesfly\Salesfly\Managers;
class TipoQuejaManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'descripcion'=> '',
            'anio'=> '',
            'glosa'=> '',
            'numero'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }
    
}