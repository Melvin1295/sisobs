(function(){
    angular.module('sliders.controllers',[])
        .controller('SliderController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.sliders = [];
                $scope.slider;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('sliders',$scope.query,$scope.currentPage).then(function (data){
                        $scope.sliders = data.data;
                    });
                    }else{
                        crudService.paginate('sliders',$scope.currentPage).then(function (data) {
                            $scope.sliders = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.byId(id,'sliders').then(function (data) {
                        $scope.slider = data;
                        $scope.slider.fecha_publicacion = new Date($scope.slider.fecha_publicacion);
                    });
                }else{
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.paginate('sliders',1).then(function (data) {
                        $scope.sliders = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchSliders= function(){
                if ($scope.query.length > 0) {
                    crudService.search('sliders',$scope.query,1).then(function (data){
                        $scope.sliders = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('sliders',1).then(function (data) {
                        $scope.sliders = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createSliders = function(){
                    if ($scope.sliderCreateForm.$valid) {
                        crudService.create($scope.slider, 'sliders').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/sliders');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editSliders = function(row){
                    $location.path('/sliders/edit/'+row.id);
                };

                $scope.updateSliders = function(){
                   if ($scope.sliderEditForm.$valid) {
                        crudService.update($scope.slider,'sliders').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/sliders');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoSliders = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'sliders').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteSliders = function(row){
                    $scope.slider = row;
                }

                $scope.cancelSliders= function(){
                    $scope.slider = {};
                }

                $scope.destroySliders = function(){
                    crudService.destroy($scope.slider,'sliders').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.slider = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();