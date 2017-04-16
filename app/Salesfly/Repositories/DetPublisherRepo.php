<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\DetPublisher;

class DetPublisherRepo extends BaseRepo{
    
    public function getModel()
    {
        return new DetPublisher;
    }

    public function search($q)
    {
        $detPublisherRepo =DetPublisher::where('titulo','like', $q.'%')
                    ->paginate(15);
        return $detPublisherRepo;
    }
    public function searchUltimo()
    {
        $publisher =DetPublisher::where('estado',1)
                    ->with('autor')
                    ->orderBy('fecha_publicacion','desc')
                    ->first();
        return $publisher;
    }
    public function publishers_all()
    {
        $publisher =DetPublisher::join("employees","employees.id","=","det_publishers.employee_id")
                     ->select(\DB::raw("det_publishers.id,det_publishers.titulo,det_publishers.descripcion_corta,
                                employees.imagen as imagenEmployee,det_publishers.imagen,det_publishers.descripcion,
                                CONCAT((SUBSTRING(det_publishers.fecha_publicacion,9,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,6,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,1,4)))as fecha,SUBSTRING(det_publishers.fecha_publicacion,9,2) as dia,
                                SUBSTRING(det_publishers.fecha_publicacion,6,2) as mes"))
                    ->where('det_publishers.estado',1)
                    ->orderBy('det_publishers.fecha_publicacion','desc')
                    ->paginate(5);
        return $publisher;
    }
    public function publisher_id($id)
    {
        $publisher =DetPublisher::join("employees","employees.id","=","det_publishers.employee_id")
                     ->select(\DB::raw("det_publishers.id,employees.nombres,employees.apellidos,det_publishers.titulo,det_publishers.descripcion_corta,
                                employees.imagen as imagenEmployee,det_publishers.imagen,
                                CONCAT((SUBSTRING(det_publishers.fecha_publicacion,9,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,6,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,1,4)))as fecha,SUBSTRING(det_publishers.fecha_publicacion,9,2) as dia,
                                SUBSTRING(det_publishers.fecha_publicacion,6,2) as mes,SUBSTRING(det_publishers.fecha_publicacion,12,5) as hora,
                                det_publishers.descripcion,det_publishers.archivo_adjunto"))
                    ->where('det_publishers.estado',1)
                    ->orderBy('det_publishers.fecha_publicacion','desc')
                    ->where('det_publishers.id',$id)
                    ->first();
        return $publisher;
    }
    public function getPublisher()
    {
        $publisher =DetPublisher::join("employees","employees.id","=","det_publishers.employee_id")
                     ->select(\DB::raw("det_publishers.id,employees.nombres,employees.apellidos,det_publishers.titulo,det_publishers.descripcion_corta,
                                employees.imagen as imagenEmployee,det_publishers.imagen,
                                CONCAT((SUBSTRING(det_publishers.fecha_publicacion,9,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,6,2)),'/',
                                (SUBSTRING(det_publishers.fecha_publicacion,1,4)))as fecha,SUBSTRING(det_publishers.fecha_publicacion,9,2) as dia,
                                SUBSTRING(det_publishers.fecha_publicacion,6,2) as mes,SUBSTRING(det_publishers.fecha_publicacion,12,5) as hora,
                                det_publishers.descripcion,det_publishers.archivo_adjunto"))
                    ->where('det_publishers.estado',1)
                    ->orderBy('det_publishers.fecha_publicacion','desc')
                    ->limit(3)
                    ->get();
        return $publisher;
    }
    
} 