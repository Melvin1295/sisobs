(function(){
    angular.module('contacts.controllers',[])
        .controller('contactController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.contacts = [];
                $scope.contact;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('contacts',$scope.query,$scope.currentPage).then(function (data){
                        $scope.contacts = data.data;
                    });
                    }else{
                        crudService.paginate('contacts',$scope.currentPage).then(function (data) {
                            $scope.contacts = data.data;
                        });
                    }
                }; 


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.byId(id,'contacts').then(function (data) {
                        $scope.contact = data;
                        $scope.contact.fecha_publicacion = new Date($scope.contact.fecha_publicacion);
                    });
                }else{
                    crudService.search('provincesdata',0,1).then(function (data){
                        $scope.provincias = data.data;
                    });    
                    crudService.paginate('contacts',1).then(function (data) {
                        $scope.contacts = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchIndicators= function(){
                if ($scope.query.length > 0) {
                    crudService.search('contacts',$scope.query,1).then(function (data){
                        $scope.contacts = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('contacts',1).then(function (data) {
                        $scope.contacts = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createIndicators= function(){
                        crudService.create($scope.contact, 'contacts').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/contacts');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    
                }

                $scope.editIndicators = function(row){
                    $location.path('/contacts/edit/'+row.id);
                };

                $scope.updateIndicators = function(){
                        crudService.update($scope.contact,'contacts').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/contacts');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    
                };
                $scope.updateEstadoIndicators = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'contacts').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteIndicators = function(row){
                    $scope.contact = row;
                }

                $scope.cancelIndicators= function(){
                    $scope.contact = {};
                }

                $scope.destroyIndicators = function(){
                    crudService.destroy($scope.contact,'contacts').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.contact = {};
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
                    if ($scope.indicatorCreateForm.$valid) {
                        $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('contacts',file_archivo, name).then(function(data)
                            {
                                $scope.contact.archivo_adjunto=data.data;
                                $scope.createIndicators();
                            });
                        }else{
                            $scope.contact.archivo_adjunto="";
                            $scope.createIndicators();
                        }
                    }                       
                }
                $scope.uploadEditFile = function()
                { 
                    if ($scope.indicatorEditForm.$valid) {
                        $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('contacts',file_archivo, name).then(function(data)
                            {
                                $scope.contact.archivo_adjunto=data.data;
                                $scope.updateIndicators();
                            });
                        }else{
                            $scope.updateIndicators();
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