<?php
namespace Salesfly\Salesfly\Managers;
class DetReclamosTipoQuejaManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'glosa'=> '',
            'estado'=> '',
            'tipo_queja_id'=> '',
            'reclamo_id'=> ''
                  ];
        return $rules;
    }
    
}