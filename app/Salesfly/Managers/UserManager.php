<?php

namespace Salesfly\Salesfly\Managers;
class UserManager extends BaseManager {

    public function getRules()
    {
        $rules = ['name'=> 'required',
    'email'=> 'required','password'=> '','estado'=> 'required','image'=> 'required',
            'ubigeo_id' => '' , 'role_id' => ''];
        return $rules;
    }
} 
