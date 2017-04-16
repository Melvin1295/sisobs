(function(){
    angular.module('pages.controllers',[])
        .controller('PageController',['$window','$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($window,$scope, $routeParams,$location,crudService,$filter,$route,$log){
                  $scope.alert=true;              
                    
                   $scope.ultimaPublicacion = {};
                   $scope.publicaciones=[];
                   $scope.currentPage=1;
                    //Trae el ultimo registro ordenado por fecha
                 $scope.pageChanged = function() {
                 	 crudService.search('publishers_all',0,$scope.currentPage).then(function (data) {
                            $scope.publicaciones = data.data;
                            $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 5;
                        });
                    
                };
                $scope.traerUltimo= function(){
                    crudService.search('publishersUltimo',0,1).then(function (data){
                        $scope.ultimaPublicacion = data;
                        console.log('$scope.ultimo');
                        console.log($scope.ultimo);
                    });
                }
                //trae todos los registros paginados en 15
                $scope.traerAll= function(){
                    crudService.search('publishers_all',0,$scope.currentPage).then(function (data){
                        $scope.publicaciones = data.data;
                        $scope.maxSize = 10;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 5;
                    });
                }
                    $scope.traerAll();
            }]);
})();
