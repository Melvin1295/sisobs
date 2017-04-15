<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\DetPublisher;

class DetPublisherRepo extends BaseRepo{
    
    public function getModel()
    {
        return new DetPublisher;
    }

    public function search($q)
    {
        $detPublisherRepo =DetPublisher::where('titulo','like', $q.'%')
                    ->paginate(15);
        return $detPublisherRepo;
    }
    
} 