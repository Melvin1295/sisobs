<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class DetPublisher extends \Eloquent {

    protected $table = 'det_publishers';
    
    protected $fillable = [ 
                    'titulo',
                    'descripcion',
                    'descripcion_corta',
                    'archivo_adjunto',
                    'imagen',
                    'orden',
                    'autor_id',
                    'publisher_id',
                    'estado'
                    ];
}