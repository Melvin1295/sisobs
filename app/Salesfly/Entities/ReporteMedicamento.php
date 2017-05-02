<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class ReporteMedicamento extends \Eloquent {

    protected $table = 'reporte_mediamentos';
    
    protected $fillable = [ 
                    'mes',
                    'anio',
                    'tipo',
                    'descripcion',
                    'glosa',
                    'estado',
                    'user_id',
                    'medicamento_id'
                    ];
     public function usuario(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\User','user_id');
    }
    public function medicamento(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\Medicamento','medicamento_id');
    }
}