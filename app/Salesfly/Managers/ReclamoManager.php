<?php
namespace Salesfly\Salesfly\Managers;
class ReclamoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombres'=>'',
            'correo'=>'',
            'telefono'=>'',
            'establecimiento'=>'',
            'descripcion_reclamo'=>'',
            'estado'=>'',
            'ubigeo_id'=>''
                  ];
        return $rules;
    }}