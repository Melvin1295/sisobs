<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Slider;

class SliderRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Slider;
    }

    public function search($q)
    {
        $menus =Slider::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $menus;
    }
    public function slidersall($q)
    {
        $menus =Slider::get();
        return $menus;
    }
    
} 