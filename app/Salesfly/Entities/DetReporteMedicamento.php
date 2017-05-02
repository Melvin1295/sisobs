<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class DetReporteMedicamento extends \Eloquent {

    protected $table = 'det_reporte_mediamentos';
    
    protected $fillable = [ 
                    'descripcion',
                    'glosa',
                    'estado',
                    'reporte_mediamento_id',
                    'medicamento_id'
                    ];
}