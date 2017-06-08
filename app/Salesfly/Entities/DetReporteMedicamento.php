<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class DetReporteMedicamento extends \Eloquent {

    protected $table = 'det_reporte_medicamentos';
    
    protected $fillable = [ 
                    'glosa',
                    'estado',
                    'reporte_medicamento_id',
                    'medicamento_id'
                    ];

                    public function medicamento(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Medicamento','medicamento_id');
        }
} 