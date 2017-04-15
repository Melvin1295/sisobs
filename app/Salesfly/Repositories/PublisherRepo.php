<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Publisher;

class PublisherRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Publisher;
    }

    public function search($q)
    {
        $publisher =Publisher::where('titulo','like', $q.'%')
                    ->paginate(15);
        return $publisher;
    }
    
    
} 