<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class ReporteMedicamento extends \Eloquent {

    protected $table = 'reporte_mediamentos';
    
    protected $fillable = [ 
                    'mes',
                    'descripcion',
                    'glosa',
                    'estado',
                    'user_id'
                    ];
     public function usuario(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\User','user_id');
    }
}