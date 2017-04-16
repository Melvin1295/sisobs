(function(){
    angular.module('colaboradores.controllers',[])
        .controller('ColaboradorController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.colaboradores = [];
                $scope.colaborador;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('colaboradores',$scope.query,$scope.currentPage).then(function (data){
                        $scope.colaboradores = data.data;
                    });
                    }else{
                        crudService.paginate('colaboradores',$scope.currentPage).then(function (data) {
                            $scope.colaboradores = data.data;
                        });
                    }
                }; 


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.byId(id,'colaboradores').then(function (data) {
                        $scope.colaborador = data;
                        $scope.colaborador.fecha_publicacion = new Date($scope.colaborador.fecha_publicacion);
                    });
                }else{
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.paginate('colaboradores',1).then(function (data) {
                        $scope.colaboradores = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchColaboradores= function(){
                if ($scope.query.length > 0) {
                    crudService.search('colaboradores',$scope.query,1).then(function (data){
                        $scope.colaboradores = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('colaboradores',1).then(function (data) {
                        $scope.colaboradores = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createColaboradores= function(){
                        crudService.create($scope.colaborador, 'colaboradores').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/colaboradores');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    
                }

                $scope.editColaboradores= function(row){
                    $location.path('/colaboradores/edit/'+row.id);
                };

                $scope.updateColaboradores = function(){
                        crudService.update($scope.colaborador,'colaboradores').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/colaboradores');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    
                };
                $scope.updateEstadoColaboradores = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'colaboradores').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteColaboradores = function(row){
                    $scope.colaborador = row;
                }

                $scope.cancelColaboradores= function(){
                    $scope.colaborador = {};
                }

                $scope.destroyColaboradores = function(){
                    crudService.destroy($scope.colaborador,'colaboradores').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.colaborador = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
                $scope.bandera = false;
                //==============================================
                $scope.uploadFile = function()
                { 
                    if ($scope.colaboradorCreateForm.$valid) {
                        $scope.bandera = true;
                        var imagen = $scope.file_archivo;
                        if (imagen!=undefined) {
                            crudService.uploadFile('colaboradores',imagen, name).then(function(data)
                            {
                                $scope.colaborador.imagen=data.data;
                                $scope.createColaboradores();
                            });
                        }else{
                            $scope.colaborador.imagen="";
                            $scope.createColaboradores();
                        }
                    }                       
                }
                $scope.uploadEditFile = function()
                { 
                    if ($scope.colaboradorEditForm.$valid) {
                        $scope.bandera = true;
                        var imagen = $scope.file_archivo;
                        if (imagen!=undefined) {
                            crudService.uploadFile('colaboradores',imagen, name).then(function(data)
                            {
                                $scope.colaborador.imagen=data.data;
                                $scope.updateColaboradores();
                            });
                        }else{
                            
                            $scope.updateColaboradores();
                        }
                    }                       
                }
                //Trae el ultimo registro ordenado por fecha
                $scope.traerUltimo= function(){
                    crudService.search('indicatorsUltimo',0,1).then(function (data){
                        $scope.ultimo = data;
                        console.log('$scope.ultimo');
                        console.log($scope.ultimo);
                    });
                }
                //trae todos los registros paginados en 15
                $scope.traerAll= function(){
                    crudService.search('indicators_all',0,1).then(function (data){
                        $scope.todos = data.data;
                        console.log('$scope.todos');
                        console.log($scope.todos);
                        console.log(data);
                    });
                }
                $scope.traerAll();
                $scope.traerUltimo();
            }]);
})();