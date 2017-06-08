(function(){
    angular.module('excels.controllers',[])
        .controller('ExcelController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
               
              $scope.departaments={};
              $scope.provinces={};
              $scope.distrits={};
              $scope.indicators={};
              $scope.indicatorData={};
              $scope.archivo='';
              $scope.indicatorData.departament_id=0;
              $scope.indicatorData.province_id=0;
              $scope.indicatorData.distrit_id =0;
              $scope.indicatorData.indicator_id=0;
              $scope.tipoIndicador=0;
              $scope.listInidcadores={}; //nuevo variable XD

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

                    crudService.all('indicators').then(function(data)
                  {
                     $scope.indicators=data;
                  });
                  crudService.all('idicadoresData').then(function (data){
                        $scope.listInidcadores = data;
                    });
                $scope.import1=function(){
                    $scope.indicatorData.numero=$scope.tipoIndicador;
                    crudService.create($scope.indicatorData,'excel').then(function(data)
                      {
                         if(data.estado ==true){
                            alert("registrado Correctamente.");
                         }
                      });
                }
                 $scope.uploadFile = function(){                     
                        $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                       if(($scope.indicatorData.departament_id+$scope.indicatorData.province_id+$scope.indicatorData.distrit_id 
                      +$scope.indicatorData.indicator_id) > 0 ){
                        
                    
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('excel',file_archivo, name).then(function(data)
                            {
                                $scope.indicatorData.archivo=data.data;
                                $scope.import1();
                            });
                        }else{
                             alert("No se a seleccionado un archivo");
                        }     
                    }else{
                        alert("Deve seleccionar al menos una caracteristica!!");
                    }                                   
                }
               
            }]);
})();