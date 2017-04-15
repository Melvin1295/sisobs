 <section class="content-header">
          <h1>
            Indicadores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/indicators"><a href="/indicators">Indicadores</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Indicador</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="indicatorCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    

                    <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.titulo.$error.required && indicatorEditForm.$submitted || indicatorEditForm.titulo.$dirty && indicatorEditForm.titulo.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="indicator.titulo" required>
                      <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.titulo.$dirty && indicatorEditForm.titulo.$invalid">
                        <span ng-show="indicatorEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ indicatorCreateForm.province_id.$error.required  && indicatorCreateForm.$submitted || indicatorCreateForm.province_id.$dirty && indicatorCreateForm.province_id.$invalid]">
                           <label>Provincia</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="province_id" ng-model="indicator.province_id" ng-options="item.id as item.nombre for item in provincias" required><option value="">-- Elige Provincia --</option></select>
                             <label ng-show="indicatorCreateForm.$submitted || indicatorCreateForm.province_id.$dirty && indicatorCreateForm.province_id.$invalid">
                                                     <span ng-show="indicatorCreateForm.role.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ indicatorCreateForm.fuente.$error.required && indicatorCreateForm.$submitted || indicatorCreateForm.fuente.$dirty && indicatorCreateForm.fuente.$invalid]">
                      <label for="nombres">Fuente</label>
                      <input type="text" class="form-control" name="fuente" placeholder="Fuente"</ ng-model="indicator.fuente" required>
                      <label ng-show="indicatorCreateForm.$submitted || indicatorCreateForm.fuente.$dirty && indicatorCreateForm.fuente.$invalid">
                        <span ng-show="indicatorCreateForm.fuente.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group" ng-class="{true: 'has-error'}[ indicatorCreateForm.fecha_publicacion.$error.required && indicatorCreateForm.$submitted || indicatorCreateForm.fecha_publicacion.$dirty && indicatorCreateForm.fecha_publicacion.$invalid]">
                                      <label for="fecha_publicacion">Fecha de Publicacion</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </div>
                                        <input type="date" class="form-control" name="fecha_publicacion" ng-model="indicator.fecha_publicacion" required>
                                        <label ng-show="indicatorCreateForm.$submitted || indicatorCreateForm.fecha_publicacion.$dirty && indicatorCreateForm.fecha_publicacion.$invalid">
                                                <span ng-show="indicatorCreateForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                        </label>
                                        </div>
                        </div>  
                      </div>
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Archivo</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      </div>
                      

                    </div>
                     
                     <div class="form-group" ng-class="{true: 'has-error'}[ indicatorCreateForm.descripcion_corta.$error.required && indicatorCreateForm.$submitted || indicatorCreateForm.descripcion_corta.$dirty && indicatorCreateForm.descripcion_corta.$invalid]">
                      <label for="nombres">Descripcion Corta</label>
                      <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="indicator.descripcion_corta" required>
                        
                      </textarea>
                      <label ng-show="indicatorCreateForm.$submitted || indicatorCreateForm.descripcion_corta.$dirty && indicatorCreateForm.descripcion_corta.$invalid">
                        <span ng-show="indicatorCreateForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ indicatorCreateForm.descripcion.$error.required && indicatorCreateForm.$submitted || indicatorCreateForm.descripcion.$dirty && indicatorCreateForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="indicator.descripcion" required>
                        
                      </textarea>
                      <label ng-show="indicatorCreateForm.$submitted || indicatorCreateForm.descripcion.$dirty && indicatorCreateForm.descripcion.$invalid">
                        <span ng-show="indicatorCreateForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                      

                     


                  <div class="box-footer">
                    <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadFile()">Crear</button>
                    <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                    <a href="/indicators" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->