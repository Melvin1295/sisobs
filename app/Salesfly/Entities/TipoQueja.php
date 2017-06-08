<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class TipoQueja extends \Eloquent {

    protected $table = 'tipo_quejas';
    
    protected $fillable = [ 
                    'descripcion',
                    'anio',
                    'glosa',
                    'numero',
                    'estado'
                    ];
    
}