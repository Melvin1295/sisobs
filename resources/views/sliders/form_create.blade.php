 <section class="content-header">
          <h1>
            Sliders
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/sliders"><a href="/sliders">Sliders</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Slider</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="sliderCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ sliderCreateForm.nombre.$error.required && sliderCreateForm.$submitted || sliderCreateForm.nombre.$dirty && sliderCreateForm.nombre.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="slider.nombre" required>
                      <label ng-show="sliderCreateForm.$submitted || sliderCreateForm.nombre.$dirty && sliderCreateForm.nombre.$invalid">
                        <span ng-show="sliderCreateForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      
                        <div class="form-group">
                          <label>Imagen</label>
                          <input type="file" name="file_archivo" uploader-model="file_archivo" />
                        </div>
                      

                     
                     <div class="form-group">
                      <label for="nombres">Descripcion</label>
                      <textarea rows="2" cols="50" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="slider.glosa">
                        
                      </textarea>

                    </div>               

                                       


                  <div class="box-footer">
                    <button ng-if="!bandera" type="submit" class="btn btn-primary" ng-click="uploadFile()">Crear</button>
                    <a ng-if="bandera" type="submit" class="btn btn-primary" ng-disabled="true">Cargando</a>
                    <a href="/sliders" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->