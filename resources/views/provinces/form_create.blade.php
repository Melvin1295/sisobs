 <section class="content-header">
          <h1>
            Provincias
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/provinces"><a href="/provinces">Provincias</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Provincia</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="provinceCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ provinceCreateForm.nombre.$error.required && provinceCreateForm.$submitted || provinceCreateForm.nombre.$dirty && provinceCreateForm.nombre.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="province.nombre" required>
                      <label ng-show="provinceCreateForm.$submitted || provinceCreateForm.nombre.$dirty && provinceCreateForm.nombre.$invalid">
                        <span ng-show="provinceCreateForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>

                      <div class="col-md-6">
                       <div class="form-group" ng-class="{true: 'has-error'}[ provinceCreateForm.descripcion.$error.required && provinceCreateForm.$submitted || provinceCreateForm.descripcion.$dirty && provinceCreateForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <input class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="province.descripcion" required />
                      <label ng-show="provinceCreateForm.$submitted || provinceCreateForm.descripcion.$dirty && provinceCreateForm.descripcion.$invalid">
                        <span ng-show="provinceCreateForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div> 
                    </div>

                    </div> 


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ provinceCreateForm.codigo.$error.required && provinceCreateForm.$submitted || provinceCreateForm.codigo.$dirty && provinceCreateForm.codigo.$invalid]">
                      <label for="nombres">Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Codigo"</ ng-model="province.codigo" required>
                      <label ng-show="provinceCreateForm.$submitted || provinceCreateForm.codigo.$dirty && provinceCreateForm.codigo.$invalid">
                        <span ng-show="provinceCreateForm.codigo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>

                      <div class="col-md-6">
                       <div class="form-group" ng-class="{true: 'has-error'}[ provinceCreateForm.pais.$error.required && provinceCreateForm.$submitted || provinceCreateForm.pais.$dirty && provinceCreateForm.pais.$invalid]">
                      <label for="nombres">Pais</label>
                      <input class="form-control" name="pais" placeholder="Pais"</ ng-model="province.pais" required />

                      <label ng-show="provinceCreateForm.$submitted || provinceCreateForm.pais.$dirty && provinceCreateForm.pais.$invalid">
                        <span ng-show="provinceCreateForm.pais.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div> 
                    </div>

                    </div>               

                                       


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createProvinces()">Crear</button>
                    <a href="/provinces" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->