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
    public function searchUltimo()
    {
        $publisher =DetPublisher::where('estado',1)
                    ->with('autor')
                    ->orderBy('fecha_publicacion','desc')
                    ->first();
        return $publisher;
    }
    public function publishers_all()
    {
        $publisher =DetPublisher::where('estado',1)
                    ->with('autor')
                    ->paginate(15);
        return $publisher;
    }
    
} 