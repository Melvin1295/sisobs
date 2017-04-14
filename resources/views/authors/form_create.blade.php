<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Autores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li href="/authors"><a href="/authors">Autores</a></li>
            <li class="active" >Crear</li>
          </ol>

          
        </section>

 <section class="content">
  <!-- <section class="content">-->
  <div class="row ">
          <div class="col-md-12">
   <div class="box box-success" >
   <!-- Tabs within a box -->
   <div class="nav-tabs-custom" align="" id="my_tab">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#i" data-toggle="tab" class="xlf">General</a></li>
                  <li><a ng-model="checked" href="#e" data-toggle="tab" class="xlf">Ubicación</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Crear Autores</li>
                </ul>
                
                  <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  
                  <div class=" tab-pane active" id="i" style="position: relative; height: auto;">
                  <!--=======================Contenido del primer tab===========================-->

<section class="content">
<form name="authorCreateForm" role="form" novalidate>
<div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>
<div class="">
<div class="row">

  <div class="col-md-4">
                    <div class="form-group" ng-class="{true: 'has-error'}[ authorCreateForm.nombres.$error.required && authorCreateForm.$submitted || authorCreateForm.nombres.$dirty && authorCreateForm.nombres.$invalid]">
                      <label for="nombres">Nombres</label>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombres" ng-model="author.nombres" required>
                      <label ng-show="authorCreateForm.$submitted || authorCreateForm.nombres.$dirty && authorCreateForm.nombres.$invalid">
                        <span ng-show="authorCreateForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
  </div>
  <div class="col-md-4">
                    <div class="form-group" ng-class="{true: 'has-error'}[ authorCreateForm.apellidos.$error.required && authorCreateForm.$submitted || authorCreateForm.apellidos.$dirty && authorCreateForm.apellidos.$invalid]">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"
                      ng-model="author.apellidos" required>
                      <label ng-show="authorCreateForm.$submitted || authorCreateForm.apellidos.$dirty && authorCreateForm.apellidos.$invalid">

                        <span ng-show="authorCreateForm.apellidos.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                       </label>
                    </div>
  </div>
  <div class="col-md-4">     
                    <div class="form-group" ng-class="{true: 'has-error'}[ authorCreateForm.dni.$error.required && authorCreateForm.$submitted || authorCreateForm.dni.$dirty && authorCreateForm.dni.$invalid]">
                      <label for="dni">Dni</label>
                      <input type="number" class="form-control" name="empresa" placeholder="Dni"
                      ng-model="author.dni" required>
                      <label ng-show="authorCreateForm.$submitted || authorCreateForm.dni.$dirty && authorCreateForm.dni.$invalid">

                        <span ng-show="authorCreateForm.dni.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                       </label>
                     </div>
            </div>
  
  </div>
  <div class="row">
  <div class="col-md-4">

                     <div class="form-group" >
                      <label for="ruc">E-mail</label>
                      <input type="email" class="form-control" name="ruc" placeholder="E-mail"
                      ng-model="author.email">
                     </div>
    </div>
    <div class="col-md-4">
    <div class="form-group" >
                      <label for="ruc">Direccion de Contacto</label>
                      <input type="text" class="form-control" name="ruc" placeholder="Direccion Contacto"
                      ng-model="author.direccioncontacto">
                     </div>
    </div>
    <div class="col-md-2">
    <div class="form-group" >
                      <label for="codigo">Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Codigo"
                      ng-model="author.codigo" ng-disabled="author.autogenerado" ng-required="!author.autogenerado">
        <span style="color:#dd4b39;" ng-show="authorCreateForm.codigo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
    </div>
    </div>
      <div class="col-md-2">
          <div class="form-group">
              <label for="apellidos">Autogenerado</label><br>
              <input type="checkbox" ng-model="author.autogenerado"> Cód. gen.
          </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
                                            <label>Género</label>
                                            <select name="genero" class="form-control" ng-model="author.genero">
                                             <option value="">-- elige género --</option>
                                             <option value="M">Masculino</option>
                                             <option value="F">Femenino</option>

                                            </select>
                      </div>
         </div>
         <div class="col-md-4">
   <div class="form-group" ng-class="{true: 'has-error'}[ authorCreateForm.fechanac.$error.required && authorCreateForm.$submitted || authorCreateForm.fechanac.$dirty && authorCreateForm.fechanac.$invalid]">
                    <label for="fechanac">Fecha de Nacimiento</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                      <input type="date" class="form-control" name="fechanac" ng-model="author.fechanac">
                      <label ng-show="authorCreateForm.$submitted || authorCreateForm.fechanac.$dirty && authorCreateForm.fechanac.$invalid">
                              <span ng-show="authorCreateForm.fechanac.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                      </label>
                      </div></div>   
  </div>
         <div class="col-md-4">
          <div class="form-group">
                                            <label>Estado</label>
                                            <select name="estado" class="form-control"  ng-model="author.estado" >
                                             <option value="1" selected>Activo</option>
                                             <option value="0">Inactivo</option>
                                             </select>
                      </div>
                      </div>
                      
                     
  
  </div>
  <div class="row">
  <div class="col-md-4">
    <div class="form-group">
                       <label>Imagen</label>
                       <input type="file" ng-model="author.imagen" id="authorImage" name="imagen"/>
                       </div>
  </div>
  </div>
  </div>
   
  <div class="">
                <hr>
                 <button type="button" class="btn btn-default" ng-click="toggle()">Mostrar Formulario de Contacto</button>
          <hr>
    </div>
    <div ng-show="show" >
   

        
        <div class="row ">
        <div class="col-md-8">
            <div class="row ">
              <div class="col-md-6">
                   <div class="form-group" >
                      <label for="ruc">Telefono Fijo</label>
                      <input type="text" class="form-control" name="ruc" placeholder="Telefono Fijo"
                      ng-model="author.fijo">
                     </div>
              </div>
               <div class="col-md-6">
                     <div class="form-group" >
                      <label for="movil">Telefono Movil</label>
                      <input type="text" class="form-control" name="movil" placeholder="Telfono Movil"
                      ng-model="author.movil">
                     </div>
              </div>
              
           </div> 
           <div class="row ">
           <div class="col-md-6">
                 <div class="form-group" >
                      <label for="ruc">website</label>
                      <input type="text" class="form-control" name="ruc" placeholder="Website"
                      ng-model="author.website">
                     </div>
              </div>
               <div class="col-md-6">
                     <div class="form-group" >
                      <label for="fijo">Twitter </label>
                      <input type="text" class="form-control" name="fijo" placeholder="@User"
                      ng-model="author.twitter">
                     </div>
              </div>
           </div>   
          </div>
          <div class="col-md-4">
        <div class="form-group" >
                      <label for="notas">Notas</label>
                      <textarea type="notas" class="form-control" name="notas" placeholder="..."
                      ng-model="author.notas" rows="5" cols="50"></textarea>
                     </div>
          </div>
        </div>
        
      
      
              
    </div>
     <div class="box-footer">
                    <button type="submit" class="btn btn-primary" aling="left" ng-click="createAuthor()">Crear</button>
                    <a href="/authors" class="btn btn-danger">Cancelar</a>
                    <!--<input type="button" class="btn btn-danger" value="Cancel"onclick="location='/authors'"/>-->
                  </div>
    </form>
               
  </section>

  


                 <!--=======================fin del primer tab===========================-->
                  </div>
                  <div class=" tab-pane" id="e" style="position: relative; height: auto;">
                    <!--====================Contenido de la segundo Tab=========================-->
  <section class="content">
  <div class="row ">
              <div class="col-md-4">
                  <div class="form-group" >
                      <label for="movil">Distrito</label>
                      <input type="text" class="form-control" name="movil" placeholder="###"
                      ng-model="author.distrito">
                     </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group" >
                      <label for="email">Provincia</label>
                      <input type="text" class="form-control" name="email" placeholder="Chiclayo"
                      ng-model="author.provincia">
                     </div>
              </div>
              <div class="col-md-4">
                    <div class="form-group" >
                      <label for="website">Departamento</label>
                      <input type="text" class="form-control" name="website" placeholder="Lambayeque"
                      ng-model="author.departamento">
                     </div>
              </div>
  </div>
  <div class="row ">
              <div class="col-md-4">
                  <div class="form-group" >
                      <label for="direccContac">Pais</label>
                      <input type="text" class="form-control" name="direccContac" placeholder="Peru"
                      ng-model="author.pais">
                     </div>
                   </div>
               
               
  </div>
  <hr>
  
  <div class="box-footer" aling="right">
                    <button type="submit" class="btn btn-primary" ng-click="createAuthor()">Crear</button>
                    <a href="/authors" class="btn btn-danger">Cancelar</a>
                    <!-- <input type="button" class="btn btn-danger" value="Cancel"onclick="location='/authors'"/>-->
                  </div>
  
  </section>

                    <!--=======================fin del segundo tab===========================-->
                  </div>
                  
                        
              
                  
                </div>
                </div><!-- /.nav-tabs-custom -->
                    <script type="text/javascript">
$('#my_tab .xlf').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
    </script>
                 
</div>
</div>
</div>
</section>
     