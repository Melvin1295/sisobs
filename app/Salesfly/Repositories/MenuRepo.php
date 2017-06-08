<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Menu;

class MenuRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Menu;
    }

    public function search($q)
    {
        $menus =Menu::where('titulo','like', $q.'%')
                    ->paginate(15);
        return $menus;
    }
    public function searchall($q)
    {
        $tipo =Menu::get();
        return $tipo;
    }
    
} 