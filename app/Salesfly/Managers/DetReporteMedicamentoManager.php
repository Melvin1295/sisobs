<?php
namespace Salesfly\Salesfly\Managers;
class DetReporteMedicamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'descripcion'=> '',
            'glosa'=> '',
            'estado'=> '',
            'reporte_mediamento_id'=> '',
            'medicamento_id'=> ''
                  ];
        return $rules;
    }
}