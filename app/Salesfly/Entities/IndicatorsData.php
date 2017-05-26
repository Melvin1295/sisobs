<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class IndicatorsData extends \Eloquent {

    protected $table = 'indicatorsData';
    
    protected $fillable = [ 
                    'descripcion',
                    '2000',
                    '2001',
                    '2002',
                    '2003',
                    '2004',
                    '2005',
                    '2006',
                    '2007',
                    '2008',
                    '2009',
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    'numero',
                    'departament_id',
                    'province_id',
                    'distrit_id',
                    'indicator_id'
                    ];
}