(function(){
    angular.module('provinces.controllers',[])
        .controller('ProvinceController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.provinces = [];
                $scope.province;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('provinces',$scope.query,$scope.currentPage).then(function (data){
                        $scope.provinces = data.data;
                    });
                    }else{
                        crudService.paginate('provinces',$scope.currentPage).then(function (data) {
                            $scope.provinces = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.byId(id,'provinces').then(function (data) {
                        $scope.province = data;
                        $scope.province.fecha_publicacion = new Date($scope.province.fecha_publicacion);
                    });
                }else{
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.paginate('provinces',1).then(function (data) {
                        $scope.provinces = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchProvinces= function(){
                if ($scope.query.length > 0) {
                    crudService.search('provinces',$scope.query,1).then(function (data){
                        $scope.provinces = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('provinces',1).then(function (data) {
                        $scope.provinces = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createProvinces = function(){
                    if ($scope.provinceCreateForm.$valid) {
                        crudService.create($scope.province, 'provinces').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/provinces');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editProvinces = function(row){
                    $location.path('/provinces/edit/'+row.id);
                };

                $scope.updateProvinces = function(){
                   if ($scope.provinceEditForm.$valid) {
                        crudService.update($scope.province,'provinces').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/provinces');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoProvinces = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'provinces').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteProvinces = function(row){
                    $scope.province = row;
                }

                $scope.cancelProvinces= function(){
                    $scope.province = {};
                }

                $scope.destroyProvinces = function(){
                    crudService.destroy($scope.province,'provinces').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.province = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();