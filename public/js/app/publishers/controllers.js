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
                    crudService.byId(id,'publishers').then(function (data) {
                        $scope.publisher = data;
                    });
                }else{
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
                    if ($scope.storeCreateForm.$valid) {
                        crudService.create($scope.publisher, 'publishers').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('grabado correctamente');
                                $location.path('/publishers');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }

                $scope.editPublishers = function(row){
                    $location.path('/publishers/edit/'+row.id);
                };

                $scope.updatePublishers = function(){
                   if ($scope.storeCreateForm.$valid) {
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
                    }
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
            }]);
})();