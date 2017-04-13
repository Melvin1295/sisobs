<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Editorial extends \Eloquent {

    protected $table = 'editorials';
    
    protected $fillable = [ 
                    'nombre',
                    'anio',
                    'descripcion_corta',
                    'descripcion',
                    'titulo_descripcion',
                    'archivo_adjunto',
                    'estado',
                    'fecha_publicacion',
                    'usuario_id'
                    ];
}