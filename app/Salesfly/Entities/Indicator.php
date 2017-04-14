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
                    'fecha_publicacion',
                    'fuente',
                    'estado',
                    'province_id'
                    ];
                    public function province(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Province','province_id');
        }
} 