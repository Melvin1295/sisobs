<?php
namespace Salesfly\Salesfly\Managers;
class ColaboradorManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombres'=> '',
            'apellidos'=> '',
            'imagen'=> '',
            'cargo'=> '',
            'descripcion'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }}