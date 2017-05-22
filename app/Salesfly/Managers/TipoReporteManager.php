<?php

namespace Salesfly\Salesfly\Managers;
class TipoReporteManager extends BaseManager {

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
