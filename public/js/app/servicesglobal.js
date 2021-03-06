(function(){
    angular.module('crud.services',[])
        .factory('crudService',['$http', '$q','$location', function($http, $q,$location){

            function all(uri)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/all')
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function search1(uri,q)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/search/'+q)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function search2(uri,q,id)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/search/'+q+'/'+id)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function allById(uri,value,page)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/allByID/'+value+'/?page='+page)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function allById1(uri,dep,value)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/allByID1/'+dep+'/'+value)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }


            function paginate(uri,page)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/paginate/?page='+page).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            function reporteRangFechas(uri,fechaini,fechafin){
                var deferred = $q.defer();
                $http.post('/api/'+uri+'/create/'+fechaini+'/'+fechafin).success(function (data) {
                    deferred.resolve(data);
                });
                return deferred.promise;

            }
            function deudasSupplier(page){
                var deferred = $q.defer();
                $http.get('api/suppliers/deudas/?page='+page).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
             function reportCod(uri,cant)
            {
                var deferred = $q.defer();
                $http.post('/api/'+uri+'/'+cant)
                    .success(function(data)
                    {
                        deferred.resolve(data);
                    }
                );
                return deferred.promise;
            }
            function create(area,uri)
            {
                var deferred = $q.defer();
                $http.post( '/api/'+uri+'/create', area )
                    .success(function (data)
                    {
                        deferred.resolve(data);
                    }).error(function(data)
                {
                    //$log.log(data);
                    alert('No se puede Agregar: Datos incorrectos o repetidos');
                });
                //    .error(function (data) //add for user , error send by 422 status
                //    {
                //        deferred.resolve(data);
                //    })
                ;
                return deferred.promise;
            }

            function update(area,uri)
            {
                var deferred = $q.defer();
                $http.put('/api/'+uri+'/edit', area )
                    .success(function(data)
                    {
                        deferred.resolve(data);
                    }
                );
                return deferred.promise;
            }

            function destroy(area,uri)
            {
                var deferred = $q.defer();
                $http.post('/api/'+uri+'/destroy', area )
                    .success(function(data)
                    {
                        deferred.resolve(data);
                    }
                ).error(function(data)
                {
                    alert('Item en USO');
                });
                return deferred.promise;
            }
            function byforeingKey(uri,fx,id){
               var deferred = $q.defer();
               $http.get('/api/'+uri+'/'+fx+'/'+id)
                .success(function(data){
                     deferred.resolve(data);
                });
                return deferred.promise;
            }

            function byId(id,uri) {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/find/'+id)
                    .success(function(data)
                    {
                        deferred.resolve(data);
                    }
                );
                return deferred.promise;
            }
            function getObject(uri) {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/get')
                    .success(function(data)
                    {
                        deferred.resolve(data);
                    }
                );
                return deferred.promise;
            }

            function search(uri,query,page){
                var deferred = $q.defer();
                var result = $http.get('/api/'+uri+'/search/'+query+'/?page='+page);

                result.success(function(data){
                        deferred.resolve(data);
                });
                return deferred.promise;
            }

            function searchMes(uri,mes,year,conc,page){
                var deferred = $q.defer();
                var result = $http.get('/api/'+uri+'/search/'+mes+'/'+year+'/'+conc+'/?page='+page);


                result.success(function(data){
                        deferred.resolve(data);
                });
                return deferred.promise;
            }


            function reportPro(uri,id){
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/'+id);
            }

            function reportProWare(uri,idStore,idWerehouse,val){
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/misDatos/'+idStore+'/'+idWerehouse+'/'+val)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }

            function select(uri,select)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/'+select)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function validar(uri,texto)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/validar/'+texto)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function Cuentas(id,uri)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/paginatep/'+id).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            
            function Comprueba_caj_for_user()
            {
                var deferred = $q.defer();
                $http.get('api/cashes/cajas_for_user').success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            function Comprueba_caj_for_user1(id)
            {
                var deferred = $q.defer();
                $http.get('api/cashes/cajas_for_user1/'+id).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            function Comprueba_caj_for_user2(id)
            {
                var deferred = $q.defer();
                $http.get('api/cashes/cajas_for_user2/'+id).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            function balance(uri,fecha1,fecha2)
            {
                var deferred = $q.defer();
                $http.get('api/'+uri+'/totales/'+fecha1+'/'+fecha2).success(function (data) {
                    deferred.resolve(data);
                });

                return deferred.promise;
            }
            function listaCashes(uri,alm)
            {
                var deferred = $q.defer();
                $http.get('/api/cashHeaders/cajasActivas/'+alm)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function Reportes10(uri,id)
            {
                var deferred = $q.defer();
                $http.post('/api/'+uri+'/create/'+id).success(function (data) {
                    deferred.resolve(data);
                });
                return deferred.promise;
            }
            function uploadFile(uri,file, name)
            {
                var deferred = $q.defer();
                var formData = new FormData();
                formData.append("name", name);
                formData.append("file", file);
                return $http.post('/api/'+uri+'/uploadFile/', formData, {
                    headers: {
                        "Content-type": undefined
                    },
                    transformRequest: angular.identity
                })
                .success(function(data)
                {
                    deferred.resolve(data);
                })
                .error(function(msg, code)
                {
                    deferred.reject(msg);
                })
                return deferred.promise;
            }
            function uploadFile1(uri,file, name,id)
            {
                var deferred = $q.defer();
                var formData = new FormData();
                formData.append("name", name);
                formData.append("file", file);
                return $http.post('/api/'+uri+'/uploadFile1/'+id, formData, {
                    headers: {
                        "Content-type": undefined
                    },
                    transformRequest: angular.identity
                })
                .success(function(data)
                {
                    deferred.resolve(data);
                })
                .error(function(msg, code)
                {
                    deferred.reject(msg);
                })
                return deferred.promise;
            }
            function recuperarUnDato(uri,dato)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/recuperarUnDato/'+dato)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            function recuperarDosDato(uri,dato1,dato2)
            {
                var deferred = $q.defer();
                $http.get('/api/'+uri+'/recuperarDosDato/'+dato1+'/'+dato2)
                    .success(function (data) {
                        deferred.resolve(data);
                    });

                return deferred.promise;
            }
            return {
                recuperarUnDato: recuperarUnDato,
                recuperarDosDato:recuperarDosDato,
                all: all,
                search1: search1,
                search2: search2,
                paginate: paginate,
                create:create,
                Reportes10: Reportes10,
                Comprueba_caj_for_user: Comprueba_caj_for_user,
                Comprueba_caj_for_user1: Comprueba_caj_for_user1,
                Cuentas:Cuentas,
                byId:byId,
                allById: allById,
                validar:validar,
                update:update,
                reporteRangFechas: reporteRangFechas,
                balance:balance,
                destroy:destroy,
                allById1: allById1,
                search: search,
                getObject: getObject,
                select:select,
                byforeingKey: byforeingKey,
                searchMes,searchMes,
                reportPro,reportPro,
                reportProWare,reportProWare,
                deudasSupplier: deudasSupplier,
                uploadFile: uploadFile,
                uploadFile1: uploadFile1,
                reportCod: reportCod,
                Comprueba_caj_for_user2: Comprueba_caj_for_user2,
                listaCashes: listaCashes
            }
        }])
        .factory('socketService', function ($rootScope) {
            var host = window.location.hostname;
            //var host = '192.168.0.26';
            var socket = io.connect('http://'+host+':3001');
            return {
                on: function (eventName, callback) {
                    socket.on(eventName, function () {
                        var args = arguments;
                        $rootScope.$apply(function () {
                            callback.apply(socket, args);
                        });
                    });
                },
                emit: function (eventName, data, callback) {
                    socket.emit(eventName, data, function () {
                        var args = arguments;
                        $rootScope.$apply(function () {
                            if (callback) {
                                callback.apply(socket, args);
                            }
                        });
                    })
                }
            };
        });
})();
