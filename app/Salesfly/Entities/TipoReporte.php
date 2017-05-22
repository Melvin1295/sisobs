<?php
namespace Salesfly\Salesfly\Entities;

class TipoReporte extends \Eloquent {

	protected $table = 'tipos_reporte';
    
    protected $fillable = ['descripcion',
    						'glosa',
    						'estado'
    						]; 
}