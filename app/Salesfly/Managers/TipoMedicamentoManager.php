<?php

namespace Salesfly\Salesfly\Managers;
class TipoMedicamentoManager extends BaseManager {

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
