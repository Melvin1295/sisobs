(function(){
    angular.module('publishers.controllers',[])
        .controller('PublisherController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.publishers = [];
                $scope.publisher;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('publishers',$scope.query,$scope.currentPage).then(function (data){
                        $scope.publishers = data.data;
                    });
                    }else{
                        crudService.paginate('publishers',$scope.currentPage).then(function (data) {
                            $scope.publishers = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.byId(id,'publishers').then(function (data) {
                        $scope.publisher = data;
                        $scope.publisher.fecha_publicacion = new Date($scope.publisher.fecha_publicacion);
                    });
                }else{
                    crudService.search('authorsdata',0,1).then(function (data){
                        $scope.autores = data.data;
                    });    
                    crudService.paginate('publishers',1).then(function (data) {
                        $scope.publishers = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });
                }

                $scope.searchPublishers = function(){
                if ($scope.query.length > 0) {
                    crudService.search('publishers',$scope.query,1).then(function (data){
                        $scope.publishers = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('publishers',1).then(function (data) {
                        $scope.publishers = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createPublishers = function(){
                        crudService.create($scope.publisher, 'publishers').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/publishers');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    
                }

                $scope.editPublishers = function(row){
                    $location.path('/publishers/edit/'+row.id);
                };

                $scope.updatePublishers = function(){
                        crudService.update($scope.publisher,'publishers').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('editado correctamente');
                                $location.path('/publishers');
                            }else{
                                $scope.errors =data;
                            }
                        });                    
                };
                $scope.updateEstadoPublishers = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'publishers').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deletePublishers = function(row){
                    $scope.publisher = row;
                }

                $scope.cancelPublishers= function(){
                    $scope.publisher = {};
                }

                $scope.destroyPublishers = function(){
                    crudService.destroy($scope.publisher,'publishers').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.publisher = {};
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

                    if ($scope.publisherCreateForm.$valid) {
                        $scope.bandera = true;
                        var archivo_imagen = $scope.archivo_imagen;
                        if (archivo_imagen!=undefined) {
                            crudService.uploadFile('publishers',archivo_imagen, name).then(function(data)
                            {
                                $scope.publisher.imagen=data.data;
                                $scope.funcion2();
                            });
                        }else{
                            $scope.publisher.imagen="";
                            $scope.funcion2();                            
                        }
                    }                       
                }
                $scope.funcion2 = function(){

                    var file_archivo = $scope.file_archivo;
                    if (file_archivo!=undefined) {
                        crudService.uploadFile('publishers',file_archivo, name).then(function(data)
                        {
                            $scope.publisher.archivo_adjunto=data.data;
                            $scope.createPublishers();
                        });
                    }else{
                        $scope.publisher.archivo_adjunto="";
                        $scope.createPublishers();
                    }
                }
                $scope.uploadEditFile = function()
                { 
                    //alert(uploadFile);
                    if ($scope.publisherEditForm.$valid) {
                        $scope.bandera = true;
                        var archivo_imagen = $scope.archivo_imagen;
                        if (archivo_imagen!=undefined) {
                            crudService.uploadFile('publishers',archivo_imagen, name).then(function(data)
                            {
                                $scope.publisher.imagen=data.data;
                                $scope.funcionEdit2();
                            });
                        }else{
                            $scope.funcionEdit2();                            
                        }
                    }                       
                }
                $scope.funcionEdit2 = function(){
                    var file_archivo = $scope.file_archivo;
                    if (file_archivo!=undefined) {
                        crudService.uploadFile('publishers',file_archivo, name).then(function(data)
                        {
                            $scope.publisher.archivo_adjunto=data.data;
                            $scope.updatePublishers();
                        });
                    }else{
                        $scope.updatePublishers();
                    }
                }
                //
                $scope.traer_id= function(){
                    var id=3;
                    crudService.search('publisher_id',id,1).then(function (data){
                        $scope.iddd = data;
                        console.log('$scope.iddd');
                        console.log($scope.iddd);
                    });
                }
                $scope.traer_id();
            }]);
})();