<?php
namespace Salesfly\Salesfly\Entities;

class User extends \Eloquent {

	protected $table = 'users';
    
    protected $fillable = ['name',
    'email','password','store_id','estado','image','ubigeo_id','role_id'];
    public function ubigeo(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\Ubigeo','ubigeo_id','role_id');
    }
}