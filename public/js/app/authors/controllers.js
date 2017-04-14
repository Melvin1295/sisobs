(function(){
    angular.module('authors.controllers',[])
        .controller('AuthorController',['$scope', '$routeParams','$location','crudService','$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                $scope.authors = [];
                $scope.author={};
                $scope.errors = null;
                $scope.close;
                $scope.codigo;
                $scope.mostraragregar;
                $scope.mostrarver;
                $scope.estado=false;
                $scope.ngenabled=true;
                $scope.employeecost={};
                $scope.employeecosts;
                $scope.author.autogenerado = true;
                $scope.query = '';
                $scope.author.estado=1;
                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                     //$scope.author.estado='1';
                    if ($scope.query.length > 0) {
                        crudService.search('authors',$scope.query,$scope.currentPage).then(function (data){
                        $scope.authors = data.data;
                    });
                    }else{
                        crudService.paginate('authors',$scope.currentPage).then(function (data) {
                            $scope.authors = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    //$scope.author.estado=1;
                    crudService.byId(id,'authors').then(function (data) {
                        $log.log(data);
                        if(data.fechanac != null) {
                            if (data.fechanac.length > 0) {

                                data.fechanac = new Date(data.fechanac);
                                $log.log(data.fechanac);
                                //data.author.fechanac = new Date(data.fechanac);
                            }
                        }
                       

                        $scope.author = data;
                        $scope.author.autogenerado = false;
                    });
                    
                }else{
                    //$scope.author.estado='1';
                    crudService.paginate('authors',1).then(function (data) {
                        $scope.authors = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 15;

                    });
                }

                
                 
                 
                $scope.searchAuthor = function(){
                if ($scope.query.length > 0) {
                    crudService.search('authors',$scope.query,1).then(function (data){
                        $scope.authors = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('authors',1).then(function (data) {
                        $scope.authors = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
               
                    
                };


                $scope.createAuthor = function(){ 

                    if ($scope.authorCreateForm.$valid){
                        var f = document.getElementById('authorImage').files[0] ? document.getElementById('authorImage').files[0] : null;
                        //alert(f);

                        var r = new FileReader();
                        r.onloadend = function(e) {
                            $scope.author.imagen = e.target.result;
                                //alert(e.target.result);
                           crudService.create($scope.author, 'authors').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/authors');

                            } else {
                                $scope.errors = data;

                            }
                        });
                        }
                        if(!document.getElementById('authorImage').files[0]){

                        crudService.create($scope.author, 'authors').then(function (data) {
                           
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('Grabado correctamente');
                                $location.path('/authors');

                            } else {
                                $scope.errors = data;

                            }
                        });}

                        if(document.getElementById('authorImage').files[0]){
                            r.readAsDataURL(f);
                        }

                    }
                    ///--------------------------------------------------------------
                }
               

                $scope.editAuthor = function(row){
                    $location.path('/authors/edit/'+row.id);
                };

                $scope.updateAuthor = function(){

                    if ($scope.authorCreateForm.$valid){
                        var f = document.getElementById('authorImage').files[0] ? document.getElementById('authorImage').files[0] : null;
                        //alert(f);

                        var r = new FileReader();
                        r.onloadend = function(e) {
                            $scope.author.imagen = e.target.result;
                           // alert("aqui estoy");
                            crudService.update($scope.author, 'authors').then(function (data) {

                                if (data['estado'] == true) {
                                    $scope.success = data['nombres'];
                                    alert('Editado correctamente');
                                    $location.path('/authors');

                                } else {
                                    $scope.errors = data;

                                }
                            });
                        }
                        if(!document.getElementById('authorImage').files[0]){

                            crudService.update($scope.author, 'authors').then(function (data) {

                                if (data['estado'] == true) {
                                    $scope.success = data['nombres'];
                                    alert('Editado correctamente');
                                    $location.path('/authors');

                                } else {
                                    $scope.errors = data;

                                }
                            });}

                        if(document.getElementById('authorImage').files[0]){
                            r.readAsDataURL(f);
                        }

                    }



                };

                $scope.deleteAuthor = function(row){
                    $scope.author = row;
                }

                $scope.cancelAuthor = function(){
                    $scope.author = {};
                }

                $scope.destroyAuthor = function(){
                    crudService.destroy($scope.author,'authors').then(function(data)
                    {
                         if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.author = {};
                            
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
               
                $scope.variable2=function(){
                    $scope.estado=false;
                }

                  
                $scope.activarDesac=function(){
                    $scope.ngenabled=false;
                }
                $scope.desacAct=function(){
                    $scope.ngenabled=true;
                }
               
                
            }]);
})();