<?php
namespace Salesfly\Salesfly\Managers;
class RolManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'name'=> '',
            'shortname'=> '',
            'descripcion'=> ''
                  ];
        return $rules;
    }}