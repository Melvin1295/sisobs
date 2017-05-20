<?php
namespace Salesfly\Salesfly\Managers;
class ContactManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombres'=> '',
            'email'=> '',
            'telefono'=> '',
            'descripcion'=> '',
            'glosa'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }}