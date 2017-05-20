<?php
namespace Salesfly\Salesfly\Entities;

class Contact extends \Eloquent {

	protected $table = 'contacts';
    
    protected $fillable = ['nombres',
    						'email',
    						'telefono',
    						'descripcion',
    						'glosa',
    						'estado'
    						];
}