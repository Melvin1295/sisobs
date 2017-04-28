<section class="content-header">
    <h1>
        Tipo Medicamentos
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""> <a href="/tipomedicamentos">Tipo Medicamentos</a></li>
        <li class="active">Editar</li>
    </ol>


</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Tipo Medicamento</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="TipoMedicamentoEditForm" role="form" novalidate>
                    <div class="box-body">
                        <div class="callout callout-danger" ng-show="errors">
                            <ul>
                                <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                            </ul>
                        </div>

                       <!--==================-->
                        <div class="form-group" ng-class="{true: 'has-error'}[ TipoMedicamentoEditForm.descripcion.$error.required && TipoMedicamentoEditForm.$submitted || TipoMedicamentoEditForm.descripcion.$dirty && TipoMedicamentoEditForm.descripcion.$invalid]">
                      <label for="nombres">Tipo Medicamento</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Tipo Medicamento"</ ng-model="tipomedicamento.descripcion" required>
                      <label ng-show="TipoMedicamentoEditForm.$submitted || TipoMedicamentoEditForm.descripcion.$dirty && TipoMedicamentoEditForm.descripcion.$invalid">
                        <span ng-show="TipoMedicamentoEditForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" >
                      <label for="nombres">Descripcion</label>
                      <input type="text" class="form-control" name="glosa" placeholder="Descripcion"</ ng-model="tipomedicamento.glosa">
                      
                    </div>
            
                       <!--====================-->
                            
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" ng-click="updateTipoMedicamentos()">Editar</button>
                            <a href="/tipomedicamentos" class="btn btn-danger">Cancelar</a>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div><!-- /.row -->
</section><!-- /.content -->