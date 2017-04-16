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
                    'employee_id',
                    'fecha_publicacion',
                    'estado',
                    'categoria'
                    ];
                    public function autor(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Author','employee_id');
        }
} 