(function(){
    angular.module('sliders.controllers',[])
        .controller('SliderController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.sliders = [];
                $scope.slider;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.bandera = false;
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
                    crudService.paginate('slidersall',1).then(function (data) {
                        $scope.listarSlider();
                    });
                }

                $scope.slidersOrden=[];
                $scope.listarSlider= function(){
                    for (var i = 0; i < $scope.sliders.length; i++) {
                        if ($scope.sliders[i].estado === 1) {
                            $scope.slidersOrden.push($scope.sliders[i]);
                        }
                    }
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

                $scope.editSliders = function(row){
                    $location.path('/sliders/edit/'+row.id);
                };

                $scope.updateSliders = function(){
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
                //==============================================
                $scope.uploadFile = function()
                { 
                    if ($scope.sliderCreateForm.$valid) {
                        $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('sliders',file_archivo, name).then(function(data)
                            {
                                $scope.slider.imagen=data.data;
                                $scope.createSliders();
                            });
                        }else{
                            $scope.slider.imagen="";
                            //$scope.funcion2();
                            $scope.createSliders();
                        }
                    }                       
                }
                $scope.uploadEditFile = function()
                { 
                    if ($scope.sliderEditForm.$valid) {
                        $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('sliders',file_archivo, name).then(function(data)
                            {
                                $scope.slider.imagen=data.data;
                                $scope.updateSliders();
                            });
                        }else{
                            //$scope.funcion2();
                            $scope.updateSliders();
                        }
                    }                       
                }
                /*$scope.funcion2 = function(){
                    var fileResolucion = $scope.fileResolucion;
                    if (fileResolucion!=undefined) {
                        crudService.uploadFile('ediciones',fileResolucion, name).then(function(data)
                        {
                            $scope.edicion.resolucion=data.data;
                            $scope.funcion3();
                        });
                    }else{
                        $scope.edicion.resolucion="";
                        $scope.funcion3();
                    }
                }*/
                
            }]);
})();