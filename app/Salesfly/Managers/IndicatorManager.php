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
            'fecha_publicacion'=> '',
            'fuente'=> '',
            'estado'=> '',
            'province_id'=> ''
                  ];
        return $rules;
    }
    
}