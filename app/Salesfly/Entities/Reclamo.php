<?php
namespace Salesfly\Salesfly\Entities;

class Reclamo extends \Eloquent {

	protected $table = 'reclamos';
    
    protected $fillable = ['nombres',
    						'correo',
    						'telefono',
    						'establecimiento',
    						'descripcion_reclamo',
    						'estado',
    						'flag1',
    						'flag2',
    						'flag3',
    						'flag4',
    						'ubigeo_id'
    						];
        public function ubigeo(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Ubigeo','ubigeo_id');
        }
}