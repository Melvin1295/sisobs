(function(){
    angular.module('reclamos.controllers',[])
        .controller('ReclamoController',['$scope', '$routeParams','$location','crudService' 
            ,'$filter','$route','$log','$window',
            function($scope ,$routeParams,$location,crudService
                ,$filter,$route,$log,$window){
                $scope.reclamos = [];
                $scope.reclamo;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('reclamos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.reclamos = data.data;
                    });
                    }else{
                        crudService.paginate('reclamos',$scope.currentPage).then(function (data) {
                            $scope.reclamos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'reclamos').then(function (data) {
                        $scope.reclamo = data;
                        $scope.reclamo.fecha_publicacion = new Date($scope.reclamo.fecha_publicacion);
                    });

                   
                }else{   
                    crudService.paginate('reclamos',1).then(function (data) {
                        $scope.reclamos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchReclamo= function(){
                if ($scope.query.length > 0) {
                    crudService.search('reclamos',$scope.query,1).then(function (data){
                        $scope.reclamos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('reclamos',1).then(function (data) {
                        $scope.reclamos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.mostrarQuejas = function (quejas) 
                {
                    console.log(quejas);
                    $scope.quejas=quejas;
                }

                $scope.buscar = function() {
                    if ($scope.buscarForm.$valid) {
                        $scope.rango_busqueda.fecha_fin.setDate($scope.rango_busqueda.fecha_fin.getDate()+1);
                        if ($scope.rango_busqueda.fecha_inicio<$scope.rango_busqueda.fecha_fin) {
                            var fecha_inicio = $filter('date')($scope.rango_busqueda.fecha_inicio,'yyyy-MM-dd');
                            var fecha_fin = $filter('date')($scope.rango_busqueda.fecha_fin,'yyyy-MM-dd');
                            console.log(fecha_fin);
                            window.open('http://apisisobs.dev/api/reclamos-reporte-excel/recuperarDosDato/'+fecha_inicio+'/'+fecha_fin)
                            $route.reload();
                            $window.location.reload();   
                        }else{
                            alert("La fecha final debe ser mayor a la fecha inicial");
                        }
                        
                    }
                }

                /*$scope.createMenus = function(){
                    if ($scope.menuCreateForm.$valid) {
                        crudService.create($scope.reclamo, 'reclamos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/reclamos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editMenus = function(row){
                    $location.path('/reclamos/edit/'+row.id);
                };

                $scope.updateMenus = function(){
                   if ($scope.menuEditForm.$valid) {
                        crudService.update($scope.reclamo,'reclamos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/reclamos');
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
                        crudService.update(row,'reclamos').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteMenus = function(row){
                    $scope.reclamo = row;
                }

                $scope.cancelMenus= function(){
                    $scope.reclamo = {};
                }

                $scope.destroyMenus = function(){
                    crudService.destroy($scope.reclamo,'reclamos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.reclamo = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }*/
            }]);
})();