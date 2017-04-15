<section class="content-header">
    <h1>
        Indicadores
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/indicators">Indicadores</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Indicador</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="indicatorEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                       
                    <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.titulo.$error.required && indicatorEditForm.$submitted || indicatorEditForm.titulo.$dirty && indicatorEditForm.titulo.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="indicator.titulo" required>
                      <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.titulo.$dirty && indicatorEditForm.titulo.$invalid">
                        <span ng-show="indicatorEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.province_id.$error.required  && indicatorEditForm.$submitted || indicatorEditForm.province_id.$dirty && indicatorEditForm.province_id.$invalid]">
                           <label>Provincia</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="province_id" ng-model="indicator.province_id" ng-options="item.id as item.nombre for item in provincias" required><option value="">-- Elige Provincia --</option></select>
                             <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.province_id.$dirty && indicatorEditForm.province_id.$invalid">
                                                     <span ng-show="indicatorEditForm.role.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.fuente.$error.required && indicatorEditForm.$submitted || indicatorEditForm.fuente.$dirty && indicatorEditForm.fuente.$invalid]">
                      <label for="nombres">Fuente</label>
                      <input type="text" class="form-control" name="fuente" placeholder="Fuente"</ ng-model="indicator.fuente" required>
                      <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.fuente.$dirty && indicatorEditForm.fuente.$invalid">
                        <span ng-show="indicatorEditForm.fuente.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.fecha_publicacion.$error.required && indicatorEditForm.$submitted || indicatorEditForm.fecha_publicacion.$dirty && indicatorEditForm.fecha_publicacion.$invalid]">
                                      <label for="fecha_publicacion">Fecha de Publicacion</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-calendar"></i>
                                                            </div>
                                        <input type="date" class="form-control" name="fecha_publicacion" ng-model="indicator.fecha_publicacion" required>
                                        <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.fecha_publicacion.$dirty && indicatorEditForm.fecha_publicacion.$invalid">
                                                <span ng-show="indicatorEditForm.fecha_publicacion.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                        </label>
                                        </div>
                        </div>  
                      </div>
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Archivo</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                        <div style="text-align: center;">
                                        <a  ng-disabled="indicator.archivo_adjunto==''" href="@{{indicator.archivo_adjunto}}" target="_blank" class="btn btn-success btn-xs">Ver Archivo</a>
                                      </div>
                      </div>
                      

                    </div>
                     
                     <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.descripcion_corta.$error.required && indicatorEditForm.$submitted || indicatorEditForm.descripcion_corta.$dirty && indicatorEditForm.descripcion_corta.$invalid]">
                      <label for="nombres">Descripcion Corta</label>
                      <textarea rows="4" cols="50" class="form-control" name="descripcion_corta" placeholder="Descripcion Corta"</ ng-model="indicator.descripcion_corta" required>
                        
                      </textarea>
                      <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.descripcion_corta.$dirty && indicatorEditForm.descripcion_corta.$invalid">
                        <span ng-show="indicatorEditForm.descripcion_corta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ indicatorEditForm.descripcion.$error.required && indicatorEditForm.$submitted || indicatorEditForm.descripcion.$dirty && indicatorEditForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="10" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="indicator.descripcion" required>
                        
                      </textarea>
                      <label ng-show="indicatorEditForm.$submitted || indicatorEditForm.descripcion.$dirty && indicatorEditForm.descripcion.$invalid">
                        <span ng-show="indicatorEditForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadEditFile()">Editar</button>
                            <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                            <a href="/indicators" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->