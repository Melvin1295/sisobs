<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Departament extends \Eloquent {

    protected $table = 'departaments';
    
    protected $fillable = [ 
                    'nombre',
                    'descripcion',
                    'pais'
                    ];
}