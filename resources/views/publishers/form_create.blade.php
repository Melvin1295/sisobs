 <section class="content-header">
          <h1>
            Pulicaciones
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/publishers"><a href="/publishers">Pulicaciones</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Pulicacion</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="publisherCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>

                  <div class="row">
                    <div class="col-md-10">
                    <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.titulo.$error.required && publisherCreateForm.$submitted || publisherCreateForm.titulo.$dirty && publisherCreateForm.titulo.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="publisher.titulo" required>
                      <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.titulo.$dirty && publisherCreateForm.titulo.$invalid">
                        <span ng-show="publisherCreateForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      
                    </div>
                    <div class="col-md-2">
                      <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.categoria.$error.required && publisherCreateForm.$submitted || publisherCreateForm.categoria.$dirty && publisherCreateForm.categoria.$invalid]">
                                            <label>Categoria</label>
                                            <select name="categoria" class="form-control" ng-model="publisher.categoria" required="true">
                                             <option value="">-- Elige Categoria --</option>
                                             <option value="1">Revistas</option>
                                             <option value="2">Diarios</option>
                                             <option value="3">Gacetas</option>

                                            </select>
                        <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.categoria.$dirty && publisherCreateForm.categoria.$invalid">
                        <span ng-show="publisherCreateForm.categoria.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                      </div>
                    </div>
                  </div>

                    
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.fecha_publicacion.$error.required && publisherCreateForm.$submitted || publisherCreateForm.fecha_publicacion.$dirty && publisherCreateForm.fecha_publicacion.$invalid]">
                                      <label for="fecha_publicacion">Fecha de Publicacion</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </div>
                                        <input type="date" class="form-control" name="fecha_publicacion" ng-model="publisher.fecha_publicacion" required>
                                        <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.fecha_publicacion.$dirty && publisherCreateForm.fecha_publicacion.$invalid">
                                                <span ng-show="publisherCreateForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                        </label>
                                        </div>
                        </div>  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" name="archivo_imagen" uploader-model="archivo_imagen" />
                        </div>
                      </div>
                      
                      

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.employee_id.$error.required  && publisherCreateForm.$submitted || publisherCreateForm.employee_id.$dirty && publisherCreateForm.employee_id.$invalid]">
                           <label>Autor</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="employee_id" ng-model="publisher.employee_id" ng-options="item.id as item.busqueda for item in autores" required><option value="">-- Elige Autor --</option></select>
                             <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.employee_id.$dirty && publisherCreateForm.employee_id.$invalid">
                                                     <span ng-show="publisherCreateForm.role.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Archivo</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      </div>


                    </div>
                     
                     <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.descripcion_corta.$error.required && publisherCreateForm.$submitted || publisherCreateForm.descripcion_corta.$dirty && publisherCreateForm.descripcion_corta.$invalid]">
                      <label for="nombres">Descripcion Corta</label>
                      <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="publisher.descripcion_corta" required>
                        
                      </textarea>
                      <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.descripcion_corta.$dirty && publisherCreateForm.descripcion_corta.$invalid">
                        <span ng-show="publisherCreateForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ publisherCreateForm.descripcion.$error.required && publisherCreateForm.$submitted || publisherCreateForm.descripcion.$dirty && publisherCreateForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="publisher.descripcion" required>
                        
                      </textarea>
                      <label ng-show="publisherCreateForm.$submitted || publisherCreateForm.descripcion.$dirty && publisherCreateForm.descripcion.$invalid">
                        <span ng-show="publisherCreateForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                      

                     


                  <div class="box-footer">
                    <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadFile()">Crear</button>
                    <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                    <a href="/publishers" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->