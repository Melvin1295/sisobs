<?php
namespace Salesfly\Salesfly\Managers;
class DetReporteMedicamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [             
            'glosa'=> '',
            'estado'=> '',
            'reporte_medicamento_id'=> '',
            'medicamento_id'=> ''
                  ];
        return $rules;
    }
}