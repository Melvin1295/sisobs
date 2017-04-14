<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Author;

class AuthorRepo extends BaseRepo{
    public function getModel()
    {
        return new Author;
    }

    public function search($q)
    {
        $authors =Author::where('nombres','like', $q.'%')
                    ->orWhere('apellidos','like',$q.'%')
                    //->with(['customer','authors'])
                    ->paginate(15);
        return $authors;
    }
    public function searchall($q)
    {
        $authors =Author::select(\DB::raw('id,nombres,apellidos,estado,codigo,CONCAT(nombres,"-",apellidos) as busqueda'))
                    ->paginate(30);
        return $authors;
    }

    function validateDate($date, $format = 'Y-m-d')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
} 