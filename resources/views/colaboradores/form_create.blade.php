 <section class="content-header">
          <h1>
            Colaboradores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/colaboradores"><a href="/colaboradores">Colaboradores</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Colaborador</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="colaboradorCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.nombres.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.nombres.$dirty && colaboradorCreateForm.nombres.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombre"</ ng-model="colaborador.nombres" required>
                      <label ng-show="colaboradorCreateForm.$submitted || colaboradorCreateForm.nombres.$dirty && colaboradorCreateForm.nombres.$invalid">
                        <span ng-show="colaboradorCreateForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.apellidos.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.apellidos.$dirty && colaboradorCreateForm.apellidos.$invalid]">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"</ ng-model="colaborador.apellidos" required>
                      <label ng-show="colaboradorCreateForm.$submitted || colaboradorCreateForm.apellidos.$dirty && colaboradorCreateForm.apellidos.$invalid">
                        <span ng-show="colaboradorCreateForm.apellidos.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group" ng-class="{true: 'has-error'}[ colaboradorCreateForm.cargo.$error.required && colaboradorCreateForm.$submitted || colaboradorCreateForm.cargo.$dirty && colaboradorCreateForm.cargo.$invalid]">
                      <label for="cargo">Cargo</label>
                      <input type="text" class="form-control" name="cargo" placeholder="Cargo"</ ng-model="colaborador.cargo" required>
                      <label ng-show="colaboradorCreateForm.$submitted || colaboradorCreateForm.cargo.$dirty && colaboradorCreateForm.cargo.$invalid">
                        <span ng-show="colaboradorCreateForm.cargo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      </div>
                    </div>
                      
                        
                      

                     
                     <div class="form-group">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="2" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="colaborador.descripcion">
                        
                      </textarea>

                    </div>               

                                       


                  <div class="box-footer">
                    <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadFile()">Crear</button>
                    <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                    <a href="/colaboradores" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->