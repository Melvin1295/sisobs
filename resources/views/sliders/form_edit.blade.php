<section class="content-header">
    <h1>
        Sliders
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/sliders">Sliders</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Slider</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="sliderEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                       <div class="row">
                          <div class="col-md-8">
                                <div class="form-group" ng-class="{true: 'has-error'}[ sliderEditForm.nombre.$error.required && sliderEditForm.$submitted || sliderEditForm.nombre.$dirty && sliderEditForm.nombre.$invalid]">
                                  <label for="nombres">Nombre</label>
                                  <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="slider.nombre" required>
                                  <label ng-show="sliderEditForm.$submitted || sliderEditForm.nombre.$dirty && sliderEditForm.nombre.$invalid">
                                    <span ng-show="sliderEditForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </label>
                                </div>

                                <div class="form-group">
                                  <label for="nombres">Descripcion</label>
                                  <textarea rows="4" cols="50" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="slider.glosa">
                                    
                                  </textarea>

                                </div>  
                          </div>
                          <div class="col-md-4">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Imagen</label>
                                <input type="file" name="file_archivo" uploader-model="file_archivo" />
                              </div>
                            </div>
                            <div>
                              <img ng-src="@{{slider.imagen}}"  alt="" class="img-thumbnail"/>
                            </div>
                              
                          </div>
                       </div>
                       
                        
                      
                      

                     
                        
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadEditFile()">Editar</button>
                            <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                            <a href="/sliders" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->