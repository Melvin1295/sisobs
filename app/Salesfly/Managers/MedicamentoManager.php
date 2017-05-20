<?php

namespace Salesfly\Salesfly\Managers;
class MedicamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [  
                'descripcion'=>'',
                'glosa'=>'',
                'tipo_medicamento_id'=>'',
                'estado'=>''                
                  ];
        return $rules;
    }
} 
