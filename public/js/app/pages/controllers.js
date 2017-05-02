(function(){
    angular.module('pages.controllers',[])
        .controller('PageController',['$window','$scope', '$interval','$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($window,$scope,$interval, $routeParams,$location,crudService,$filter,$route,$log){
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
                   $scope.reclamo={};
                   $scope.reclamo.flag1=false;
                   $scope.reclamo.flag2=false;
                   $scope.reclamo.flag3=false;
                   $scope.reclamo.flag4=false;
                   $scope.currentPage=1;
                   $scope.index=0;
                   $scope.pageActual='';
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
                            $scope.pageActual ='1/'+$scope.colaboradores.length;
                            //$scope.colaboradores2=data.data;
                            //$scope.colaboradoresFuncion();
	                    });


	                }
	                 if($location.path() == '/pages/editoriales') {
	                 	 crudService.search('editorials_all',0,$scope.currentPage).then(function (data){
	                        $scope.editoriales = data.data;
                            for (var i = 0; i < $scope.editoriales.length; i++) {
                                $scope.editoriales[i].descripcion_corta.replace('\n','</br>');
                                $scope.editoriales[i].descripcion.replace('\n','</br>');
                            }
                            //$scope.editoriales[0].descripcion_corta.replace('\n','</br>');
                            //console.log($scope.editoriales[0].descripcion_corta);
	                        $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 6;
	                    });
	                 }
	                  if($location.path() == '/pages/verEditorial/'+id) {
                            crudService.byId(id,"editorials").then(function (data){
                                $scope.editorial=data;
                                $scope.editorial.descripcion.replace('\n','</br>');
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
                            
                            console.log("Entre pa");
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
                };
                
                //================RECLAMOS======================
                 $scope.registrarReclamo = function(){
                   if ($scope.reclamoCreateForm.$valid) {
                            $scope.reclamo.ubigeo_id=$scope.DistritoSelect;
                            if ($scope.reclamo.flag1) {
                                $scope.reclamo.flag1 = 1;
                            }else{
                              $scope.reclamo.flag1 = 0;
                            }
                            if ($scope.reclamo.flag2) {
                                $scope.reclamo.flag2 = 1;
                            }else{
                              $scope.reclamo.flag2 = 0;
                            }
                            if ($scope.reclamo.flag3) {
                                $scope.reclamo.flag3 = 1;
                            }else{
                              $scope.reclamo.flag3 = 0;
                            }
                            if ($scope.reclamo.flag4) {
                                $scope.reclamo.flag4 = 1;
                            }else{
                              $scope.reclamo.flag4 = 0;
                            }
                            $log.log($scope.reclamo);
                                crudService.create($scope.reclamo, 'reclamos').then(function (data) {
                                    
                                    if (data['estado'] == true) {
                                    //$scope.success = data['nombres'];
                                        alert('Reclamo Registrado Correctamente');
                                        //$location.path('/docentes');
                                        $scope.reclamo={};

                                    } else {
                                        $scope.errors = data;

                                    }
                                });
                    }                                  
                }
                 crudService.all('ubigeoDepartamento').then(function(data){  
                        $scope.Departamentos = data;
                    });
                $scope.CargarProvincia = function(){
                    $scope.Provincias ={};
                    $scope.ProvinciaSelect=null;
                    $scope.DistritoSelect=null;
                    crudService.recuperarUnDato('ubigeoProvincia',$scope.DepertamentoSelect).then(function(data){  
                        $scope.Provincias = data;
                        //$scope.provinciaSelect=data[0].provincia;
                    });
                }
                $scope.CargarDistrito = function(){
                    $scope.Distritos ={};
                    $scope.DistritoSelect=null;
                    crudService.recuperarDosDato('ubigeoDistrito',$scope.DepertamentoSelect,$scope.ProvinciaSelect).then(function(data){  
                        $scope.Distritos = data;
                    });
                }
                //================RECLAMOS======================
                 $scope.registrarMensaje = function(){
                   if ($scope.contactoCreateForm.$valid) {
                      crudService.create($scope.contacto, 'contacts').then(function (data) {
                          
                          if (data['estado'] == true) {
                          //$scope.success = data['nombres'];
                              alert('Mensaje Registrado Correctamente');
                              $scope.contacto={};
                              //$location.path('/pages/contact');
                              //$window.reload();

                          } else {
                              $scope.errors = data;

                          }
                      });
                    }                                  
                }
                //==============================================

                var slideIndex = 1;

 


$scope.plusSlides=function(n) {
	alert("echo");
	$scope.colaboradores2[0]=($scope.colaboradores[0]);
}

$scope.currentSlide=function(n) {
	
  if(n+1 == $scope.colaboradores.length ){
    $scope.index=0;
    $scope.pageActual ='1/'+$scope.colaboradores.length;
  }else{
  	$scope.index=n+1;
  	$scope.pageActual =''+(n+2)+'/'+$scope.colaboradores.length;
  }
	
}
$scope.currentSlideLess=function(n) {
	
  if(n == 0 ){
    $scope.index=n+1;
    $scope.pageActual =''+(n+2)+'/'+$scope.colaboradores.length;
  }else{
  	$scope.index=n-1;
  	$scope.pageActual =''+(n)+'/'+$scope.colaboradores.length;
  }
	
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

   $scope.format = 'M/d/yy h:mm:ss a';
        $scope.blood_1 = 100;
        $scope.blood_2 = 120;

        var stop;
        $scope.fight = function() {
          // Don't start a new fight if we are already fighting
          if ( angular.isDefined(stop) ) return;

          stop = $interval(function() {
            /*if ($scope.blood_1 > 0 && $scope.blood_2 > 0) {
              $scope.blood_1 = $scope.blood_1 - 3;
              $scope.blood_2 = $scope.blood_2 - 4;
            } else {
              $scope.stopFight();
            }*/
            //$scope.index=$scope.index+1;
           if( $scope.index+1 == $scope.colaboradores.length ){
    $scope.index=0;
    $scope.pageActual ='1/'+$scope.colaboradores.length;
  }else{
  	$scope.index=$scope.index+1;
  	$scope.pageActual =''+($scope.index+1)+'/'+$scope.colaboradores.length;
  }
          }, 4000);
        };
        $scope.fight();
        $scope.stopFight = function() {
          if (angular.isDefined(stop)) {
            $interval.cancel(stop);
            stop = undefined;
          }
        };

        $scope.resetFight = function() {
          $scope.blood_1 = 100;
          $scope.blood_2 = 120;
        };

        $scope.$on('$destroy', function() {
          // Make sure that the interval is destroyed too
          $scope.stopFight();
        });




            }]) .directive('myCurrentTime', ['$interval', 'dateFilter',
      function($interval, dateFilter) {
        // return the directive link function. (compile function not needed)
        return function(scope, element, attrs) {
          var format,  // date format
              stopTime; // so that we can cancel the time updates

          // used to update the UI
          function updateTime() {
            element.text(dateFilter(new Date(), format));
          }

          // watch the expression, and update the UI on change.
          scope.$watch(attrs.myCurrentTime, function(value) {
            format = value;
            updateTime();
          });

          stopTime = $interval(updateTime, 1000);

          // listen on DOM destroy (removal) event, and cancel the next UI update
          // to prevent updating time after the DOM element was removed.
          element.on('$destroy', function() {
            $interval.cancel(stopTime);
          });
        }
      }]);

})();
