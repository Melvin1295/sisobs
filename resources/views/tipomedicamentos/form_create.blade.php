 <section class="content-header">
          <h1>
            Tipo Medicamentos
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/tipomedicamentos"><a href="/tipomedicamentos">Tipo Medicamentos</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Tipo Medicamento</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="tipoMedicamentoCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ tipoMedicamentoCreateForm.descripcion.$error.required && tipoMedicamentoCreateForm.$submitted || tipoMedicamentoCreateForm.descripcion.$dirty && tipoMedicamentoCreateForm.descripcion.$invalid]">
                      <label for="nombres">Tipo Medicamento</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Tipo Medicamento"</ ng-model="tipomedicamento.descripcion" required>
                      <label ng-show="tipoMedicamentoCreateForm.$submitted || tipoMedicamentoCreateForm.descripcion.$dirty && tipoMedicamentoCreateForm.descripcion.$invalid">
                        <span ng-show="tipoMedicamentoCreateForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" >
                      <label for="nombres">Descripcion</label>
                      <input type="text" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="tipomedicamento.glosa" >
                      
                    </div>
                      
                        

                                       


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createTipoMedicamentos()">Crear</button>
                    <a href="/tipomedicamentos" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->