<?php
namespace Salesfly\Salesfly\Managers;
class ReporteMedicamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'mes'=> '',
            'descripcion'=> '',
            'glosa'=> '',
            'estado'=> '',
            'user_id'=> ''
                  ];
        return $rules;
    }
}