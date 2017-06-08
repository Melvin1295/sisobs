<?php
namespace Salesfly\Salesfly\Managers;
class ReporteMedicamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'mes'=> '',
            'descripcion'=> '',
            'anio'=> '',
            'tipo'=> '',
            'glosa'=> '',
            'estado'=> '',
            'user_id'=> '',
            'medicamento_id'=> '',
            'tipo_reporte_id'=> ''
                  ];
        return $rules;
    }
}