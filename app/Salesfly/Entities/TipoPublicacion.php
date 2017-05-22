<?php
namespace Salesfly\Salesfly\Entities;

class TipoPublicacion extends \Eloquent {

	protected $table = 'tipo_publicacion';
    
    protected $fillable = ['descripcion',
    						'glosa',
    						'estado'
    						];
}