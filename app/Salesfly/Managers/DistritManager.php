<?php
namespace Salesfly\Salesfly\Managers;
class DistritManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombre'=> '',
            'descripcion'=> '',
            'province_id'=>''
                  ];
        return $rules;
    }
}