 <section class="content-header">
          <h1>
            Menus
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/menus"><a href="/menus">Menus</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="menuCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>


                    <div class="form-group" ng-class="{true: 'has-error'}[ menuCreateForm.titulo.$error.required && menuCreateForm.$submitted || menuCreateForm.titulo.$dirty && menuCreateForm.titulo.$invalid]">
                      <label for="nombres">Titulo</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo"</ ng-model="menu.titulo" required>
                      <label ng-show="menuCreateForm.$submitted || menuCreateForm.titulo.$dirty && menuCreateForm.titulo.$invalid">
                        <span ng-show="menuCreateForm.titulo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div class="form-group" ng-class="{true: 'has-error'}[ menuCreateForm.descripcion.$error.required && menuCreateForm.$submitted || menuCreateForm.descripcion.$dirty && menuCreateForm.descripcion.$invalid]">
                      <label for="nombres">Descripcion</label>
                      <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"</ ng-model="menu.descripcion" required>
                      <label ng-show="menuCreateForm.$submitted || menuCreateForm.descripcion.$dirty && menuCreateForm.descripcion.$invalid">
                        <span ng-show="menuCreateForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                      
                        

                                       


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createMenus()">Crear</button>
                    <a href="/menus" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->