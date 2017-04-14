<?php
namespace Salesfly\Salesfly\Managers;
class MenuManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'titulo'=> '',
            'descripcion'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }}