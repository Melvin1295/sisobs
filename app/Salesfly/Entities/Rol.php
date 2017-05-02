<?php
namespace Salesfly\Salesfly\Entities;

class Rol extends \Eloquent {

	protected $table = 'roles';
    
    protected $fillable = ['name',
    						'shortname',
    						'descripcion'
    						];
}