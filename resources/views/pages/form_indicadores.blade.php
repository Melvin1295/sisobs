<style>
.vertical-menu {
}
.vertical-menu a {
    background-color: #DDD2D2;
    color: #777;
    display: block;
    padding: 12px;
    text-decoration: none;
}
.vertical-menu a:hover {
    background-color: #CB2027;
    color: #ffffff;
}
.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
.drop_menu {
background:#CB2027;
padding:0;
margin:0;
list-style-type:none;
height:30px;
}
.drop_menu li { float:left; }
.drop_menu li a {
padding:9px 20px;
display:block;
color:#fff;
text-decoration:none;
font:12px arial, verdana, sans-serif;
}

.drop_menu ul {
position:absolute;
left:-9999px;
top:-9999px;
list-style-type:none;
}
.drop_menu li:hover { position:relative; background:#686C68; }
.drop_menu li:hover ul {
left:0px;
top:30px;
background:#686C68;
padding:0px;
}
.activemenuNuevo{
  background:#686C68;
}
.drop_menu li:hover ul li a {
padding:5px;
display:block;
width:168px;
text-indent:15px;
background-color:#686C68;
}
.drop_menu li:hover ul li a:hover { background:#005555; }
</style>
   <section class="content-header">
         <div class="drop">
<ul class="drop_menu">
<li class="@{{submenu1}}" style="margin-left:6%;"><a href='#' ng-click="cambiarSumenu(1)">Inidcadores Globales</a>
<!--<ul>
<li><a href='#'>Indicadores Departamento</a></li>
<li><a href='#'>Indicadores Provincia</a></li>
<li><a href='#'>Indicadores Distrito</a></li>
</ul>-->
</li>
<li class="@{{submenu2}}"><a href='#'  ng-click="cambiarSumenu(2)">Indicadores Departamento</a>
<!--<ul>
<li><a href='#'>Sub Link 1</a></li>
<li><a href='#'>Sub Link 2</a></li>
<li><a href='#'>Sub Link 3</a></li>
<li><a href='#'>Sub Link 4</a></li>
</ul>-->
</li>
<!--<li class="@{{submenu3}}"><a href='#'  ng-click="cambiarSumenu(3)">Indicadores Provincia</a></li>
<li class="@{{submenu4}}"><a href='#'  ng-click="cambiarSumenu(4)">Indicadores Distrito</a>-->
<!--<ul>
<li><a href='#'>Sub Link 1</a></li>
<li><a href='#'>Sub Link 2</a></li>
<li><a href='#'>Sub Link 3</a></li>
<li><a href='#'>Sub Link 4</a></li>
</ul>-->
</li>
</ul>
</div>

          
        </section>
<section class="content">
      <!-- ==========================
        BLOG - START
    =========================== --> 
    <section class="content-item grey" style="  margin-top: 0px;" id="blog-timeline">
        <div class="container">
            <div class="row">
                
                <!-- BLOG POSTS - START -->
                <div class="col-xs-4">
                    <div id="slideshow-links">                                   <!-- Nav tabs -->
                                    
                                    <div ng-if="bandera">
                                        <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li class="active"><a ><button ng-click="cambiarSumenu(2)" ng-if="list >= 2  " style="float: left;" class="fa fa-arrow-left btn btn-danger"></button><span></span>@{{submenud1}}</a></li>
                                       </ul>
                                    </div>
                                    
                                        
                                    
                    </div>
                
                <!-- BLOG POSTS - END -->
                
            <form name="filterForm">
                    <div ng-if="bandera">
                <div class="panel panel-default" style="padding-bottom: 10px;" ng-if="list == 0">
                   <input type="text" class="form-control"  ng-model="search" ng-keyup="searchIndicador(search)" placeholder="Buscar Indicador">
                  <div class="panel-body" style="max-height: 450px;  overflow-y: scroll;">                    
                    <div class="vertical-menu" ng-if="list == 0">
                            <a ng-repeat="row in indicadores" href="#" ng-click="verIndicador(row)" style="">@{{row.titulo}}</a>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" style="padding-bottom: 10px;" ng-if="list == 1">
                   <input type="text" class="form-control"  ng-model="search" ng-keyup="searchDepartament(search)" placeholder="Buscar Departamento">
                  <div class="panel-body" style="max-height: 450px;  overflow-y: scroll;">                    
                    <div class="vertical-menu" ng-if="list == 1">
                            <a ng-repeat="row in departaments" href="#" ng-click="verIndicadorD(row)" style="">
                            <i class="fa fa-word"></i> @{{row.nombre}}<button ng-click="cambiarSumenu1(3,row,1)" class="fa fa-external-link btn btn-danger" style="margin-left:2%;" aria-hidden="true"></button></a>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" style="padding-bottom: 10px;" ng-if="list == 2">
                   <input type="text" class="form-control"  ng-model="search" ng-keyup="searchProvincias(search)" placeholder="Buscar Provincia">
                  <div class="panel-body" style="max-height: 450px;  overflow-y: scroll;">                    
                    <div class="vertical-menu" ng-if="list == 2">
                            <a ng-repeat="row in provinces" href="#" ng-click="verIndicadorP(row)" style="">
                            <i class="fa fa-word"></i> @{{row.nombre}} <button ng-click="cambiarSumenu1(4,row,2)" class="fa fa-external-link btn btn-danger" style="margin-left:2%;" aria-hidden="true"></button></a>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" style="padding-bottom: 10px;" ng-if="list == 3">
                   <input type="text" class="form-control"  ng-model="search" ng-keyup="searchDistrit(search)" placeholder="Buscar Distrito">
                  <div class="panel-body" style="max-height: 450px;  overflow-y: scroll;">                    
                    <div class="vertical-menu" ng-if="list == 3">
                            <a ng-repeat="row in distrits" href="#" ng-click="verIndicadorZ(row)" style="">
                            <i class="fa fa-word"></i> @{{row.nombre}}</a>
                    </div>
                  </div>
                </div>

              <!---<div class="vertical-menu" ng-if="list == 2">
                        <a ng-repeat="row in provinces" href="#" ng-click="verIndicadorP(row)" style="">@{{row.nombre}}</a>
                </div>
                <div class="vertical-menu" ng-if="list == 3">
                        <a ng-repeat="row in distrits" href="#" ng-click="verIndicadorZ(row)" style="">@{{row.nombre}}</a>
                </div>-->
            </div>
            </form>
            <div ng-if="bandera1">
                <!--<div class="vertical-menu" ng-disabled="true">
                                          <a href="#" style="">vbn 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>-->
            </div>

                </div>
                <div class="col-xs-8" ng-if="list == 0">
                <div class="blog-post" >
                    <div class="row">
                        
                            
                            <h3><a ng-click="verDetalle(item)">@{{indicador.titulo}}</a></h3><hr>
                            <div class="date-xs"></div>
                            <p>@{{indicador.descripcion}}</p>
                            
                        </div>
                     
                    <div class="row">
                       <div class="col-xs-6">
                          <a ng-click="verIndicadorExcel(indicador.id)"><i class="fa fa-pencil"></i> Descargar Excel</a>
                       </div>
                       <div class="col-xs-6" style="text-aling:rigth;">
                          <i class="fa fa-pencil"></i> <b>Fuente: </b>@{{dataIndicadorGlobal[0].fuente}}
                       </div>
                    </div><br>
                     <div class="row">
                      <div class="box-body table-responsive no-padding">
                       <table class="table table-hover" style="margin-botton:-80px;">
                           <thead>
                               <tr >
                                   <th ng-if="dataIndicadorGlobal[0].numero != 0">No existen datos ...</th>
                                   <th ng-if="dataIndicadorGlobal[0].numero == 0">#</th>
                                   <th ng-if="dataIndicadorGlobal[0].numero == 0">Descripcion</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2000 > 0">2000</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2001 > 0">2001</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2002 > 0">2002</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2003 > 0">2003</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2004 > 0">2004</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2005 > 0">2005</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2006 > 0">2006</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2007 > 0">2007</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2008 > 0">2008</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2009 > 0">2009</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2010 > 0">2010</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2011 > 0">2011</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2012 > 0">2012</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2013 > 0">2013</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2014 > 0">2014</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2015 > 0">2015</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2016 > 0">2016</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2017 > 0">2017</th>
                                   <th ng-if="dataIndicadorGlobal[0].s2018 > 0">2018</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr ng-repeat="row in dataIndicadorGlobal">
                                   <td>@{{$index+1}}</td>
                                   <td>@{{row.descripcion}}</td>
                                   <td ng-if="row.s2000 > 0">@{{row.N2000}}</td>
                                   <td ng-if="row.s2001 > 0">@{{row.N2001}}</td>
                                   <td ng-if="row.s2002 > 0">@{{row.N2002}}</td>
                                   <td ng-if="row.s2003 > 0">@{{row.N2003}}</td>
                                   <td ng-if="row.s2004 > 0">@{{row.N2004}}</td>
                                   <td ng-if="row.s2005 > 0">@{{row.N2005}}</td>
                                   <td ng-if="row.s2006 > 0">@{{row.N2006}}</td>
                                   <td ng-if="row.s2007 > 0">@{{row.N2007}}</td>
                                   <td ng-if="row.s2008 > 0">@{{row.N2008}}</td>
                                   <td ng-if="row.s2009 > 0">@{{row.N2009}}</td>
                                   <td ng-if="row.s2010 > 0">@{{row.N2010}}</td>
                                   <td ng-if="row.s2011 > 0">@{{row.N2011}}</td>
                                   <td ng-if="row.s2012 > 0">@{{row.N2012}}</td>
                                   <td ng-if="row.s2013 > 0">@{{row.N2013}}</td>
                                   <td ng-if="row.s2014 > 0">@{{row.N2014}}</td>
                                   <td ng-if="row.s2015 > 0">@{{row.N2015}}</td>
                                   <td ng-if="row.s2016 > 0">@{{row.N2016}}</td>
                                   <td ng-if="row.s2017 > 0">@{{row.N2017}}</td>
                                   <td ng-if="row.s2018 > 0">@{{row.N2018}}</td>

                               </tr>
                               
                           </tbody>
                       </table>
                       </div>
                     </div>
                    </div>
                </div>
                <!-- SIDEBAR - START -->
                 <div class="col-xs-8" ng-if="list == 1">

                 <!--<div class="form-group"> 
                      <div class="input-group">
                          <div class="input-group-addon">@</div>
                          <input class="form-control" type="text">
                      </div>
                 </div>-->
                 <div class="row" style="margin-top: -42px; width:100%;  margin-bottom: 3px;">

                  <div class="col-xs-6">
                    <div class="form-group"> 
                      <div class="input-group" style="margin-bottom: -12px;">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                          <input class="form-control" ng-model="test.titulo" type="text">
                      </div>
                 </div></div>
                 </div>


                 <!--<div style="margin-top: -40px;  max-width: 40%;  float: right;">
                  <label>Buscar:</label>
                 <select class="form-control selectpicker"  >
                          <option value="0">Todos</option>
                          <option ng-repeat="row in indicadores" value="row.id">@{{row.titulo}}</option>
                 </select>
                 </div>-->
                <div class="blog-post" ng-repeat="item in indicadoresDataDep | filter:test"  >
                    <div class="row">
                        
                            
                            <h3><a ng-click="verDetalle(item)">@{{item.titulo}}</a></h3><hr>
                            <div class="date-xs"></div>
                            <p>@{{item.descripcion}}</p>
                            
                        </div>
                     
                    <div class="row">
                       <div class="col-xs-6">
                          <a ng-click="verIndicadorDExcel(item.id)"><i class="fa fa-pencil"></i> Descargar Excel</a>
                       </div>
                       <div class="col-xs-6" style="text-aling:rigth;">
                          <i class="fa fa-pencil"></i> <b>Fuente: </b>@{{item.datos[0].fuente}}
                       </div>
                    </div><br>
                     <div class="row">
                      <div class="box-body table-responsive no-padding">
                       <table class="table table-hover" style="margin-botton:-80px;">
                           <thead>
                               <tr >
                                   <th ng-if="item.datos[0].numero != 1">No existen datos ...</th>
                                   <th ng-if="item.datos[0].numero == 1">#</th>
                                   <th ng-if="item.datos[0].numero == 1">Descripcion</th>
                                   <th ng-if="item.datos[0].s2000 > 0">2000</th>
                                   <th ng-if="item.datos[0].s2001 > 0">2001</th>
                                   <th ng-if="item.datos[0].s2002 > 0">2002</th>
                                   <th ng-if="item.datos[0].s2003 > 0">2003</th>
                                   <th ng-if="item.datos[0].s2004 > 0">2004</th>
                                   <th ng-if="item.datos[0].s2005 > 0">2005</th>
                                   <th ng-if="item.datos[0].s2006 > 0">2006</th>
                                   <th ng-if="item.datos[0].s2007 > 0">2007</th>
                                   <th ng-if="item.datos[0].s2008 > 0">2008</th>
                                   <th ng-if="item.datos[0].s2009 > 0">2009</th>
                                   <th ng-if="item.datos[0].s2010 > 0">2010</th>
                                   <th ng-if="item.datos[0].s2011 > 0">2011</th>
                                   <th ng-if="item.datos[0].s2012 > 0">2012</th>
                                   <th ng-if="item.datos[0].s2013 > 0">2013</th>
                                   <th ng-if="item.datos[0].s2014 > 0">2014</th>
                                   <th ng-if="item.datos[0].s2015 > 0">2015</th>
                                   <th ng-if="item.datos[0].s2016 > 0">2016</th>
                                   <th ng-if="item.datos[0].s2017 > 0">2017</th>
                                   <th ng-if="item.datos[0].s2018 > 0">2018</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr ng-repeat="row in item.datos">
                                   <td>@{{$index+1}}</td>
                                   <td>@{{row.descripcion}}</td>
                                   <td ng-if="row.s2000 > 0">@{{row.N2000}}</td>
                                   <td ng-if="row.s2001 > 0">@{{row.N2001}}</td>
                                   <td ng-if="row.s2002 > 0">@{{row.N2002}}</td>
                                   <td ng-if="row.s2003 > 0">@{{row.N2003}}</td>
                                   <td ng-if="row.s2004 > 0">@{{row.N2004}}</td>
                                   <td ng-if="row.s2005 > 0">@{{row.N2005}}</td>
                                   <td ng-if="row.s2006 > 0">@{{row.N2006}}</td>
                                   <td ng-if="row.s2007 > 0">@{{row.N2007}}</td>
                                   <td ng-if="row.s2008 > 0">@{{row.N2008}}</td>
                                   <td ng-if="row.s2009 > 0">@{{row.N2009}}</td>
                                   <td ng-if="row.s2010 > 0">@{{row.N2010}}</td>
                                   <td ng-if="row.s2011 > 0">@{{row.N2011}}</td>
                                   <td ng-if="row.s2012 > 0">@{{row.N2012}}</td>
                                   <td ng-if="row.s2013 > 0">@{{row.N2013}}</td>
                                   <td ng-if="row.s2014 > 0">@{{row.N2014}}</td>
                                   <td ng-if="row.s2015 > 0">@{{row.N2015}}</td>
                                   <td ng-if="row.s2016 > 0">@{{row.N2016}}</td>
                                   <td ng-if="row.s2017 > 0">@{{row.N2017}}</td>
                                   <td ng-if="row.s2018 > 0">@{{row.N2018}}</td>

                               </tr>
                               
                           </tbody>
                       </table>
                       </div>
                     </div>
                    </div>
                    <div class="box-footer clearfix">
                  <pagination total-items="totalItems1" ng-model="currentPage1" max-size="maxSize" class="pagination-sm no-margin pull-right" items-per-page="itemsperPage1" boundary-links="true" rotate="false" num-pages="numPages" ng-change="pageChangedDep(currentPage1)"></pagination>
                </div></div>
                
                <!-- SIDEBAR - END -->
                <div class="col-xs-8" ng-if="list == 2">
                <div class="row" style="margin-top: -42px; width:100%;  margin-bottom: 3px;">
                  
                  <div class="col-xs-6">
                    <div class="form-group"> 
                      <div class="input-group" style="margin-bottom: -12px;">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                          <input class="form-control" ng-model="test1.titulo" type="text">
                      </div>
                 </div></div>
                 </div>

                <div class="blog-post" ng-repeat="item in indicadoresDataProv | filter:test1"  >
                    <div class="row">
                        
                            
                            <h3><a ng-click="verDetalle(item)">@{{item.titulo}}</a></h3><hr>
                            <div class="date-xs"></div>
                            <p>@{{item.descripcion}}</p>
                            
                        </div>
                     
                    <div class="row">
                       <div class="col-xs-6">
                         <a ng-click="verIndicadorPExcel(item.id)"><i class="fa fa-pencil"></i> Descargar Excel</a>
                       </div>
                       <div class="col-xs-6" style="text-aling:rigth;">
                          <i class="fa fa-pencil"></i> <b>Fuente: </b>@{{item.datos[0].fuente}}
                       </div>
                    </div><br>
                     <div class="row">
                      <div class="box-body table-responsive no-padding">
                       <table class="table table-hover" style="margin-botton:-80px;">
                           <thead>
                               <tr >
                                   <th ng-if="item.datos[0].numero != 2">No existen datos ...</th>
                                   <th ng-if="item.datos[0].numero == 2">#</th>
                                   <th ng-if="item.datos[0].numero == 2">Descripcion</th>
                                   <th ng-if="item.datos[0].s2000 > 0">2000</th>
                                   <th ng-if="item.datos[0].s2001 > 0">2001</th>
                                   <th ng-if="item.datos[0].s2002 > 0">2002</th>
                                   <th ng-if="item.datos[0].s2003 > 0">2003</th>
                                   <th ng-if="item.datos[0].s2004 > 0">2004</th>
                                   <th ng-if="item.datos[0].s2005 > 0">2005</th>
                                   <th ng-if="item.datos[0].s2006 > 0">2006</th>
                                   <th ng-if="item.datos[0].s2007 > 0">2007</th>
                                   <th ng-if="item.datos[0].s2008 > 0">2008</th>
                                   <th ng-if="item.datos[0].s2009 > 0">2009</th>
                                   <th ng-if="item.datos[0].s2010 > 0">2010</th>
                                   <th ng-if="item.datos[0].s2011 > 0">2011</th>
                                   <th ng-if="item.datos[0].s2012 > 0">2012</th>
                                   <th ng-if="item.datos[0].s2013 > 0">2013</th>
                                   <th ng-if="item.datos[0].s2014 > 0">2014</th>
                                   <th ng-if="item.datos[0].s2015 > 0">2015</th>
                                   <th ng-if="item.datos[0].s2016 > 0">2016</th>
                                   <th ng-if="item.datos[0].s2017 > 0">2017</th>
                                   <th ng-if="item.datos[0].s2018 > 0">2018</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr ng-repeat="row in item.datos">
                                   <td>@{{$index+1}}</td>
                                   <td>@{{row.descripcion}}</td>
                                   <td ng-if="row.s2000 > 0">@{{row.N2000}}</td>
                                   <td ng-if="row.s2001 > 0">@{{row.N2001}}</td>
                                   <td ng-if="row.s2002 > 0">@{{row.N2002}}</td>
                                   <td ng-if="row.s2003 > 0">@{{row.N2003}}</td>
                                   <td ng-if="row.s2004 > 0">@{{row.N2004}}</td>
                                   <td ng-if="row.s2005 > 0">@{{row.N2005}}</td>
                                   <td ng-if="row.s2006 > 0">@{{row.N2006}}</td>
                                   <td ng-if="row.s2007 > 0">@{{row.N2007}}</td>
                                   <td ng-if="row.s2008 > 0">@{{row.N2008}}</td>
                                   <td ng-if="row.s2009 > 0">@{{row.N2009}}</td>
                                   <td ng-if="row.s2010 > 0">@{{row.N2010}}</td>
                                   <td ng-if="row.s2011 > 0">@{{row.N2011}}</td>
                                   <td ng-if="row.s2012 > 0">@{{row.N2012}}</td>
                                   <td ng-if="row.s2013 > 0">@{{row.N2013}}</td>
                                   <td ng-if="row.s2014 > 0">@{{row.N2014}}</td>
                                   <td ng-if="row.s2015 > 0">@{{row.N2015}}</td>
                                   <td ng-if="row.s2016 > 0">@{{row.N2016}}</td>
                                   <td ng-if="row.s2017 > 0">@{{row.N2017}}</td>
                                   <td ng-if="row.s2018 > 0">@{{row.N2018}}</td>

                               </tr>
                               
                           </tbody>
                       </table>
                       </div>
                     </div>
                    </div>
                    <pagination total-items="totalItems1" ng-model="currentPage1" max-size="maxSize" class="pagination-sm no-margin pull-right" items-per-page="itemsperPage1" boundary-links="true" rotate="false" num-pages="numPages" ng-change="pageChangedProv(currentPage1)"></pagination>
                </div>
                <!-- SIDEBAR - END -->
                <div class="col-xs-8" ng-if="list == 3">
                <div class="row" style="margin-top: -42px; width:100%;  margin-bottom: 3px;">
                  
                  <div class="col-xs-6">
                    <div class="form-group"> 
                      <div class="input-group" style="margin-bottom: -12px;">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                          <input class="form-control" ng-model="test2.titulo" type="text">
                      </div>
                 </div></div>
                 </div>
                <div class="blog-post" ng-repeat="item in indicadoresDataDist | filter:test2"  >
                    <div class="row">
                        
                            
                            <h3><a ng-click="verDetalle(item)">@{{item.titulo}}</a></h3><hr>
                            <div class="date-xs"></div>
                            <p>@{{item.descripcion}}</p>
                            
                        </div>
                     
                    <div class="row">
                       <div class="col-xs-6">
                          <a ng-click="verIndicadorZExcel(item.id)"><i class="fa fa-pencil"></i> Descargar Excel</a>
                       </div>
                       <div class="col-xs-6" style="text-aling:rigth;">
                          <i class="fa fa-pencil"></i> <b>Fuente: </b>@{{item.datos[0].fuente}}
                       </div>
                    </div><br>
                     <div class="row">
                      <div class="box-body table-responsive no-padding">
                       <table class="table table-hover" style="margin-botton:-80px;">
                           <thead>
                               <tr >
                                   <th ng-if="item.datos[0].numero != 3">No existen datos ...</th>
                                   <th ng-if="item.datos[0].numero == 3">#</th>
                                   <th ng-if="item.datos[0].numero == 3">Descripcion</th>
                                   <th ng-if="item.datos[0].s2000 > 0">2000</th>
                                   <th ng-if="item.datos[0].s2001 > 0">2001</th>
                                   <th ng-if="item.datos[0].s2002 > 0">2002</th>
                                   <th ng-if="item.datos[0].s2003 > 0">2003</th>
                                   <th ng-if="item.datos[0].s2004 > 0">2004</th>
                                   <th ng-if="item.datos[0].s2005 > 0">2005</th>
                                   <th ng-if="item.datos[0].s2006 > 0">2006</th>
                                   <th ng-if="item.datos[0].s2007 > 0">2007</th>
                                   <th ng-if="item.datos[0].s2008 > 0">2008</th>
                                   <th ng-if="item.datos[0].s2009 > 0">2009</th>
                                   <th ng-if="item.datos[0].s2010 > 0">2010</th>
                                   <th ng-if="item.datos[0].s2011 > 0">2011</th>
                                   <th ng-if="item.datos[0].s2012 > 0">2012</th>
                                   <th ng-if="item.datos[0].s2013 > 0">2013</th>
                                   <th ng-if="item.datos[0].s2014 > 0">2014</th>
                                   <th ng-if="item.datos[0].s2015 > 0">2015</th>
                                   <th ng-if="item.datos[0].s2016 > 0">2016</th>
                                   <th ng-if="item.datos[0].s2017 > 0">2017</th>
                                   <th ng-if="item.datos[0].s2018 > 0">2018</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr ng-repeat="row in item.datos">
                                   <td>@{{$index+1}}</td>
                                   <td>@{{row.descripcion}}</td>
                                   <td ng-if="row.s2000 > 0">@{{row.N2000}}</td>
                                   <td ng-if="row.s2001 > 0">@{{row.N2001}}</td>
                                   <td ng-if="row.s2002 > 0">@{{row.N2002}}</td>
                                   <td ng-if="row.s2003 > 0">@{{row.N2003}}</td>
                                   <td ng-if="row.s2004 > 0">@{{row.N2004}}</td>
                                   <td ng-if="row.s2005 > 0">@{{row.N2005}}</td>
                                   <td ng-if="row.s2006 > 0">@{{row.N2006}}</td>
                                   <td ng-if="row.s2007 > 0">@{{row.N2007}}</td>
                                   <td ng-if="row.s2008 > 0">@{{row.N2008}}</td>
                                   <td ng-if="row.s2009 > 0">@{{row.N2009}}</td>
                                   <td ng-if="row.s2010 > 0">@{{row.N2010}}</td>
                                   <td ng-if="row.s2011 > 0">@{{row.N2011}}</td>
                                   <td ng-if="row.s2012 > 0">@{{row.N2012}}</td>
                                   <td ng-if="row.s2013 > 0">@{{row.N2013}}</td>
                                   <td ng-if="row.s2014 > 0">@{{row.N2014}}</td>
                                   <td ng-if="row.s2015 > 0">@{{row.N2015}}</td>
                                   <td ng-if="row.s2016 > 0">@{{row.N2016}}</td>
                                   <td ng-if="row.s2017 > 0">@{{row.N2017}}</td>
                                   <td ng-if="row.s2018 > 0">@{{row.N2018}}</td>

                               </tr>
                               
                           </tbody>
                       </table>
                       </div>
                     </div>
                    </div>
                    <pagination total-items="totalItems1" ng-model="currentPage1" max-size="maxSize" class="pagination-sm no-margin pull-right" items-per-page="itemsperPage1" boundary-links="true" rotate="false" num-pages="numPages" ng-change="pageChangedDist(currentPage1)"></pagination>
                </div>

            </div>
        </div>
    </section>
</section>