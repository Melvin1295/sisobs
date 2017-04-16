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
            'employee_id'=> '',
            'fecha_publicacion'=> '',
            'estado'=> '',
            'categoria'=> ''
                  ];
        return $rules;
    }}