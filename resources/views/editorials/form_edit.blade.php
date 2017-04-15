<section class="content-header">
    <h1>
        Editoriales
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/editorials">Editoriales</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Editorial</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="editorialEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                         <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.nombre.$error.required && editorialEditForm.$submitted || editorialEditForm.nombre.$dirty && editorialEditForm.nombre.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="editorial.nombre" required>
                      <label ng-show="editorialEditForm.$submitted || editorialEditForm.nombre.$dirty && editorialEditForm.nombre.$invalid">
                        <span ng-show="editorialEditForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.titulo_descripcion.$error.required && editorialEditForm.$submitted || editorialEditForm.titulo_descripcion.$dirty && editorialEditForm.titulo_descripcion.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo_descripcion" placeholder="Titulo"</ ng-model="editorial.titulo_descripcion" required>
                      <label ng-show="editorialEditForm.$submitted || editorialEditForm.titulo_descripcion.$dirty && editorialEditForm.titulo_descripcion.$invalid">
                        <span ng-show="editorialEditForm.titulo_descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                          <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.fecha_publicacion.$error.required && editorialEditForm.$submitted || editorialEditForm.fecha_publicacion.$dirty && editorialEditForm.fecha_publicacion.$invalid]">
                                      <label for="fecha_publicacion">Fecha de Editorial</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </div>
                                        <input type="date" class="form-control" name="fecha_publicacion" ng-model="editorial.fecha_publicacion" required>
                                        <label ng-show="editorialEditForm.$submitted || editorialEditForm.fecha_publicacion.$dirty && editorialEditForm.fecha_publicacion.$invalid">
                                                <span ng-show="editorialEditForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                        </label>
                                        </div>
                        </div>  
                      </div>
                      <div class="col-md-2">
                        <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.anio.$error.required && editorialEditForm.$submitted || editorialEditForm.anio.$dirty && editorialEditForm.anio.$invalid]">
                      <label for="nombres">Año Editorial</label>
                      <input type="text" class="form-control" name="anio" placeholder="Año Editorial"</ ng-model="editorial.anio" required>
                      <label ng-show="editorialEditForm.$submitted || editorialEditForm.anio.$dirty && editorialEditForm.anio.$invalid">
                        <span ng-show="editorialEditForm.anio.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>
                      
                      <div class="col-md-5">
                        <div class="form-group">
                          <label>Archivo</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      </div>
                      <div style="text-align: center;">
                                        <a  ng-disabled="editorial.archivo_adjunto==''" href="@{{editorial.archivo_adjunto}}" target="_blank" class="btn btn-success btn-xs">Ver Archivo</a>
                                      </div>
                      

                    </div>
                     
                     <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.descripcion_corta.$error.required && editorialEditForm.$submitted || editorialEditForm.descripcion_corta.$dirty && editorialEditForm.descripcion_corta.$invalid]">
                      <label for="nombres">Descripcion Corta</label>
                      <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="editorial.descripcion_corta" required>
                        
                      </textarea>
                      <label ng-show="editorialEditForm.$submitted || editorialEditForm.descripcion_corta.$dirty && editorialEditForm.descripcion_corta.$invalid">
                        <span ng-show="editorialEditForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ editorialEditForm.descripcion.$error.required && editorialEditForm.$submitted || editorialEditForm.descripcion.$dirty && editorialEditForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="editorial.descripcion" required>
                        
                      </textarea>
                      <label ng-show="editorialEditForm.$submitted || editorialEditForm.descripcion.$dirty && editorialEditForm.descripcion.$invalid">
                        <span ng-show="editorialEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadEditFile()">Editar</button>
                            <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                            <a href="/editorials" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->