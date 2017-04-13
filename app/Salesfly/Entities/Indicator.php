<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Indicator extends \Eloquent {

    protected $table = 'indicators';
    
    protected $fillable = [ 
                    'titulo',
                    'descripcion',
                    'descripcion_corta',
                    'archivo_adjunto',
                    'funete',
                    'estado',
                    'province_id'
                    ];
}