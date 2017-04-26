<section class="content">
    <div class="container">
    <style type="text/css">
       label {
       	  color: rgba(144, 39, 43, 1);
       }
    </style>
           <h3>DENUNCIA EN LINEA</h3>
                   <div class="panel panel-body panel-info">
                   	   <div class="row">
                   	   	    <div class="col-sm-12" style="margin-top:-10px;">
                   	   	    	<label style="font-size: 20px;  color: black;">La Siguiente queja o denuncia es totalmente confidencial.</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.question1" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>¿No te dieron en farmacia los medicamentos que te recetaron?</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.question2" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>¿Le entregaron medicamentos incompletos?</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.question3" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>¿Le entregaron medicamentos vencidos?</label>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">
                   	   	    <div class="col-sm-1">
                   	   	    	<input type="checkbox" ng-model="reclamo.otros" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-11">
                   	   	    	<label>Otro motivo</label>
                   	   	    </div>
                   	   </div>
                       <div class="row">                   	   	    
                   	   	    <div class="col-sm-12">
                   	   	    	<label>Nombre y Apellidos o Seudonimo *</label>
                   	   	    	<input type="text" required ng-model="reclamo.nombres" placeholder="nombre o seudonimo" class="form-control">
                   	   	    </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-4">
                   	   	    	<label>Distrito* </label>
                   	   	    	<select class="form-control" required ng-model="reclamo.distrito">
                   	   	    		<option value="">Seleccione</option>
                   	   	    		<option value="Lima">Lima</option>
                   	   	    	</select>
                   	   	    </div>
                   	   	    <div class="col-sm-4">
                   	   	    	<label>Provincia *</label>
                   	   	    	<select class="form-control" required ng-model="reclamo.provincia">
                   	   	    		<option value="">Seleccione</option>
                   	   	    		<option value="Lima">Lima</option>
                   	   	    	</select>
                   	   	    </div>
                   	   	    <div class="col-sm-4">
                   	   	    	<label>Departamento *</label>
                   	   	    	<select class="form-control" required ng-model="reclamo.departamento">
                   	   	    		<option value="">Seleccione</option>
                   	   	    		<option value="Lima">Lima</option>
                   	   	    	</select>
                   	   	    </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-8">
                   	   	    	<label>Correo Electronico *</label>
                   	   	    	<input type="email" required ng-model="reclamo.email" placeholder="ejemplo@xxxxxxx.xxx" class="form-control">
                   	   	    </div>
                   	   	    <div class="col-sm-4">
                   	   	    	<label>Telefono</label>
                   	   	    	<input type="text" ng-model="reclamo.telefono" placeholder="#########" class="form-control">
                   	   	    </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-9">
                   	   	    	<label>Establecimiento donde se atiende - Servicio *</label>
                   	   	    	<input type="text" required ng-model="reclamo.establecimiento" placeholder="Establecimiento" class="form-control">
                   	   	    </div>
                   	   </div>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-12">
                   	   	    	<label>Queja / Reclamo respecto a sus medicamentos *</label>
                   	   	    	<textarea class="form-control" required ng-model="reclamo.reclamo" placeholder="Descripcion ......." rows="5"></textarea>
                   	   	    </div>
                   	   </div><br>
                   	   <div class="row">                   	   	    
                   	   	    <div class="col-sm-12" style="text-aling:right;">
                   	   	    	<button class="btn btn-info" ng-click="registrarReclamo()">Registrar</button>
                   	   	    </div>
                   	   </div>
                   </div>
               </div>
</section>