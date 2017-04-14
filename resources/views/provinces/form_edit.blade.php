<section class="content-header">
    <h1>
        Provincias
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/provinces">Provincias</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Provincia</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="provinceEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                        <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ provinceEditForm.nombre.$error.required && provinceEditForm.$submitted || provinceEditForm.nombre.$dirty && provinceEditForm.nombre.$invalid]">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"</ ng-model="province.nombre" required>
                      <label ng-show="provinceEditForm.$submitted || provinceEditForm.nombre.$dirty && provinceEditForm.nombre.$invalid">
                        <span ng-show="provinceEditForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>

                      <div class="col-md-6">
                       <div class="form-group" ng-class="{true: 'has-error'}[ provinceEditForm.descripcion.$error.required && provinceEditForm.$submitted || provinceEditForm.descripcion.$dirty && provinceEditForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <input class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="province.descripcion" required />
                      <label ng-show="provinceEditForm.$submitted || provinceEditForm.descripcion.$dirty && provinceEditForm.descripcion.$invalid">
                        <span ng-show="provinceEditForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div> 
                    </div>

                    </div> 


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" ng-class="{true: 'has-error'}[ provinceEditForm.codigo.$error.required && provinceEditForm.$submitted || provinceEditForm.codigo.$dirty && provinceEditForm.codigo.$invalid]">
                      <label for="nombres">Codigo</label>
                      <input type="text" class="form-control" name="codigo" placeholder="Codigo"</ ng-model="province.codigo" required>
                      <label ng-show="provinceEditForm.$submitted || provinceEditForm.codigo.$dirty && provinceEditForm.codigo.$invalid">
                        <span ng-show="provinceEditForm.codigo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      </div>

                      <div class="col-md-6">
                       <div class="form-group" ng-class="{true: 'has-error'}[ provinceEditForm.pais.$error.required && provinceEditForm.$submitted || provinceEditForm.pais.$dirty && provinceEditForm.pais.$invalid]">
                      <label for="nombres">Pais</label>
                      <input class="form-control" name="pais" placeholder="Pais"</ ng-model="province.pais" required />

                      <label ng-show="provinceEditForm.$submitted || provinceEditForm.pais.$dirty && provinceEditForm.pais.$invalid">
                        <span ng-show="provinceEditForm.pais.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div> 
                    </div>

                    </div>    
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" ng-click="updateProvinces()">Editar</button>
                            <a href="/provinces" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->