<section class="content">
    <div class="container">
    <style type="text/css">
       label {
       	  color: rgba(144, 39, 43, 1);
       }
    </style>
           <h3>QUEJAS / RECLAMOS EN LINEA</h3>
                   <div class="panel panel-body panel-info">
                   <form name="reclamoCreateForm" role="form" novalidate>

                   	   <div class="row">
                   	   	    <div class="col-sm-12" style="margin-top:-10px;">
                   	   	    	<label style="font-size: 20px;  color: black;">La Siguiente queja o reclamo es totalmente confidencial.</label>
                   	   	    </div>
                   	   </div> 
                       <div class="navbar-collapse collapse">
                             <ul class="nav navbar-nav">
                              <li><a tyle="margin-top:-10px;" ng-click="filtroTipoQuejas(1)">
                              <label style="font-size: 20px;  color: black;">MEDICAMENTOS</a></li> 
                              <li><a tyle="margin-top:-10px;" ng-click="filtroTipoQuejas(2)">
                              <label style="font-size: 20px;  color: black;">OTRO MOTIVO</a></li>                       
                          </ul>
                        </div>
                   	   <div class="row" ng-repeat="rowQuejas in tipoQuejas" ng-if="numeroTipoQueja==rowQuejas.numero">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="rowQuejas.flag" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>@{{rowQuejas.descripcion}}</label>
                   	   	    </div>
                   	   </div>
                   	   <!--<div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.flag2" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>¿Entregaron medicamentos incompletos?</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.flag3" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>¿Le entregaron medicamentos vencidos?</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.flag4" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>Otro motivo</label>
                   	   	    </div>
                   	   </div>-->

                           <div class="row" >
                            <div  class="col-md-4">
                              <div>
                                  <label>Departamento</label>
                                  <select ng-click="CargarProvincia()" class="form-control ng-pristine ng-valid ng-touched" name="" ng-model="DepertamentoSelect" ng-options="item.departamento as item.departamento for item in Departamentos"><option value="">-- Elige Departamento --</option></select>
                              </div>
                            </div>
                            
                            <div  class="col-md-4">
                              <div>
                                  <label>Provinca</label>
                                  <select ng-disabled="DepertamentoSelect==null" ng-click="CargarDistrito()" class="form-control ng-pristine ng-valid ng-touched" name="" ng-model="ProvinciaSelect" ng-options="item.provincia as item.provincia for item in Provincias"><option value="">-- Elige Provincia --</option></select>
                              </div>
                            </div>

                            <div  class="col-md-4">
                              <div>
                                  <label>Distrito</label>
                                  <select ng-disabled="DepertamentoSelect==null || ProvinciaSelect==undefined" class="form-control ng-pristine ng-valid ng-touched" name="" ng-model="DistritoSelect" ng-options="item.id as item.distrito for item in Distritos"><option value="">-- Elige Distrito --</option></select>
                              </div>
                            </div>
                          </div>
                          <div class="row"> 
                                                              
                                  <div class="col-sm-12">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ reclamoCreateForm.nombres.$error.required && reclamoCreateForm.$submitted || reclamoCreateForm.nombres.$dirty && reclamoCreateForm.nombres.$invalid]">
                                    <label>Nombre y Apellidos o Seudonimo *</label>
                                    <input type="text" required ng-model="reclamo.nombres" placeholder="nombre o seudonimo" class="form-control" name="nombres">
                                    <label ng-show="reclamoCreateForm.$submitted || reclamoCreateForm.nombres.$dirty && reclamoCreateForm.nombres.$invalid">
                                    <span ng-show="reclamoCreateForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                                  </div>
                                  </div>
                           </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-8" >
                                   <div class="form-group" ng-class="{true: 'has-error'}[ reclamoCreateForm.correo.$error.required && reclamoCreateForm.$submitted || reclamoCreateForm.correo.$dirty && reclamoCreateForm.correo.$invalid]">
                   	   	    	<label>Correo Electronico *</label>
                   	   	    	<input type="email" required ng-model="reclamo.correo" placeholder="ejemplo@xxxxxxx.xxx" class="form-control" name="correo">
                                    <label ng-show="reclamoCreateForm.$submitted || reclamoCreateForm.correo.$dirty && reclamoCreateForm.correo.$invalid">
                                    <span ng-show="reclamoCreateForm.correo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                   	   	    </div>
                                  </div>
                   	   	    <div class="col-sm-4">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ reclamoCreateForm.telefono.$error.required && reclamoCreateForm.$submitted || reclamoCreateForm.telefono.$dirty && reclamoCreateForm.telefono.$invalid]">
                   	   	    	<label>Telefono</label>
                   	   	    	<input type="text" ng-model="reclamo.telefono" placeholder="#########" class="form-control" required name="telefono">
                   	   	    
                                  <label ng-show="reclamoCreateForm.$submitted || reclamoCreateForm.telefono.$dirty && reclamoCreateForm.telefono.$invalid">
                                    <span ng-show="reclamoCreateForm.telefono.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                                  </div>
                                  </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-9">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ reclamoCreateForm.establecimiento.$error.required && reclamoCreateForm.$submitted || reclamoCreateForm.establecimiento.$dirty && reclamoCreateForm.establecimiento.$invalid]">
                   	   	    	<label>Establecimiento donde se atiende - Servicio *</label>
                   	   	    	<input type="text" required ng-model="reclamo.establecimiento" placeholder="Establecimiento" class="form-control" name="establecimiento">
                                    <label ng-show="reclamoCreateForm.$submitted || reclamoCreateForm.establecimiento.$dirty && reclamoCreateForm.establecimiento.$invalid">
                                    <span ng-show="reclamoCreateForm.establecimiento.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                   	   	    </div>
                                  </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-12">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ reclamoCreateForm.descripcion_reclamo.$error.required && reclamoCreateForm.$submitted || reclamoCreateForm.descripcion_reclamo.$dirty && reclamoCreateForm.descripcion_reclamo.$invalid]">
                   	   	    	<label>Queja / Reclamo *</label>
                   	   	    	<textarea class="form-control" required ng-model="reclamo.descripcion_reclamo" placeholder="Descripcion ......." rows="5" name="descripcion_reclamo"></textarea>
                                    <label ng-show="reclamoCreateForm.$submitted || reclamoCreateForm.descripcion_reclamo.$dirty && reclamoCreateForm.descripcion_reclamo.$invalid">
                                    <span ng-show="reclamoCreateForm.descripcion_reclamo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                   	   	    </div>
                                </div>
                   	   </div><br>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-12" style="text-aling:right;">
                   	   	    	<button class="btn btn-info" ng-click="registrarReclamo()">Registrar</button>
                   	   	    </div>
                   	   </div>

                  </form>
                   </div>
               </div>
</section>