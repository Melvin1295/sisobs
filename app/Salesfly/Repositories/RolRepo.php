<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Rol;

class RolRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Rol;
    }

    
    public function roles_all()
    {
        $roles =Rol::get();
        return $roles;
    }
    
} 