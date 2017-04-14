<?php
namespace Salesfly\Salesfly\Managers;
class SliderManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombre'=> '',
            'imagen'=> '',
            'glosa'=> '',
            'estado'=> '',
            'orden'=>''
                  ];
        return $rules;
    }}