<?php
namespace Salesfly\Salesfly\Entities;

class Colaborador extends \Eloquent {

	protected $table = 'colaboradores';
    
    protected $fillable = ['nombres',
    						'apellidos',
    						'imagen',
    						'cargo',
    						'descripcion',
    						'estado'
    						];
}