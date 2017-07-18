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
                   $scope.departaments={};
                   $scope.provinces={};
                   $scope.distrits={};
                   $scope.reclamo={};
                   $scope.currentPage=1;
                   $scope.index=0;
                   $scope.pageActual='';
                   

                   $scope.indicadoresDataDep={};
                   $scope.indicadoresDataProv={};
                   $scope.indicadoresDataDist={};
                   $scope.dataIndicadorGlobal={};

                   $scope.submenu1='activemenuNuevo';
                   $scope.submenu2='none';
                   $scope.submenu3='none';
                   $scope.submenu4='none';

                   $scope.submenud1='Indicadores Globales';
                   $scope.list=0;
                   $scope.ciudad=1;
                   $scope.ciudad1=1;
                   $scope.ciudad2=2;

                   $scope.pageActual=''; 

                   $scope.tipoQuejas =[];
                   $scope.tipoPublicaciones = [];
                   $scope.numeroTipoQueja=1;
                   $scope.banderaCategoriaSeleionada=false;
                   //$scope.categoriaSelecionada = 2;
                    //Trae el ultimo registro ordenado por 

                    $scope.selectMenuIten=1;
                    $scope.selectMenu=function(id) {
                      $scope.selectMenuIten=id;
                  }

                    $scope.cargarTipoQuejas=function() {
                      crudService.search('tipoquejadata',' ').then(function (data){
                        $scope.tipoQuejas = data;
                        for (var i = $scope.tipoQuejas.length - 1; i >= 0; i--) {
                          $scope.tipoQuejas[i].flag=false;
                        }
                    });
                  }
                  var id = $routeParams.id;

	                if(id){
	                	crudService.search('publisher_id',id,1).then(function (data){
	                        $scope.publicacione = data;
	                    }); 

                    crudService.search('tipopublicaciondata',0,1).then(function (data){
                        $scope.tipoPublicaciones = data;
                    }); 
                          
	                }else{ 
	                	crudService.getObject('getPublisher').then(function (data){
	                        $scope.ultPubicaciones = data;
                          console.log(data);
	                    }); 
	                    crudService.all('colaboradores').then(function (data){
                            $scope.colaboradores=data.data;
                            $scope.pageActual ='1/'+$scope.colaboradores.length;
                            //$scope.colaboradores2=data.data;
                            //$scope.colaboradoresFuncion();
	                    });

                      $scope.cargarTipoQuejas();

                      crudService.search('tipopublicaciondata',0,1).then(function (data){
                        $scope.tipoPublicaciones = data;
                    }); 

                      crudService.search('menus_all',0,1).then(function (data){
                        $scope.menus = data;
                    }); 
                       


	                }
                    

	                 if($location.path() == '/pages/editoriales') {
	                 	 crudService.search('editorials_all',0,$scope.currentPage).then(function (data){
	                        $scope.editoriales = data.data;
                            /*for (var i = 0; i < $scope.editoriales.length; i++) {
                                $scope.editoriales[i].descripcion_corta.replace('\\n','</br>');
                                $scope.editoriales[i].descripcion.replace('\\n','</br>');
                                
                            }*/
                            console.log("entre");
                            console.log(data);
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
                              $scope.verIndicador($scope.indicadores[0]);
	                     });
	                  }
                    crudService.all('departament').then(function(data)
                  {
                      $scope.departaments=data;                     
                  });

                   crudService.all('provinces').then(function(data)
                  {
                     $scope.provinces=data;
                  });

                    crudService.all('distrits').then(function(data)
                  {
                     $scope.distrits=data;
                  });
                  $scope.search;
                  $scope.departamentIdFiltro;
                  $scope.provinceIdFiltro;
                     $scope.searchIndicador=function(val){
                          if(val ==''){
                            val='0';
                          }
                          crudService.search('indicators_all',val).then(function (data){
                             $scope.indicadores = data.data;
                              $scope.verIndicador($scope.indicadores[0]);
                       });
                     }
                     $scope.searchDepartament=function(val){
                      if(val ==''){
                            val='0';
                          }
                          crudService.search1('departament',val).then(function(data){
                              $scope.departaments=data; 
                          })
                     }
                     $scope.searchProvincias=function(val){
                      if(val ==''){
                            val='0';
                          }
                          crudService.search2('provinces',val,$scope.departamentIdFiltro).then(function(data){
                              $scope.provinces=data; 
                            //   if(val == 3){
                      $scope.submenu1='none';
                      $scope.submenu2='none';
                      $scope.submenu3='activemenuNuevo';
                      $scope.submenu4='none';
                      $scope.submenud1='Provincias de '+$scope.valor;
                       $scope.list=2
                       $log.log($scope.provinces[0]);
                       $scope.verIndicadorP($scope.provinces[0]);
                   //}
                          })
                     }
                     $scope.searchDistrit=function(val){
                      if(val ==''){
                            val='0';
                          }
                          crudService.search2('distrits',val,$scope.provinceIdFiltro).then(function(data){
                              $scope.distrits=data; 
                              
                      $scope.submenu1='none';
                      $scope.submenu2='none';
                      $scope.submenu3='none';
                      $scope.submenu4='activemenuNuevo'; 
                      $scope.submenud1='Distritos de '+$scope.valor1+'/'+$scope.valor;
                       $scope.list=3;
                        $scope.verIndicadorZ($scope.distrits[0]);
                   
                          })
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
					}                	
                 $scope.valor='';
                 $scope.valor1='';
                 $scope.cambiarSumenu1=function(val,item,is){
                  if(is== 1){
                     $scope.valor=item.nombre;
                     $scope.departamentIdFiltro=item.id;
                     $scope.searchProvincias('0');
                  }else{
                      $scope.valor1=item.nombre;
                      $scope.provinceIdFiltro=item.id
                      $scope.searchDistrit('0');
                  }
                  
                  //alert($scope.valor);
                   /*f(val == 1){
                      $scope.submenu1='activemenuNuevo';
                      $scope.submenu2='none';
                      $scope.submenu3='none';
                      $scope.submenu4='none';
                      $scope.submenud1='Indicadores Globales';
                      $scope.list=0
                      $scope.verIndicador($scope.indicadores[0]);
                   }
                    if(val == 2){
                      $scope.submenu1='none';
                      $scope.submenu2='activemenuNuevo';
                      $scope.submenu3='none';
                      $scope.submenu4='none';
                      $scope.submenud1='Indicadores por Departamento';
                       $scope.list=1;
                       $scope.verIndicadorD($scope.departaments[0]);
                   }*/

                    
                   
                 }
                  $scope.cambiarSumenu=function(val){
                   if(val == 1){
                      $scope.submenu1='activemenuNuevo';
                      $scope.submenu2='none';
                      $scope.submenu3='none';
                      $scope.submenu4='none';
                      $scope.submenud1='Indicadores Globales';
                      $scope.list=0
                      $scope.verIndicador($scope.indicadores[0]);
                   }
                    if(val == 2){
                      $scope.submenu1='none';
                      $scope.submenu2='activemenuNuevo';
                      $scope.submenu3='none';
                      $scope.submenu4='none';
                      $scope.submenud1='Indicadores por Departamento';
                       $scope.list=1;
                       $scope.verIndicadorD($scope.departaments[0]);
                   }
                    /*if(val == 3){
                      $scope.submenu1='none';
                      $scope.submenu2='none';
                      $scope.submenu3='activemenuNuevo';
                      $scope.submenu4='none';
                      $scope.submenud1='Indicadores por Provincia';
                       $scope.list=2
                       $scope.verIndicadorP($scope.provinces[0]);
                   }
                    if(val == 4){
                      $scope.submenu1='none';
                      $scope.submenu2='none';
                      $scope.submenu3='none';
                      $scope.submenu4='activemenuNuevo';
                      $scope.submenud1='Indicadores por Distrito';
                       $scope.list=3;
                        $scope.verIndicadorZ($scope.distrits[0]);
                   }*/
                   
                 }
                 $scope.verIndicador=function(row){
                     $scope.indicador=row;
                     //$log.log($scope.indicador);
                     //alert(row.id);
                     crudService.allById('searchByIndicator',row.id).then(function (data) {
                            $scope.dataIndicadorGlobal = data;
                        });
                 }
                 $scope.verIndicadorD=function(row){
                       $scope.ciudad=row.id;
                      crudService.allById('searchByDepartament',row.id,1).then(function (data) {
                            $scope.indicadoresDataDep = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                 }
                 $scope.pageChangedDep = function(page) {
                  //alert(page);
                    crudService.allById('searchByDepartament',$scope.ciudad,page).then(function (data) {
                            $scope.indicadoresDataDep = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                 }
                 
                 $scope.verIndicadorP=function(row){
                    // 
                     if(row == undefined){
                         $scope.indicadoresDataProv = {};
                     }else{
                        $scope.ciudad1=row.id;
                         crudService.allById('searchByProvincia',row.id,1).then(function (data) {
                            $scope.indicadoresDataProv = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                     }
                    
                 }
                 $scope.verIndicadorZ=function(row){
                     if(row == undefined){
                        $scope.indicadoresDataDist ={};
                     }else{
                        $scope.ciudad2=row.id;
                        crudService.allById('searchByDistrito',row.id,1).then(function (data) {
                            $scope.indicadoresDataDist = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                     }
                     
                    
                 }
                 $scope.pageChangedProv = function(page) {
                  //alert(page);
                    crudService.allById('searchByProvincia',$scope.ciudad1,page).then(function (data) {
                            $scope.indicadoresDataProv = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                 }
                 $scope.pageChangedDist = function(page) {
                  //alert(page);
                    crudService.allById('searchByDistrito',$scope.ciudad2,page).then(function (data) {
                            $scope.indicadoresDataDist = data.data;
                            $scope.maxSize1 = 15;
                            $scope.totalItems1 = data.total;
                            $scope.currentPage1 = data.current_page;
                            $scope.itemsperPage1 = 2;
                        });
                 }
                $scope.verIndicadorExcel=function(row){
                       window.open('/api/exportIndicatod/allByID/'+row);
                 }
                 $scope.verIndicadorDExcel=function(row){                      
                      
                      window.open('/api/exportIndicatodD/allByID1/'+$scope.ciudad+'/'+row);
                 }
                 $scope.verIndicadorPExcel=function(row){
                    
                     window.open('/api/exportIndicatodP/allByID1/'+$scope.ciudad1+'/'+row);
                 }
                 $scope.verIndicadorZExcel=function(row){
                    
                     window.open('/api/exportIndicatodZ/allByID1/'+$scope.ciudad2+'/'+row);
                 }
                 $scope.verDetalle=function(item){ 
                  //$location.path('/pages/publisherItem/');
                 	  //$location.path('/pages/publisherItem/'+item.id); 
                    window.open('/pages/publisherItem/'+item.id,'_parent');               	
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
                	
                }
                $scope.pageChanged2 = function() {
                 	 	 crudService.search('editorials_all',0,$scope.currentPage).then(function (data){
	                        $scope.editoriales = data.data;
                          console.log("entre");
                            
	                        $scope.maxSize = 10;
	                        $scope.totalItems = data.total;
	                        $scope.currentPage = data.current_page;
	                        $scope.itemsperPage = 6;
	                    });
                    
                };
                $scope.traerUltimo= function(){
                    crudService.search('publishersUltimo',0,1).then(function (data){
                        $scope.ultimaPublicacion = data;
                    });
                };
                
                //================RECLAMOS======================
                 $scope.registrarReclamo = function(){
                   if ($scope.reclamoCreateForm.$valid) {
                            $scope.reclamo.ubigeo_id=$scope.DistritoSelect;
                            
                            $scope.reclamo.tipoQuejas=$scope.tipoQuejas;
                            $log.log($scope.reclamo);

                                crudService.create($scope.reclamo, 'reclamos').then(function (data) {
                                    
                                    if (data['estado'] == true) {
                                        alert('Reclamo Registrado Correctamente');
                                        $scope.reclamo={};
                                         $scope.cargarTipoQuejas();

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
                //==========================================
                  $scope.filtroTipoQuejas=function(num) {
                      $scope.numeroTipoQueja=num;
                  }

                  
                //================CONTACTO======================
                 $scope.registrarMensaje = function(){
                   if ($scope.contactoCreateForm.$valid) {

                      crudService.create($scope.contacto, 'contacts').then(function (data) {
                          
                          if (data['estado'] == true) {
                              alert('Mensaje Registrado Correctamente');
                              $scope.contacto={};


                          } else {
                              $scope.errors = data;
                          }
                      });
                    }                                  
                }

                 
                //==============================================
                  $scope.selectCategoria=function(categoria,cambiar){
                    if (cambiar) {
                      $location.path('/pages/blog');
                    }
                    $scope.categoriaSelecionada=categoria;
                    $scope.banderaCategoriaSeleionada=true;
                    //$scope.traerAll();
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
