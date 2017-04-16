<style>
.vertical-menu {
}

.vertical-menu a {
    background-color: #f3f3f3;
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
</style>
<section class="content">
	  <!-- ==========================
    	BLOG - START
    =========================== --> 
    <section class="content-item grey" style="  margin-bottom: -70px;" id="blog-timeline">
    	<div class="container">
        	<div class="row">
            	
                <!-- BLOG POSTS - START -->
                <div class="col-xs-4">
                    <div id="slideshow-links">                                   <!-- Nav tabs -->
                                    
                                    <div ng-if="bandera">
                                    <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li class="active"><a href="#" ng-click="cambiar_pestana(1)"><span></span>Indicadores</a></li>
                                        <li ><a   href="#" ng-click="cambiar_pestana(2)" ><span></span>Provincias</a></li>
                                        </ul>
                                    </div>
                                    <div ng-if="!bandera">
                                    <ul class="nav nav-tabs nav-justified" id="slideshow-tabs">
                                        <li><a href="#" ng-click="cambiar_pestana(1)"><span></span>Indicadores</a></li>
                                        <li class="active" ><a   href="#" ng-click="cambiar_pestana(2)" ><span></span>Provincias</a></li>
                                         </ul>
                                    </div>
                                        
                                    
                    </div>
                
                <!-- BLOG POSTS - END -->
                
            
                    <div ng-if="bandera">
                <div class="vertical-menu">
                                          <a ng-repeat="row in indicadores" href="#" ng-click="verIndicador(row)" style="">@{{row.titulo}}</a>
                                          
                                        </div>
            </div>
            <div ng-if="bandera1">
                <!--<div class="vertical-menu" ng-disabled="true">
                                          <a href="#" style="">vbn 1</a>
                                          <a href="#">Link 2</a>
                                          <a href="#">Link 3</a>
                                          <a href="#">Link 4</a>
                                        </div>-->
            </div>

                </div>
                <div class="col-xs-8">
                <div class="blog-post" >
                    <div class="row">
                        
                            
                            <h3><a ng-click="verDetalle(item)">@{{indicador.titulo}}</a></h3><hr>
                            <div class="date-xs"></div>
                            <p>@{{indicador.descripcion}}</p>
                            
                        </div>
                     
                    <div class="row">
                       <div class="col-xs-6">
                          <i class="fa fa-pencil"></i> Descargar Excel
                       </div>
                       <div class="col-xs-6" style="text-aling:rigth;">
                          <i class="fa fa-pencil"></i> <b>Fuente: </b>@{{indicador.fuente}}
                       </div>
                    </div><br>
                     <div class="row">
                       <table class="table table-hover" style="margin-botton:-80px;">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Provincia</th>
                                   <th>2015</th>
                                   <th>2016</th>
                                   <th>2017</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>Lima</td>
                                   <td>50</td>
                                   <td>100</td>
                                   <td>20</td>
                               </tr>
                           </tbody>
                       </table>
                     </div>
                    </div>
                </div>
                <!-- SIDEBAR - START -->
                
                <!-- SIDEBAR - END -->


            </div>
        </div>
    </section>
</section>