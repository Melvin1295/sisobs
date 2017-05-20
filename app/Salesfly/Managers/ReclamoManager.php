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
            'flag1'=>'',
            'flag2'=>'',
            'flag3'=>'',
            'flag4'=>'',
            'ubigeo_id'=>''
                  ];
        return $rules;
    }}