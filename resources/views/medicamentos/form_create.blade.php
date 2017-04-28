 <section class="content-header">
          <h1>
            Medicamentos
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/medicamentos"><a href="/medicamentos">Medicamentos</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Medicamento</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="medicamentoCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ medicamentoCreateForm.descripcion.$error.required && medicamentoCreateForm.$submitted || medicamentoCreateForm.descripcion.$dirty && medicamentoCreateForm.descripcion.$invalid]">
                      <label for="nombres">Medicamento</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Medicamento"</ ng-model="medicamento.descripcion" required>
                      <label ng-show="medicamentoCreateForm.$submitted || medicamentoCreateForm.descripcion.$dirty && medicamentoCreateForm.descripcion.$invalid">
                        <span ng-show="medicamentoCreateForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                     <div class="form-group" ng-class="{true: 'has-error'}[ medicamentoCreateForm.tipo_medicamento_id.$error.required  && medicamentoCreateForm.$submitted || medicamentoCreateForm.tipo_medicamento_id.$dirty && medicamentoCreateForm.tipo_medicamento_id.$invalid]">
                           <label>Tipo Medicamento</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="tipo_medicamento_id" ng-model="medicamento.tipo_medicamento_id" ng-options="item.id as item.descripcion for item in tipomedicamentos" required><option value="">-- Elige Tipo Medicamento --</option></select>
                             <label ng-show="medicamentoCreateForm.$submitted || medicamentoCreateForm.tipo_medicamento_id.$dirty && medicamentoCreateForm.tipo_medicamento_id.$invalid">
                                                     <span ng-show="medicamentoCreateForm.tipo_medicamento_id.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>

                    <div class="form-group" >
                      <label for="nombres">Descripcion</label>
                      <input type="text" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="medicamento.glosa" >
                      
                    </div>
                      
                        

                                       


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createMedicamentos()">Crear</button>
                    <a href="/medicamentos" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->