<?php
namespace Salesfly\Salesfly\Managers;
class IndicatorManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'titulo'=> '',
            'descripcion'=> '',
            'descripcion_corta'=> '',
            'archivo_adjunto'=> '',
            'funete'=> '',
            'estado'=> '',
            'province_id'=> ''
                  ];
        return $rules;
    }}