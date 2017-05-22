(function(){
    angular.module('reportemedicamentos.controllers',[])
        .controller('ReporteMedicamentoController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log','$window',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log,$window){
                $scope.reportemedicamentos = [];
                $scope.reportemedicamento;
                $scope.errors = null;
                $scope.success;
                $scope.query = '';
                $scope.medicamentos=[];
                $scope.tipo_reporte=[];
                $scope.rango_busqueda;
                $scope.anios=["2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014",
                "2015","2016","2017","2018","2019","2020"];
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('reportemedicamentos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.reportemedicamentos = data.data;
                    });
                    }else{
                        crudService.paginate('reportemedicamentos',$scope.currentPage).then(function (data) {
                            $scope.reportemedicamentos = data.data;
                        });
                    }
                };
                //alert("Hola");

                var id = $routeParams.id;

                if(id)
                {  
                    crudService.byId(id,'reportemedicamentos').then(function (data) {
                        $scope.reportemedicamento = data;
                        $scope.reportemedicamento.fecha_publicacion = new Date($scope.reportemedicamento.fecha_publicacion);
                    });
                }else{   
                    crudService.paginate('reportemedicamentos',1).then(function (data) {
                        $scope.reportemedicamentos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 2;

                    });

                    crudService.search('medicamentos_all',' ').then(function (data){
                        $scope.medicamentos = data;
                        console.log($scope.medicamentos);
                        for (var i = $scope.medicamentos.length - 1; i >= 0; i--) {
                          $scope.medicamentos[i].flag=false;
                        }
                    });

                    crudService.search('tipo_reporte_all',0,1).then(function (data){
                        $scope.tipo_reporte = data;
                        console.log($scope.tipo_reporte);
                    }); 
                }

                $scope.searchReporteMedicamentos= function(){
                if ($scope.query.length > 0) {
                    crudService.search('reportemedicamentos',$scope.query,1).then(function (data){
                        $scope.reportemedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('reportemedicamentos',1).then(function (data) {
                        $scope.reportemedicamentos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createReporteMedicamentos = function(){
                    if ($scope.reporteMedicamentoCreateForm.$valid) {
                        $scope.reportemedicamento.medicamentos=$scope.medicamentos;
                        crudService.create($scope.reportemedicamento, 'reportemedicamentos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/reportemedicamentos');
                                $window.location.reload();

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                    //if ($scope.detreportemedicamentos.length > 0 ) {
                        //$scope.reportemedicamento.detreporte=$scope.detreportemedicamentos;
                        
                        /*crudService.create($scope.reportemedicamento, 'reportemedicamentos').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/reportemedicamentos');

                            } else {
                                $scope.errors = data;

                            }
                        });*/
                    //}else{
                        //alert("Reporte algun medicamento");
                    //}
                }

                $scope.editReporteMedicamentos = function(row){
                    $location.path('/reportemedicamentos/edit/'+row.id);
                };

                $scope.updateReporteMedicamentos = function(){
                   if ($scope.menuEditForm.$valid) {
                        crudService.update($scope.reportemedicamento,'reportemedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('Editado correctamente');
                                $location.path('/reportemedicamentos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                $scope.updateEstadoReporteMedicamentos = function(row){
                    if (row.estado === 1) {
                        row.estado=0;
                    }else{
                        row.estado=1;
                    }
                        crudService.update(row,'reportemedicamentos').then(function(data)
                        {
                            if(data['estado'] == true){
                            }else{
                                $scope.errors =data;
                            }
                        });
                };

                $scope.deleteReporteMedicamentos= function(row){
                    $scope.reportemedicamento = row;
                }

                $scope.cancelReporteMedicamentos= function(){
                    $scope.reportemedicamento = {};
                }

                $scope.destroyReporteMedicamentos = function(){
                    crudService.destroy($scope.reportemedicamento,'reportemedicamentos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.reportemedicamento = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
                //----------------------------------------------------
                $scope.detreportemedicamentos=[];
                $scope.detreportemedicamento={};
                $scope.medicamentoSelected=undefined;
                $scope.getService = function(val) {
                  return crudService.recuperarUnDato('buscarmedicamento',val).then(function(response){
                    return response.map(function(item){
                      return item;
                    });
                  });
                };


                $scope.addMedicamento = function(){
                    if ($scope.medicamentoSelected==undefined) {
                        alert("Seleccione Correctamente un Medicamento");
                        $scope.medicamentoSelected=undefined;
                    }else{
                        $scope.detreportemedicamento.medicamento_id=$scope.medicamentoSelected.id;
                        $scope.detreportemedicamento.medicamento=$scope.medicamentoSelected.descripcion;
                        $scope.detreportemedicamento.anio=$scope.reportemedicamento.anio;
                        $scope.detreportemedicamento.mes=$scope.reportemedicamento.mes;
                        $scope.detreportemedicamento.tipo=$scope.reportemedicamento.tipo;
                        $scope.detreportemedicamento.descripcion=$scope.reportemedicamento.descripcion;

                        $scope.detreportemedicamentos.push($scope.detreportemedicamento);
                        $scope.detreportemedicamento = {};
                        $scope.reportemedicamento={}
                        $scope.medicamentoSelected=undefined;
                        console.log($scope.detreportemedicamentos);
                    }
                }
                $scope.destroyMedicamento = function($index){
                    $scope.detreportemedicamentos.splice($index,1);
                }

                $scope.generarExcel= function(){
                    console.log("Hola !!");
                    crudService.all('reportemedicamentos-excel').then(function (data){
                        //$scope.reportemedicamentos = data.data;
                    });
                    
                };

                $scope.mostrarMedicamentos = function (det_medicamentos) 
                {
                    $scope.det_medicamentos=det_medicamentos;
                }

                $scope.buscar = function() {
                    if ($scope.buscarForm.$valid) {
                        $scope.rango_busqueda.fecha_fin.setDate($scope.rango_busqueda.fecha_fin.getDate()+1);
                        if ($scope.rango_busqueda.fecha_inicio<$scope.rango_busqueda.fecha_fin) {
                            var fecha_inicio = $filter('date')($scope.rango_busqueda.fecha_inicio,'yyyy-MM-dd');
                            var fecha_fin = $filter('date')($scope.rango_busqueda.fecha_fin,'yyyy-MM-dd');
                            console.log(fecha_fin);
                            window.open('http://apisisobs.dev/api/reportemedicamentos-excel/recuperarDosDato/'+fecha_inicio+'/'+fecha_fin)
                            $route.reload();
                            $window.location.reload();   
                        }else{
                            alert("La fecha final debe ser mayor a la fecha inicial");
                        }
                        
                    }

                    //window.reload();
                    /*crudService.recuperarDosDato('reportemedicamentos-excel',fecha_inicio,fecha_fin).then(function (data){
                       
                       return data;
                    });*/
                }
            }]);
})();