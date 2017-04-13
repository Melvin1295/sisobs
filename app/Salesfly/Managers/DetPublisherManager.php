<?php
namespace Salesfly\Salesfly\Managers;
class DetPublisherManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'titulo'=> '',
            'descripcion'=> '',
            'descripcion_corta'=> '',
            'archivo_adjunto'=> '',
            'imagen'=> '',
            'orden'=> '',
            'autor_id'=> '',
            'publisher_id'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }}