<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Publisher extends \Eloquent {

    protected $table = 'publishers';
    
    protected $fillable = [ 
                    'titulo',
                    'fecha_publicacion',
                    'tipo',
                    'archivo_adjunto',
                    'estado',
                    'usuario_id',
                    'categoria'
                    ];
                    public function province(){
            return $this->belongsTo('Salesfly\Salesfly\Entities\Province','province_id');
        }
}