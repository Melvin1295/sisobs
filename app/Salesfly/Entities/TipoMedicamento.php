<?php
namespace Salesfly\Salesfly\Entities;

class TipoMedicamento extends \Eloquent {

	protected $table = 'tipos_medicamentos';
    
    protected $fillable = ['descripcion',
    						'glosa',
    						'estado'
    						];
}