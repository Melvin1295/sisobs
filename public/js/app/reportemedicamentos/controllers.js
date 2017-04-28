(function(){
    angular.module('reportemedicamentos.controllers',[])
        .controller('ReporteMedicamentoController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.reportemedicamentos = [];
                $scope.reportemedicamento;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('reportemedicamentos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.reportemedicamentos = data.data;
                    });
                    }else{
                        crudService.paginate('reportemedicamentos',$scope.currentPage).then(function (data) {
                            $scope.reportemedicamentos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'reportemedicamentos').then(function (data) {
                        $scope.reportemedicamento = data;
                        $scope.reportemedicamento.fecha_publicacion = new Date($scope.reportemedicamento.fecha_publicacion);
                    });
                }else{   
                    crudService.paginate('reportemedicamentos',1).then(function (data) {
                        $scope.reportemedicamentos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchReporteMedicamentos= function(){
                if ($scope.query.length > 0) {
                    crudService.search('reportemedicamentos',$scope.query,1).then(function (data){
                        $scope.reportemedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('reportemedicamentos',1).then(function (data) {
                        $scope.reportemedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createReporteMedicamentos = function(){
                    if ($scope.reporteMedicamentoCreateForm.$valid) {
                        $scope.reportemedicamento.detreporte=$scope.detreportemedicamentos;
                        crudService.create($scope.reportemedicamento, 'reportemedicamentos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/reportemedicamentos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editReporteMedicamentos = function(row){
                    $location.path('/reportemedicamentos/edit/'+row.id);
                };

                $scope.updateReporteMedicamentos = function(){
                   if ($scope.menuEditForm.$valid) {
                        crudService.update($scope.reportemedicamento,'reportemedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/reportemedicamentos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoReporteMedicamentos = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'reportemedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteReporteMedicamentos= function(row){
                    $scope.reportemedicamento = row;
                }

                $scope.cancelReporteMedicamentos= function(){
                    $scope.reportemedicamento = {};
                }

                $scope.destroyReporteMedicamentos = function(){
                    crudService.destroy($scope.reportemedicamento,'reportemedicamentos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.reportemedicamento = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
                //----------------------------------------------------
                $scope.detreportemedicamentos=[];
                $scope.detreportemedicamento={};
                $scope.medicamentoSelected=undefined;
                $scope.getService = function(val) {
                  return crudService.recuperarUnDato('buscarmedicamento',val).then(function(response){
                    return response.map(function(item){
                      return item;
                    });
                  });
                };


                $scope.addMedicamento = function(){
                    if ($scope.medicamentoSelected.descripcion==undefined) {
                        alert("Seleccione Correctamente un Medicamento");
                        $scope.medicamentoSelected=undefined;
                    }else{
                        $scope.detreportemedicamento.medicamento_id=$scope.medicamentoSelected.id;
                        $scope.detreportemedicamento.medicamento=$scope.medicamentoSelected.descripcion;
                        $scope.detreportemedicamentos.push($scope.detreportemedicamento);
                        $scope.detreportemedicamento={}
                        $scope.medicamentoSelected=undefined;
                        console.log($scope.detreportemedicamentos);
                    }
                }
                $scope.destroyMedicamento = function($index){
                    $scope.detreportemedicamentos.splice($index,1);
                }
            }]);
})();