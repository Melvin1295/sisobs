<section class="content-header">
    <h1>
        Controladores
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/controladores">Controladores</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Controlador</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="colaboradorEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                       <div class="row">
                          <div class="col-md-8">
                                <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorEditForm.nombres.$error.required && colaboradorEditForm.$submitted || colaboradorEditForm.nombres.$dirty && colaboradorEditForm.nombres.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombre"</ ng-model="colaborador.nombres" required>
                      <label ng-show="colaboradorEditForm.$submitted || colaboradorEditForm.nombres.$dirty && colaboradorEditForm.nombres.$invalid">
                        <span ng-show="colaboradorEditForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorEditForm.apellidos.$error.required && colaboradorEditForm.$submitted || colaboradorEditForm.apellidos.$dirty && colaboradorEditForm.apellidos.$invalid]">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"</ ng-model="colaborador.apellidos" required>
                      <label ng-show="colaboradorEditForm.$submitted || colaboradorEditForm.apellidos.$dirty && colaboradorEditForm.apellidos.$invalid">
                        <span ng-show="colaboradorEditForm.apellidos.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                          <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorEditForm.cargo.$error.required && colaboradorEditForm.$submitted || colaboradorEditForm.cargo.$dirty && colaboradorEditForm.cargo.$invalid]">
                      <label for="cargo">Cargo</label>
                      <input type="text" class="form-control" name="cargo" placeholder="Cargo"</ ng-model="colaborador.cargo" required>
                      <label ng-show="colaboradorEditForm.$submitted || colaboradorEditForm.cargo.$dirty && colaboradorEditForm.cargo.$invalid">
                        <span ng-show="colaboradorEditForm.cargo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label>Imagen</label>
                                <input type="file" name="file_archivo" uploader-model="file_archivo" />
                              </div>
                            <div>
                              <img ng-src="@{{colaborador.imagen}}"  alt="" class="img-thumbnail"/>
                            </div>
                              
                          </div>
                       </div>
                       <div class="form-group">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="2" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="colaborador.descripcion">
                        
                      </textarea>

                    </div>
                       
                        
                      
                      

                     
                        
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadEditFile()">Editar</button>
                            <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                            <a href="/controladores" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->