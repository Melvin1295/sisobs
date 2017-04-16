<?php
namespace Salesfly\Salesfly\Managers;
class PublisherManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'titulo'=> '',
            'fecha_publicacion'=> '',
            'tipo'=> '',
            'archivo_adjunto'=> '',
            'estado'=> '',
            'usuario_id'=> '',
            'categoria'=> ''
                  ];
        return $rules;
    }}