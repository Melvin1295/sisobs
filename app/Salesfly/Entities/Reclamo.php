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
    						'ubigeo_id'
    						];
        public function ubigeo(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Ubigeo','ubigeo_id');
        }
        public function quejas(){
            return $this->hasMany('Salesfly\Salesfly\Entities\DetReclamosTipoQueja');
        }
}