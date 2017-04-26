<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Contact;

class ContactRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Contact;
    }

    public function search($q)
    {
        $menus =Contact::where('titulo','like', $q.'%')
                    ->paginate(15);
        return $menus;
    }
    
} 