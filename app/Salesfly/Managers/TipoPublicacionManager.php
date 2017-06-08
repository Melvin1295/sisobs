<?php

namespace Salesfly\Salesfly\Managers;
class TipoPublicacionManager extends BaseManager {

    public function getRules()
    {
        $rules = [  
                'descripcion'=>'',
                'glosa'=>'',
                'estado'=>''                
                  ];
        return $rules;
    }
} 
