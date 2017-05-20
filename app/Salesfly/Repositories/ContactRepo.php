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
        $contacto =Contact::where('titulo','like', $q.'%')
                    
                    ->orderBy('id','desc')
                    ->paginate(15);
        return $contacto;
    }

    public function paginaterepo($c){
         $contacto =Contact::orderBy('id','desc')
                    ->paginate($c);

        return $contacto;
    }
    
} 