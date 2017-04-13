(function(){
    angular.module('routes',[])
        .config(['$routeProvider','$locationProvider', function ($routeProvider,$locationProvider) {
            $routeProvider
            // ------------------------------------------------------
            .when('/pages', {
                    templateUrl: '/js/app/pages/views/index.html',
                    controller: 'PageController'
                })
                 
          
                //----------------------------------------------------------------------
            .when('/employees', {
                    templateUrl: '/js/app/employees/views/index.html',
                    controller: 'EmployeeController'
                })
                .when('/employees/create',{
                    templateUrl:'/employees/form-create',
                    controller: 'EmployeeController'
                })
                
                .when('/employees/edit/:id',{
                    templateUrl:'/employees/form-edit',
                    controller: 'EmployeeController'
                }) 
                //-----------------------------------------------  
            
                //-----------------------------------------------          
                .when('/stores', {
                    templateUrl: '/js/app/stores/views/index.html',
                    controller: 'StoreController'
                })
                .when('/stores/create',{
                    templateUrl:'/stores/form-create',
                    controller: 'StoreController'
                })
                .when('/stores/edit/:id',{
                    templateUrl:'/stores/form-edit',
                    controller: 'StoreController'
                })                
                
                .when('/users', {
                    templateUrl: '/js/app/users/views/index.html',
                    controller: 'UserController'
                })
                .when('/users/create',{
                    templateUrl:'/users/form-create',
                    controller: 'UserController'
                })
                .when('/users/edit/:id',{
                    templateUrl:'/users/form-edit',
                    controller: 'UserController'
                })
                
                .when('/employees', {
                    templateUrl: '/js/app/employees/views/index.html',
                    controller: 'EmployeeController'
                })
                .when('/employees/create',{
                    templateUrl:'/employees/form-create',
                    controller: 'EmployeeController'
                })
                .when('/employees/edit/:id',{
                    templateUrl:'/employees/form-edit',
                    controller: 'EmployeeController'
                })
                
                
                .otherwise({
                    redirectTo: '/'
                });
            $locationProvider.html5Mode(true);
        }]);

})();
