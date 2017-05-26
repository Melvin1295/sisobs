<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Distrit extends \Eloquent {

    protected $table = 'distrits';
    
    protected $fillable = [ 
                    'nombre',
                    'descripcion',
                    'province_id'
                    ];
}