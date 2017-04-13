<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Menu extends \Eloquent {

    protected $table = 'menus';
    
    protected $fillable = [ 
                    'titulo',
                    'descripcion',
                    'estado'
                    ];
}