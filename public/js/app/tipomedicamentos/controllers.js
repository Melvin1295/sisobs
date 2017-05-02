(function(){
    angular.module('tipomedicamentos.controllers',[])
        .controller('TipoMedicamentoController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.tipomedicamentos = [];
                $scope.tipomedicamento;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('tipomedicamentos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.tipomedicamentos = data.data;
                    });
                    }else{
                        crudService.paginate('tipomedicamentos',$scope.currentPage).then(function (data) {
                            $scope.tipomedicamentos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'tipomedicamentos').then(function (data) {
                        $scope.tipomedicamento = data;
                        $scope.tipomedicamento.fecha_publicacion = new Date($scope.tipomedicamento.fecha_publicacion);
                    });
                }else{   
                    crudService.paginate('tipomedicamentos',1).then(function (data) {
                        $scope.tipomedicamentos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchTipoMedicamentos= function(){
                if ($scope.query.length > 0) {
                    crudService.search('tipomedicamentos',$scope.query,1).then(function (data){
                        $scope.tipomedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('tipomedicamentos',1).then(function (data) {
                        $scope.tipomedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createTipoMedicamentos = function(){
                    if ($scope.tipoMedicamentoCreateForm.$valid) {
                        crudService.create($scope.tipomedicamento, 'tipomedicamentos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/tipomedicamentos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editTipoMedicamentos = function(row){
                    $location.path('/tipomedicamentos/edit/'+row.id);
                };

                $scope.updateTipoMedicamentos = function(){
                   if ($scope.TipoMedicamentoEditForm.$valid) {
                        crudService.update($scope.tipomedicamento,'tipomedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/tipomedicamentos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoTipoMedicamentos = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'tipomedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteTipoMedicamentos = function(row){
                    $scope.tipomedicamento = row;
                }

                $scope.cancelTipoMedicamentos= function(){
                    $scope.tipomedicamento = {};
                }

                $scope.destroyTipoMedicamentos = function(){
                    crudService.destroy($scope.tipomedicamento,'tipomedicamentos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.tipomedicamento = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();