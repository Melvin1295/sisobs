(function(){
    angular.module('editorials.controllers',[])
        .controller('EditorialController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.editorials = [];
                $scope.editorial;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('editorials',$scope.query,$scope.currentPage).then(function (data){
                        $scope.editorials = data.data;
                    });
                    }else{
                        crudService.paginate('editorials',$scope.currentPage).then(function (data) {
                            $scope.editorials = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.byId(id,'editorials').then(function (data) {
                        $scope.editorial = data;
                        $scope.editorial.fecha_publicacion = new Date($scope.editorial.fecha_publicacion);
                    });
                }else{
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.paginate('editorials',1).then(function (data) {
                        $scope.editorials = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchEditorials= function(){
                if ($scope.query.length > 0) {
                    crudService.search('editorials',$scope.query,1).then(function (data){
                        $scope.editorials = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('editorials',1).then(function (data) {
                        $scope.editorials = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createEditorials = function(){
                    if ($scope.editorialCreateForm.$valid) {
                        crudService.create($scope.editorial, 'editorials').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/editorials');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editEditorials = function(row){
                    $location.path('/editorials/edit/'+row.id);
                };

                $scope.updateEditorials = function(){
                   if ($scope.editorialEditForm.$valid) {
                        crudService.update($scope.editorial,'editorials').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/editorials');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoEditorials = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'editorials').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteEditorials = function(row){
                    $scope.editorial = row;
                }

                $scope.cancelEditorials= function(){
                    $scope.editorial = {};
                }

                $scope.destroyEditorials = function(){
                    crudService.destroy($scope.editorial,'editorials').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.editorial = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();