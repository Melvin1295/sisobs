(function(){
    angular.module('indicators.controllers',[])
        .controller('IndicatorController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.indicators = [];
                $scope.indicator;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('indicators',$scope.query,$scope.currentPage).then(function (data){
                        $scope.indicators = data.data;
                    });
                    }else{
                        crudService.paginate('indicators',$scope.currentPage).then(function (data) {
                            $scope.indicators = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.byId(id,'indicators').then(function (data) {
                        $scope.indicator = data;
                        $scope.indicator.fecha_publicacion = new Date($scope.indicator.fecha_publicacion);
                    });
                }else{
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.paginate('indicators',1).then(function (data) {
                        $scope.indicators = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchIndicators= function(){
                if ($scope.query.length > 0) {
                    crudService.search('indicators',$scope.query,1).then(function (data){
                        $scope.indicators = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('indicators',1).then(function (data) {
                        $scope.indicators = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createIndicators= function(){
                    if ($scope.indicatorCreateForm.$valid) {
                        crudService.create($scope.indicator, 'indicators').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/indicators');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editIndicators = function(row){
                    $location.path('/indicators/edit/'+row.id);
                };

                $scope.updateIndicators = function(){
                   if ($scope.indicatorEditForm.$valid) {
                        crudService.update($scope.indicator,'indicators').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/indicators');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoIndicators = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'indicators').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteIndicators = function(row){
                    $scope.indicator = row;
                }

                $scope.cancelIndicators= function(){
                    $scope.indicator = {};
                }

                $scope.destroyIndicators = function(){
                    crudService.destroy($scope.indicator,'indicators').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.indicator = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();