 <section class="content-header">
          <h1>
            Reporte Medicamentos
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/reportemedicamentos"><a href="/reportemedicamentos">Reporte Medicamentos</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12"> 

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Reporte Medicamento</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="reporteMedicamentoCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>
                  <h4 class="box-title">Lista de Medicamentos</h4>
                  <div class="row">
                    <div class="col-md-1">
                      
                    </div>
                    <div class="col-md-10">
                      <div ng-repeat="rowMedicamentos in medicamentos">
                        
                      <input type="checkbox" ng-model="rowMedicamentos.flag" name="vehicle" value="Bike" >    @{{rowMedicamentos.descripcion}} <br>
                      </div>
                        
                    </div> 
                    
                  </div>
                  

                  <!--<div class="row">
                   <div  class="col-md-6">
                        <label for="nombres">Medicamento</label>
                          <input  type="text" ng-model="medicamentoSelected" placeholder="Buscar Medicamento" typeahead="atributo as atributo.descripcion for atributo in getService($viewValue)" typeahead-loading="loadingLocations" typeahead-no-results="noResults" class="form-control"/>
                    </div>
                    <div class="form-group col-md-2" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.mes.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.mes.$dirty && reporteMedicamentoCreateForm.mes.$invalid]">
                           <label>Mes</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="mes" ng-model="reportemedicamento.mes" required>
                                 <option value="">-- Elige Mes --</option>
                                 <option value="Enero">Enero</option>
                                 <option value="Febrero">Febrero</option>
                                 <option value="Marzo">Marzo</option>
                                 <option value="Abril">Abril</option>
                                 <option value="Mayo">Mayo</option>
                                 <option value="Junio">Junio</option>
                                 <option value="Julio">Julio</option>
                                 <option value="Agosto">Agosto</option>
                                 <option value="Setiembre">Setiembre</option>
                                 <option value="Octubre">Octubre</option>
                                 <option value="Noviembre">Noviembre</option>
                                 <option value="Diciembre">Diciembre</option>
                                 </select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.mes.$dirty && reporteMedicamentoCreateForm.mes.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.mes.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                        <div class="form-group col-md-2" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.anio.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.anio.$dirty && reporteMedicamentoCreateForm.anio.$invalid]">
                           <label>Año</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="anio" ng-model="reportemedicamento.anio" ng-options="item as item for item in anios" required>
                                 <option value="">-- Elige Año --</option>
                                 </select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.anio.$dirty && reporteMedicamentoCreateForm.anio.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.anio.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                         <div class="form-group col-md-2" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.tipo.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.tipo.$dirty && reporteMedicamentoCreateForm.tipo.$invalid]">
                           <label>Estado</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="tipo" ng-model="reportemedicamento.tipo" required>
                                 <option value="">-- Elige Estado --</option>
                                 <option value="Reportar">Reportar</option>
                                 <option value="Faltante">Faltante</option>
                                 </select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.tipo.$dirty && reporteMedicamentoCreateForm.tipo.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.tipo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>

                    <div class="form-group col-md-12" >
                      <div class="form-group" >
                      <label for="nombres">Descripcion</label>
                      <textarea rows="2" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="reportemedicamento.descripcion" required>
                        
                      </textarea>
                    </div>
                    </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary" ng-click="addMedicamento()">Reportar</button>
                    </div>
                    
                    </div>-->

                     

                    <!-- ============================================== -->
                      <!--<div class="box box-secondary">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte</h3> 
                </div>--><!-- /.box-header -->
                <!--<div class="box-body">
                  <div class="form-group">
                    <table class="table table-bordered">
                                  <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Medicamento</th>
                                    <th>Año</th>
                                    <th>Mes</th>
                                    <th>Estado</th>
                                    <th>Descripcion</th>
                                    <th style="width: 40px">Eliminar</th>
                                  </tr>
                    
                                  <tr ng-repeat="row in detreportemedicamentos">
                                    <td>@{{$index + 1}}</td>
                                    <td>@{{row.medicamento}}</td>
                                    <td>@{{row.anio}}</td>
                                    <td>@{{row.mes}}</td>
                                    <td>@{{row.tipo}}</td>
                                    <td>@{{row.descripcion}}</td>
                                    <td><a ng-click="destroyMedicamento($index)" class="btn btn-danger btn-xs" >Eliminar</a></td>
                                  </tr>              
                                </table>
                  </div>
                  </div>
                  </div>-->
                        

                                       
                    <!-- ============================================== -->

                  <div class="box-footer">
                    <a type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Guardar</a>
                    <a href="/reportemedicamentos" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->


              <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <form name="reporteMedicamentoCreateForm" role="form" novalidate>
      <div class="modal-body">
       
        <div class="row">
         <div class="form-group col-md-4" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.mes.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.mes.$dirty && reporteMedicamentoCreateForm.mes.$invalid]">
                           <label>Mes</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="mes" ng-model="reportemedicamento.mes" required>
                                 <option value="">-- Elige Mes --</option>
                                 <option value="Enero">Enero</option>
                                 <option value="Febrero">Febrero</option>
                                 <option value="Marzo">Marzo</option>
                                 <option value="Abril">Abril</option>
                                 <option value="Mayo">Mayo</option>
                                 <option value="Junio">Junio</option>
                                 <option value="Julio">Julio</option>
                                 <option value="Agosto">Agosto</option>
                                 <option value="Setiembre">Setiembre</option>
                                 <option value="Octubre">Octubre</option>
                                 <option value="Noviembre">Noviembre</option>
                                 <option value="Diciembre">Diciembre</option>
                                 </select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.mes.$dirty && reporteMedicamentoCreateForm.mes.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.mes.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>
                        <div class="form-group col-md-4" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.anio.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.anio.$dirty && reporteMedicamentoCreateForm.anio.$invalid]">
                           <label>Año</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="anio" ng-model="reportemedicamento.anio" ng-options="item as item for item in anios" required>
                                 <option value="">-- Elige Año --</option>
                                 </select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.anio.$dirty && reporteMedicamentoCreateForm.anio.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.anio.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>

                        <div class="form-group col-md-4" ng-class="{true: 'has-error'}[ reporteMedicamentoCreateForm.tipo_reporte_id.$error.required  && reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.tipo_reporte_id.$dirty && reporteMedicamentoCreateForm.tipo_reporte_id.$invalid]">
                           <label>Tipo Estado</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="tipo_reporte_id" ng-model="reportemedicamento.tipo_reporte_id" ng-options="item.id as item.descripcion for item in tipo_reporte" required><option value="">-- Elige Estado --</option></select>
                             <label ng-show="reporteMedicamentoCreateForm.$submitted || reporteMedicamentoCreateForm.tipo_reporte_id.$dirty && reporteMedicamentoCreateForm.tipo_reporte_id.$invalid">
                                                     <span ng-show="reporteMedicamentoCreateForm.tipo_reporte_id.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>

                         

                        </div>
                        <div class="row">
                    <div class="form-group col-md-12" >
                      <div class="form-group" >
                      <label for="nombres">Descripcion</label>
                      <textarea rows="2" cols="50" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="reportemedicamento.descripcion" required>
                        
                      </textarea>
                    </div>
                    </div>
                    </div>
                    <div style="text-align: center;">
                        
                    </div>
                   
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" ng-click="createReporteMedicamentos()">Reportar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>

  </div>
</div>
