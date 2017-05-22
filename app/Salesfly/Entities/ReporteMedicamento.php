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
                    'tipo_reporte_id'
                    ];
     public function usuario(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\User','user_id');
    }
    public function det_medicamentos(){
            return $this->hasMany('Salesfly\Salesfly\Entities\DetReporteMedicamento');
        }
}