<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Slider extends \Eloquent {

    protected $table = 'sliders';
    
    protected $fillable = [ 
                    'nombre',
                    'imagen',
                    'glosa',
                    'estado',
                    'orden'
                    ];
}