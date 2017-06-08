<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class DetReclamosTipoQueja extends \Eloquent {

    protected $table = 'det_reclamos_tipo_quejas';
    
    protected $fillable = [ 
                    'glosa',
                    'estado',
                    'tipo_queja_id',
                    'reclamo_id'
                    ];
    public function tipoQuejaDescripcion(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\TipoQueja','tipo_queja_id');
        }
}