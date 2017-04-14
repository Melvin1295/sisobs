(function(){
    angular.module('menus.controllers',[])
        .controller('MenuController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.menus = [];
                $scope.menu;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('menus',$scope.query,$scope.currentPage).then(function (data){
                        $scope.menus = data.data;
                    });
                    }else{
                        crudService.paginate('menus',$scope.currentPage).then(function (data) {
                            $scope.menus = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'menus').then(function (data) {
                        $scope.menu = data;
                        $scope.menu.fecha_publicacion = new Date($scope.menu.fecha_publicacion);
                    });
                }else{   
                    crudService.paginate('menus',1).then(function (data) {
                        $scope.menus = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchMenus= function(){
                if ($scope.query.length > 0) {
                    crudService.search('menus',$scope.query,1).then(function (data){
                        $scope.menus = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('menus',1).then(function (data) {
                        $scope.menus = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createMenus = function(){
                    if ($scope.menuCreateForm.$valid) {
                        crudService.create($scope.menu, 'menus').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/menus');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editMenus = function(row){
                    $location.path('/menus/edit/'+row.id);
                };

                $scope.updateMenus = function(){
                   if ($scope.menuEditForm.$valid) {
                        crudService.update($scope.menu,'menus').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/menus');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoMenus = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'menus').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteMenus = function(row){
                    $scope.menu = row;
                }

                $scope.cancelMenus= function(){
                    $scope.menu = {};
                }

                $scope.destroyMenus = function(){
                    crudService.destroy($scope.menu,'menus').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.menu = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();