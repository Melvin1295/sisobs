(function(){
    angular.module('pages.controllers',[])
        .controller('PageController',['$window','$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($window,$scope, $routeParams,$location,crudService,$filter,$route,$log){
                   $scope.alert=true;              
                   $scope.bandera=true;  
                   $scope.bandera1=false;  
                   $scope.ultimaPublicacion = {};
                   $scope.publicaciones=[];
                   $scope.editoriales=[];
                   $scope.indicadores=[];
                   $scope.colaboradores=[];
                   $scope.colaboradores2=[];
                   $scope.ultPubicaciones=[];
                   $scope.indicador={};
                   $scope.editorial={};
                   $scope.publicacione={};
                   $scope.currentPage=1;
                    //Trae el ultimo registro ordenado por 
                  var id = $routeParams.id;

	                if(id){
	                	crudService.search('publisher_id',id,1).then(function (data){
	                        $scope.publicacione = data;
	                    });    
	                }else{
	                	crudService.getObject('getPublisher').then(function (data){
	                        $scope.ultPubicaciones = data;
	                    }); 
	                    crudService.all('colaboradores').then(function (data){
                            $scope.colaboradores=data.data;
                            $scope.colaboradoresFuncion();
	                    });


	                }
	                 if($location.path() == '/pages/editoriales') {
	                 	 crudService.search('editorials_all',0,$scope.currentPage).then(function (data){
	                        $scope.editoriales = data.data;
	                        $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 6;
	                    });
	                 }
	                  if($location.path() == '/pages/verEditorial/'+id) {
                            crudService.byId(id,"editorials").then(function (data){
                                $scope.editorial=data;
                            });
	                  }
	                  if($location.path() == '/pages/indicadores') {
                             crudService.search('indicators_all',0).then(function (data){
	                        $scope.indicadores = data.data;
	                     });
	                  }
                    $scope.cambiar_pestana = function(op) {
                        if (op===1) {
                            $scope.bandera=true;  
                            $scope.bandera1=false; 
                        }else{
                            $scope.bandera=false;  
                            $scope.bandera1=true; 
                        }

                    }
                 $scope.colaboradoresFuncion=function(valor){
                 	
                        $scope.colaboradores2[0]=$scope.colaboradores;		
                        console.log($scope.colaboradores2[0]);			
					}                	
                 
                 
                 $scope.verIndicador=function(row){
                     $scope.indicador=row;
                 }
                 $scope.verDetalle=function(item){
                 	  $location.path('/pages/publisherItem/'+item.id);                	
                 }
                 $scope.verEditorial=function(id){
                 	  $location.path('/pages/verEditorial/'+id);                	
                 }
                 $scope.pageChanged = function() {
                 	 crudService.search('publishers_all',0,$scope.currentPage).then(function (data) {
                            $scope.publicaciones = data.data;
                            $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 5;
                        });
                    
                };
                $scope.hola=function(){
                	alert("hola");
                }
                $scope.pageChanged2 = function() {
                 	 	 crudService.search('editorials_all',0,$scope.currentPage).then(function (data){
	                        $scope.editoriales = data.data;
	                        $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 6;
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
	               $scope.colaboradoresFuncion(0);
	               $scope.traerAll();
            }]);
})();
