 <section class="content-header">
          <h1>
            Editoriales
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/editorials"><a href="/editorials">Editoriales</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Editorial</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="editorialCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.nombre.$error.required && editorialCreateForm.$submitted || editorialCreateForm.nombre.$dirty && editorialCreateForm.nombre.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="editorial.nombre" required>
                      <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.nombre.$dirty && editorialCreateForm.nombre.$invalid">
                        <span ng-show="editorialCreateForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.titulo_descripcion.$error.required && editorialCreateForm.$submitted || editorialCreateForm.titulo_descripcion.$dirty && editorialCreateForm.titulo_descripcion.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo_descripcion" placeholder="Titulo"</ ng-model="editorial.titulo_descripcion" required>
                      <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.titulo_descripcion.$dirty && editorialCreateForm.titulo_descripcion.$invalid">
                        <span ng-show="editorialCreateForm.titulo_descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                          <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.fecha_publicacion.$error.required && editorialCreateForm.$submitted || editorialCreateForm.fecha_publicacion.$dirty && editorialCreateForm.fecha_publicacion.$invalid]">
                                      <label for="fecha_publicacion">Fecha de Publicacion</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </div>
                                        <input type="date" class="form-control" name="fecha_publicacion" ng-model="editorial.fecha_publicacion" required>
                                        <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.fecha_publicacion.$dirty && editorialCreateForm.fecha_publicacion.$invalid">
                                                <span ng-show="editorialCreateForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                        </label>
                                        </div>
                        </div>  
                      </div>
                      <div class="col-md-2">
                        <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.anio.$error.required && editorialCreateForm.$submitted || editorialCreateForm.anio.$dirty && editorialCreateForm.anio.$invalid]">
                      <label for="nombres">Año Publicacion</label>
                      <input type="text" class="form-control" name="anio" placeholder="Año Publicacion"</ ng-model="editorial.anio" required>
                      <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.anio.$dirty && editorialCreateForm.anio.$invalid">
                        <span ng-show="editorialCreateForm.anio.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>
                      
                      <div class="col-md-5">
                        <div class="form-group">
                          <label>Archivo</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      </div>
                      

                    </div>
                     
                     <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.descripcion_corta.$error.required && editorialCreateForm.$submitted || editorialCreateForm.descripcion_corta.$dirty && editorialCreateForm.descripcion_corta.$invalid]">
                      <label for="nombres">Descripcion Corta</label>
                      <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="editorial.descripcion_corta" required>
                        
                      </textarea>
                      <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.descripcion_corta.$dirty && editorialCreateForm.descripcion_corta.$invalid">
                        <span ng-show="editorialCreateForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ editorialCreateForm.descripcion.$error.required && editorialCreateForm.$submitted || editorialCreateForm.descripcion.$dirty && editorialCreateForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="editorial.descripcion" required>
                        
                      </textarea>
                      <label ng-show="editorialCreateForm.$submitted || editorialCreateForm.descripcion.$dirty && editorialCreateForm.descripcion.$invalid">
                        <span ng-show="editorialCreateForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                      

                     


                  <div class="box-footer">
                    <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadFile()">Crear</button>
                    <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                    <a href="/editorials" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->