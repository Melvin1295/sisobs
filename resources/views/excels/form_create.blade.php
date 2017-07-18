 <section class="content-header">
          <h1>
            Datos Indicadores
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/menus"><a href="/menus">Indicadores</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Importar Datos Indicadores</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="menuCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>
                    <div class="row">
                       <div class="col-md-4">
                            <div class="form-group" >
                                  <label for="nombres">Seleccione tipo de Datos a subir</label>
                                  <select class="form-control" ng-model="tipoIndicador">
                                    <option value="0">Subir Datos Indicador Global</option>
                                    <option value="1">Subir Datos Indicador por Departamento</option>
                                    <option value="2">Subir Datos Indicador por Provincia</option>
                                    <option value="3">Subir Datos Indicador por Distrito</option>
                                  </select>
                                 
                            </div>
                       </div>
                       <div class="col-md-4" ng-if="tipoIndicador >= 1">
                          <div class="form-group" >
                                   <label for="nombres">Seleccione Departamento</label>
                                   <select class="form-control" ng-change="getallProvByDepart(indicatorData.departament_id)" ng-model="indicatorData.departament_id">
                                    <option value="0">Seleccione Depratamento</option>
                                    <option ng-repeat="item in departaments" value="@{{item.id}}">@{{item.nombre}}</option>
                                  </select>
                            </div>
                       </div>
                       <div class="col-md-4" ng-if="tipoIndicador >= 2">
                          <div class="form-group" >
                                  <label for="nombres">Seleccione Provincia</label>
                                  <select class="form-control" ng-change="getallDistByProv(indicatorData.province_id)" ng-model="indicatorData.province_id">
                                    <option value="0">Seleccione Provincia</option>
                                    <option ng-repeat="item in provinces" value="@{{item.id}}">@{{item.nombre}}</option>
                                  </select>
                                   
                            </div>
                       </div>
                       <div class="col-md-4" ng-if="tipoIndicador == 3">
                          <div class="form-group" >
                                  <label for="nombres">Seleccione Distrito</label>
                                  <select class="form-control" ng-model="indicatorData.distrit_id">
                                    <option value="0">Seleccione Distrito</option>}
                                    <option ng-repeat="item in distrits" value="@{{item.id}}">@{{item.nombre}}</option>
                                  </select>
                            </div>
                       </div>
                       <div class="col-md-4" >
                          <div class="form-group" >
                                  <label for="nombres">Seleccione Indicador</label>
                                  <select class="form-control" ng-model="indicatorData.indicator_id">
                                    <option value="0">Seleccione Indicador</option>
                                    <option ng-repeat="item in indicators" value="@{{item.id}}">@{{item.titulo}}</option>
                                  </select>
                            </div>
                       </div>
                    </div><br>

                    <div class="row">
                       
                       <div class="col-md-4">
                          <div class="form-group" >
                                  <label for="nombres">Seleccione Archivo</label>
                                  <input type="file" class="form-control" name="file_archivo" uploader-model="file_archivo" />
                            </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group" >
                                  <label for="nombres">Fuente</label>
                                  <input type="text" class="form-control" ng-model="indicatorData.fuente" />
                            </div>
                       </div>
                    </div>                
                 <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="uploadFile()">Cargar</button>
                    <a href="/excels" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->