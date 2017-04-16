<section class="content-header">
    <h1>
        Publicaciones
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/publishers">Publicaciones</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Publicacion</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="publisherEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                        <div class="row">
                    <div class="col-md-10">
                    <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.titulo.$error.required && publisherEditForm.$submitted || publisherEditForm.titulo.$dirty && publisherEditForm.titulo.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="publisher.titulo" required>
                      <label ng-show="publisherEditForm.$submitted || publisherEditForm.titulo.$dirty && publisherEditForm.titulo.$invalid">
                        <span ng-show="publisherEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      
                    </div>
                    <div class="col-md-2">
                      <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.categoria.$error.required && publisherEditForm.$submitted || publisherEditForm.categoria.$dirty && publisherEditForm.categoria.$invalid]">
                                            <label>Categoria</label>
                                            <select name="categoria" class="form-control" ng-model="publisher.categoria" required="true">
                                             <option value="">-- Elige Categoria --</option>
                                             <option value="1">Revistas</option>
                                             <option value="2">Diarios</option>
                                             <option value="3">Gacetas</option>

                                            </select>
                        <label ng-show="publisherEditForm.$submitted || publisherEditForm.categoria.$dirty && publisherEditForm.categoria.$invalid">
                        <span ng-show="publisherEditForm.categoria.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                      </div>
                    </div>
                  </div>
                        <div class="row">
                          <div class="col-md-8">
                                  <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.titulo.$error.required && publisherEditForm.$submitted || publisherEditForm.titulo.$dirty && publisherEditForm.titulo.$invalid]">
                                    <label for="nombres">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="publisher.titulo" required>
                                    <label ng-show="publisherEditForm.$submitted || publisherEditForm.titulo.$dirty && publisherEditForm.titulo.$invalid">
                                      <span ng-show="publisherEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                    </label>
                                  </div>
                                        <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.fecha_publicacion.$error.required && publisherEditForm.$submitted || publisherEditForm.fecha_publicacion.$dirty && publisherEditForm.fecha_publicacion.$invalid]">
                                                    <label for="fecha_publicacion">Fecha de Publicacion</label>
                                                                        <div class="input-group">
                                                                          <div class="input-group-addon">
                                                                            <i class="fa fa-calendar"></i>
                                                                          </div>
                                                      <input type="date" class="form-control" name="fecha_publicacion" ng-model="publisher.fecha_publicacion" required>
                                                      <label ng-show="publisherEditForm.$submitted || publisherEditForm.fecha_publicacion.$dirty && publisherEditForm.fecha_publicacion.$invalid">
                                                              <span ng-show="publisherEditForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                                      </label>
                                                      </div>
                                      </div> 

                                      <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.employee_id.$error.required  && publisherEditForm.$submitted || publisherEditForm.employee_id.$dirty && publisherEditForm.employee_id.$invalid]">
                                         <label>Autor</label>
                                               <select class="form-control ng-pristine ng-valid ng-touched" name="employee_id" ng-model="publisher.employee_id" ng-options="item.id as item.busqueda for item in autores" required><option value="">-- Elige Autor --</option></select>
                                           <label ng-show="publisherEditForm.$submitted || publisherEditForm.employee_id.$dirty && publisherEditForm.employee_id.$invalid">
                                                                   <span ng-show="publisherEditForm.role.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                                 </label>
                                      </div>

                                    


                                   
                                  
                          </div>
                          <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Imagen</label>
                                        <input type="file" name="archivo_imagen" uploader-model="archivo_imagen" />
                                      </div>
                                      <div>
                              <img ng-src="@{{publisher.imagen}}"  alt="" class="img-thumbnail"/>
                            </div style="al">
                                      <div class="form-group">
                                        <label>Archivo</label>
                                        <input type="file" name="file_archivo" uploader-model="file_archivo" />
                                      </div>
                                      <div style="text-align: center;">
                                        <a  ng-disabled="publisher.archivo_adjunto==''" href="@{{publisher.archivo_adjunto}}" target="_blank" class="btn btn-success btn-xs">Ver Archivo</a>
                                      </div>
                                      
                          </div>

                        </div>

                         <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.descripcion_corta.$error.required && publisherEditForm.$submitted || publisherEditForm.descripcion_corta.$dirty && publisherEditForm.descripcion_corta.$invalid]">
                                    <label for="nombres">Descripcion Corta</label>
                                    <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="publisher.descripcion_corta" required>
                                      
                                    </textarea>
                                    <label ng-show="publisherEditForm.$submitted || publisherEditForm.descripcion_corta.$dirty && publisherEditForm.descripcion_corta.$invalid">
                                      <span ng-show="publisherEditForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                    </label>
                                  </div>


                                  <div class="form-group" ng-class="{true: 'has-error'}[ publisherEditForm.descripcion.$error.required && publisherEditForm.$submitted || publisherEditForm.descripcion.$dirty && publisherEditForm.descripcion.$invalid]">
                                    <label for="nombres">Descripcion</label>
                                    <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="publisher.descripcion" required>
                                      
                                    </textarea>
                                    <label ng-show="publisherEditForm.$submitted || publisherEditForm.descripcion.$dirty && publisherEditForm.descripcion.$invalid">
                                      <span ng-show="publisherEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                    </label>
                                  </div>

                        

                                   

                            </div>
                        </div>

                        <div class="box-footer">
                            <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadEditFile()">Editar</button>
                            <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                            <a href="/publishers" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->