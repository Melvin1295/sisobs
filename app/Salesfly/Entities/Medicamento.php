<?php
namespace Salesfly\Salesfly\Entities;

class Medicamento extends \Eloquent {

	protected $table = 'medicamentos';
    
    protected $fillable = ['descripcion',
    						'glosa',
    						'tipo_medicamento_id',
    						'estado'
    						];
    public function tipomedicamento(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\TipoMedicamento','tipo_medicamento_id');
        }
}