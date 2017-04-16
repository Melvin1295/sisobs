(function(){
    angular.module('pages.controllers',[])
        .controller('PageController',['$window','$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($window,$scope, $routeParams,$location,crudService,$filter,$route,$log){
                  $scope.alert=true;              
                    
                   $scope.ultimaPublicacion = {};
                   $scope.publicaciones=[];
                    //Trae el ultimo registro ordenado por fecha

                $scope.traerUltimo= function(){
                    crudService.search('publishersUltimo',0,1).then(function (data){
                        $scope.ultimaPublicacion = data;
                        console.log('$scope.ultimo');
                        console.log($scope.ultimo);
                    });
                }
                //trae todos los registros paginados en 15
                $scope.traerAll= function(){
                    crudService.search('publishers_all',0,1).then(function (data){
                        $scope.publicaciones = data.data;
                        console.log('$scope.todos');
                        console.log($scope.todos);
                        console.log(data);
                    });
                }
                    $scope.traerAll();
            }]);
})();
