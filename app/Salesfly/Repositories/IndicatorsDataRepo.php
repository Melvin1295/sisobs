<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\IndicatorsData;

class IndicatorsDataRepo extends BaseRepo{
    
    public function getModel()
    {
        return new IndicatorsData;
    }

    public function search($q)
    {
        $indicators =IndicatorsData::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $indicators;
    }
    public function searchall($q)
    {
        $indicators =IndicatorsData::paginate(30);
        return $indicators;
    }
    public function searchByIndicator($indicador)
    {
        $indicators =IndicatorsData::select(\DB::raw("descripcion,numero,fuente,
            `2000` as N2000,
            `2001` as N2001,
            `2002` as N2002,
            `2003` as N2003,
            `2004` as N2004,
            `2005` as N2005,
            `2006` as N2006,
            `2007` as N2007,
            `2008` as N2008,
            `2009` as N2009,
            `2010` as N2010,
            `2011` as N2011,
            `2012` as N2012,
            `2013` as N2013,
            `2014` as N2014,
            `2015` as N2015,
            `2016` as N2016,
            `2017` as N2017,
            `2018` as N2018,
            (select sum(`2000`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2000
            ,(select sum(`2001`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2001
            ,(select sum(`2002`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2002
            ,(select sum(`2003`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2003
            ,(select sum(`2004`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2004
            ,(select sum(`2005`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2005
            ,(select sum(`2006`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2006
            ,(select sum(`2007`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2007
            ,(select sum(`2008`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2008
            ,(select sum(`2009`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2009
            ,(select sum(`2010`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2010
            ,(select sum(`2011`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2011
            ,(select sum(`2012`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2012
            ,(select sum(`2013`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2013
            ,(select sum(`2014`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2014
            ,(select sum(`2015`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2015
            ,(select sum(`2016`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2016
            ,(select sum(`2017`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2017
            ,(select sum(`2018`) from indicatorsData where indicator_id=".$indicador." and numero=0) s2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',0)
        ->get();
        return $indicators;
    }
    public function searchByDepartament($indicador,$dep_id)
    {
        $indicators =IndicatorsData::select(\DB::raw("descripcion,numero,fuente,
            `2000` as N2000,
            `2001` as N2001,
            `2002` as N2002,
            `2003` as N2003,
            `2004` as N2004,
            `2005` as N2005,
            `2006` as N2006,
            `2007` as N2007,
            `2008` as N2008,
            `2009` as N2009,
            `2010` as N2010,
            `2011` as N2011,
            `2012` as N2012,
            `2013` as N2013,
            `2014` as N2014,
            `2015` as N2015,
            `2016` as N2016,
            `2017` as N2017,
            `2018` as N2018,
            (select sum(`2000`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2000
            ,(select sum(`2001`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2001
            ,(select sum(`2002`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2002
            ,(select sum(`2003`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2003
            ,(select sum(`2004`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2004
            ,(select sum(`2005`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2005
            ,(select sum(`2006`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2006
            ,(select sum(`2007`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2007
            ,(select sum(`2008`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2008
            ,(select sum(`2009`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2009
            ,(select sum(`2010`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2010
            ,(select sum(`2011`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2011
            ,(select sum(`2012`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2012
            ,(select sum(`2013`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2013
            ,(select sum(`2014`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2014
            ,(select sum(`2015`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2015
            ,(select sum(`2016`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2016
            ,(select sum(`2017`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2017
            ,(select sum(`2018`) from indicatorsData where indicator_id=".$indicador." and numero=1 and departament_id=".$dep_id.") s2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',1)
        ->where('departament_id',$dep_id)
        ->get();
        return $indicators;
    }
    public function searchByProvincia($indicador,$dep_id)
    {
        $indicators =IndicatorsData::select(\DB::raw("descripcion,numero,fuente,
            `2000` as N2000,
            `2001` as N2001,
            `2002` as N2002,
            `2003` as N2003,
            `2004` as N2004,
            `2005` as N2005,
            `2006` as N2006,
            `2007` as N2007,
            `2008` as N2008,
            `2009` as N2009,
            `2010` as N2010,
            `2011` as N2011,
            `2012` as N2012,
            `2013` as N2013,
            `2014` as N2014,
            `2015` as N2015,
            `2016` as N2016,
            `2017` as N2017,
            `2018` as N2018,
            (select sum(`2000`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2000
            ,(select sum(`2001`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2001
            ,(select sum(`2002`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2002
            ,(select sum(`2003`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2003
            ,(select sum(`2004`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2004
            ,(select sum(`2005`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2005
            ,(select sum(`2006`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2006
            ,(select sum(`2007`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2007
            ,(select sum(`2008`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2008
            ,(select sum(`2009`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2009
            ,(select sum(`2010`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2010
            ,(select sum(`2011`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2011
            ,(select sum(`2012`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2012
            ,(select sum(`2013`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2013
            ,(select sum(`2014`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2014
            ,(select sum(`2015`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2015
            ,(select sum(`2016`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2016
            ,(select sum(`2017`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2017
            ,(select sum(`2018`) from indicatorsData where indicator_id=".$indicador." and numero=2 and province_id=".$dep_id.") s2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',2)
        ->where('province_id',$dep_id)
        ->get();
        return $indicators;
    }
    public function searchByDistrito($indicador,$dep_id)
    {
        $indicators =IndicatorsData::select(\DB::raw("descripcion,numero,fuente,
            `2000` as N2000,
            `2001` as N2001,
            `2002` as N2002,
            `2003` as N2003,
            `2004` as N2004,
            `2005` as N2005,
            `2006` as N2006,
            `2007` as N2007,
            `2008` as N2008,
            `2009` as N2009,
            `2010` as N2010,
            `2011` as N2011,
            `2012` as N2012,
            `2013` as N2013,
            `2014` as N2014,
            `2015` as N2015,
            `2016` as N2016,
            `2017` as N2017,
            `2018` as N2018,
            (select sum(`2000`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2000
            ,(select sum(`2001`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2001
            ,(select sum(`2002`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2002
            ,(select sum(`2003`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2003
            ,(select sum(`2004`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2004
            ,(select sum(`2005`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2005
            ,(select sum(`2006`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2006
            ,(select sum(`2007`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2007
            ,(select sum(`2008`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2008
            ,(select sum(`2009`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2009
            ,(select sum(`2010`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2010
            ,(select sum(`2011`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2011
            ,(select sum(`2012`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2012
            ,(select sum(`2013`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2013
            ,(select sum(`2014`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2014
            ,(select sum(`2015`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2015
            ,(select sum(`2016`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2016
            ,(select sum(`2017`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2017
            ,(select sum(`2018`) from indicatorsData where indicator_id=".$indicador." and numero=3 and distrit_id=".$dep_id.") s2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',3)
        ->where('distrit_id',$dep_id)
        ->get();
        return $indicators;
    }
    public function excelsDataInidcador($indicador){
        $indicators =IndicatorsData::select(\DB::raw("descripcion as Descripcion,numero as Tipo,Fuente,
            `2000` as I2000,
            `2001` as I2001,
            `2002` as I2002,
            `2003` as I2003,
            `2004` as I2004,
            `2005` as I2005,
            `2006` as I2006,
            `2007` as I2007,
            `2008` as I2008,
            `2009` as I2009,
            `2010` as I2010,
            `2011` as I2011,
            `2012` as I2012,
            `2013` as I2013,
            `2014` as I2014,
            `2015` as I2015,
            `2016` as I2016,
            `2017` as I2017,
            `2018` as I2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',0)
        ->get();
        return $indicators;    
    }
     public function excelsDataInidcadorD($dep_id,$indicador){
        $indicators =IndicatorsData::select(\DB::raw("descripcion as Descripcion,numero as Tipo,Fuente,
            `2000` as I2000,
            `2001` as I2001,
            `2002` as I2002,
            `2003` as I2003,
            `2004` as I2004,
            `2005` as I2005,
            `2006` as I2006,
            `2007` as I2007,
            `2008` as I2008,
            `2009` as I2009,
            `2010` as I2010,
            `2011` as I2011,
            `2012` as I2012,
            `2013` as I2013,
            `2014` as I2014,
            `2015` as I2015,
            `2016` as I2016,
            `2017` as I2017,
            `2018` as I2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',1)
        ->where('departament_id',$dep_id)
        ->get();
        return $indicators;    
    }
     public function excelsDataInidcadorP($dep_id,$indicador){
        $indicators =IndicatorsData::select(\DB::raw("descripcion as Descripcion,numero as Tipo,Fuente,
            `2000` as I2000,
            `2001` as I2001,
            `2002` as I2002,
            `2003` as I2003,
            `2004` as I2004,
            `2005` as I2005,
            `2006` as I2006,
            `2007` as I2007,
            `2008` as I2008,
            `2009` as I2009,
            `2010` as I2010,
            `2011` as I2011,
            `2012` as I2012,
            `2013` as I2013,
            `2014` as I2014,
            `2015` as I2015,
            `2016` as I2016,
            `2017` as I2017,
            `2018` as I2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',2)
        ->where('province_id',$dep_id)
        ->get();
        return $indicators;    
    }
    public function excelsDataInidcadorZ($dep_id,$indicador){
        $indicators =IndicatorsData::select(\DB::raw("descripcion as Descripcion,numero as Tipo,Fuente,
            `2000` as I2000,
            `2001` as I2001,
            `2002` as I2002,
            `2003` as I2003,
            `2004` as I2004,
            `2005` as I2005,
            `2006` as I2006,
            `2007` as I2007,
            `2008` as I2008,
            `2009` as I2009,
            `2010` as I2010,
            `2011` as I2011,
            `2012` as I2012,
            `2013` as I2013,
            `2014` as I2014,
            `2015` as I2015,
            `2016` as I2016,
            `2017` as I2017,
            `2018` as I2018"))
        ->where('indicator_id',$indicador)
        ->where('numero',3)
        ->where('distrit_id',$dep_id)
        ->get();
        return $indicators;    
    }
    //ultimos Cambios 
    public function indicadoresCargados(){
        $indicators =IndicatorsData::join("indicators","indicators.id","=","indicatorsData.indicator_id")
                                    ->leftjoin("departaments","departaments.id","=","indicatorsData.departament_id")
                                    ->leftjoin("provinces","provinces.id","=","indicatorsData.province_id")
                                    ->leftjoin("distrits","distrits.id","=","indicatorsData.distrit_id")
        ->select(\DB::raw("indicatorsData.numero,
                            departaments.id as idDep,
                            provinces.id as idPro,
                            distrits.id as idDist,
                            indicators.id as indicator_id,
                          indicatorsData.descripcion,indicators.titulo, 
                          if(indicatorsData.numero=0 , 'Global' , if(indicatorsData.numero=1 ,departaments.nombre,
                          if(indicatorsData.numero=2,provinces.nombre, distrits.nombre))) as  indicador,
                          if(indicatorsData.numero=0 , 'Indicador Global' , if(indicatorsData.numero=1 ,'Indicador por departamento',
                          if(indicatorsData.numero=2,    'Indicador por Provincia','Indicador por Distrito'))) as  tipoIndicador,
                          indicatorsData.created_at"))
        ->groupBy('indicatorsData.numero')
        ->groupBy('indicators.id')
        ->groupBy('indicatorsData.created_at')
        ->groupBy('indicatorsData.departament_id')
        ->groupBy('indicatorsData.province_id')
        ->groupBy('indicatorsData.distrit_id')
        ->get();
        return  $indicators;
    }
} 