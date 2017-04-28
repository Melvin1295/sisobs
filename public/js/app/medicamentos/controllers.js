(function(){
    angular.module('medicamentos.controllers',[])
        .controller('MedicamentoController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.medicamentos = [];
                $scope.medicamento;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('medicamentos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.medicamentos = data.data;
                    });
                    }else{
                        crudService.paginate('medicamentos',$scope.currentPage).then(function (data) {
                            $scope.medicamentos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'medicamentos').then(function (data) {
                        $scope.medicamento = data;
                        $scope.medicamento.fecha_publicacion = new Date($scope.medicamento.fecha_publicacion);
                    });
                    crudService.search('tipomedicamentosdata',0,1).then(function (data){
                        $scope.tipomedicamentos = data;
                    });    
                }else{   
                    crudService.paginate('medicamentos',1).then(function (data) {
                        $scope.medicamentos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                    crudService.search('tipomedicamentosdata',0,1).then(function (data){
                        $scope.tipomedicamentos = data;
                    });
                }

                $scope.searchMedicamentos= function(){
                if ($scope.query.length > 0) {
                    crudService.search('medicamentos',$scope.query,1).then(function (data){
                        $scope.medicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('medicamentos',1).then(function (data) {
                        $scope.medicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createMedicamentos = function(){
                    if ($scope.medicamentoCreateForm.$valid) {
                        crudService.create($scope.medicamento, 'medicamentos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/medicamentos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editMedicamentos = function(row){
                    $location.path('/medicamentos/edit/'+row.id);
                };

                $scope.updateMedicamentos = function(){
                   if ($scope.medicamentoEditForm.$valid) {
                        crudService.update($scope.medicamento,'medicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/medicamentos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoMedicamentos = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'medicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteMedicamentos = function(row){
                    $scope.medicamento = row;
                }

                $scope.cancelMedicamentos= function(){
                    $scope.medicamento = {};
                }

                $scope.destroyMedicamentos = function(){
                    crudService.destroy($scope.medicamento,'medicamentos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.medicamento = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();