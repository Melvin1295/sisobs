<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Province extends \Eloquent {

    protected $table = 'provinces';
    
    protected $fillable = [ 
                    'nombre',
                    'descripcion',
                    'codigo',
                    'pais',
                    'estado'
                    ];
}