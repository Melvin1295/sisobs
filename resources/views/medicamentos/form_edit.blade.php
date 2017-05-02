<section class="content-header">
    <h1>
        Medicamentos
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/medicamentos">Medicamentos</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Medicamento</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="medicamentoEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                        <div class="form-group" ng-class="{true: 'has-error'}[ medicamentoEditForm.descripcion.$error.required && medicamentoEditForm.$submitted || medicamentoEditForm.descripcion.$dirty && medicamentoEditForm.descripcion.$invalid]">
                      <label for="nombres">Medicamento</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Medicamento"</ ng-model="medicamento.descripcion" required>
                      <label ng-show="medicamentoEditForm.$submitted || medicamentoEditForm.descripcion.$dirty && medicamentoEditForm.descripcion.$invalid">
                        <span ng-show="medicamentoEditForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" ng-class="{true: 'has-error'}[ medicamentoEditForm.tipo_medicamento_id.$error.required  && medicamentoEditForm.$submitted || medicamentoEditForm.tipo_medicamento_id.$dirty && medicamentoEditForm.tipo_medicamento_id.$invalid]">
                           <label>Tipo Medicamento</label>
                                 <select class="form-control ng-pristine ng-valid ng-touched" name="tipo_medicamento_id" ng-model="medicamento.tipo_medicamento_id" ng-options="item.id as item.descripcion for item in tipomedicamentos" required><option value="">-- Elige Tipo Medicamento --</option></select>
                             <label ng-show="medicamentoEditForm.$submitted || medicamentoEditForm.tipo_medicamento_id.$dirty && medicamentoEditForm.tipo_medicamento_id.$invalid">
                                                     <span ng-show="medicamentoEditForm.tipo_medicamento_id.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>

                                                   </label>
                        </div>

                    <div class="form-group">
                      <label for="nombres">Descripcion</label>
                      <input type="text" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="medicamento.glosa" >
                     
                    </div>
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" ng-click="updateMedicamentos()">Editar</button>
                            <a href="/medicamentos" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->