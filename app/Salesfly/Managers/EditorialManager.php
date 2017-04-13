<?php
namespace Salesfly\Salesfly\Managers;
class EditorialManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombre'=> '',
            'anio'=> '',
            'descripcion_corta'=> '',
            'descripcion'=> '',
            'titulo_descripcion'=> '',
            'archivo_adjunto'=> '',
            'estado'=> '',
            'fecha_publicacion'=> '',
            'usuario_id'=> ''
                  ];
        return $rules;
    }}