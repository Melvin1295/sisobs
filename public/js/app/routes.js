(function(){
    angular.module('routes',[])
        .config(['$routeProvider','$locationProvider', function ($routeProvider,$locationProvider) {
            $routeProvider
            // ------------------------------------------------------
            .when('/pages', {
                    templateUrl: '/js/app/pages/views/index.html',
                    controller: 'PageController'
                }) 
            .when('/pages/blog', {
                    templateUrl: '/pages/form-blog',
                    controller: 'PageController'
                })
            .when('/pages/contact', {
                    templateUrl: '/pages/form-contact',
                    controller: 'PageController'
                })

            .when('/pages/editoriales', {
                    templateUrl: '/pages/form-editorials',
                    controller: 'PageController'
                })
             .when('/pages/publisherItem/:id', {
                    templateUrl: '/pages/form-publisherItem',
                    controller: 'PageController'
                })
             .when('/pages/verEditorial/:id', {
                    templateUrl: '/pages/form-verEditorial',
                    controller: 'PageController'
                })


            .when('/pages/indicadores', {
                    templateUrl: '/pages/form-indicadores',
                    controller: 'PageController'
                })
                 
          
                //----------------------------------------------------------------------
            .when('/authors', {
                    templateUrl: '/js/app/authors/views/index.html',
                    controller: 'AuthorController'
                })
                .when('/authors/create',{
                    templateUrl:'/authors/form-create',
                    controller: 'AuthorController'
                })
                
                .when('/authors/edit/:id',{
                    templateUrl:'/authors/form-edit',
                    controller: 'AuthorController'
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
                
                /*.when('/employees', {
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
                })*/
                //-----------------------------------------------          
                .when('/publishers', {
                    templateUrl: '/js/app/publishers/views/index.html',
                    controller: 'PublisherController'
                })
                .when('/publishers/create',{
                    templateUrl:'/publishers/form-create',
                    controller: 'PublisherController'
                })
                .when('/publishers/edit/:id',{
                    templateUrl:'/publishers/form-edit',
                    controller: 'PublisherController'
                })
                //-----------------------------------------------          
                .when('/editorials', {
                    templateUrl: '/js/app/editorials/views/index.html',
                    controller: 'EditorialController'
                })
                .when('/editorials/create',{
                    templateUrl:'/editorials/form-create',
                    controller: 'EditorialController'
                })
                .when('/editorials/edit/:id',{
                    templateUrl:'/editorials/form-edit',
                    controller: 'EditorialController'
                })  
                //-----------------------------------------------          
                .when('/sliders', {
                    templateUrl: '/js/app/sliders/views/index.html',
                    controller: 'SliderController'
                })
                .when('/sliders/create',{
                    templateUrl:'/sliders/form-create',
                    controller: 'SliderController'
                })
                .when('/sliders/edit/:id',{
                    templateUrl:'/sliders/form-edit',
                    controller: 'SliderController'
                }) 
                //-----------------------------------------------          
                .when('/provinces', {
                    templateUrl: '/js/app/provinces/views/index.html',
                    controller: 'ProvinceController'
                })
                .when('/provinces/create',{
                    templateUrl:'/provinces/form-create',
                    controller: 'ProvinceController'
                })
                .when('/provinces/edit/:id',{
                    templateUrl:'/provinces/form-edit',
                    controller: 'ProvinceController'
                }) 
                //-----------------------------------------------          
                .when('/indicators', {
                    templateUrl: '/js/app/indicators/views/index.html',
                    controller: 'IndicatorController'
                })
                .when('/indicators/create',{
                    templateUrl:'/indicators/form-create',
                    controller: 'IndicatorController'
                })
                .when('/indicators/edit/:id',{
                    templateUrl:'/indicators/form-edit',
                    controller: 'IndicatorController'
                }) 
                //-----------------------------------------------          
                .when('/menus', {
                    templateUrl: '/js/app/menus/views/index.html',
                    controller: 'MenuController'
                })
                .when('/menus/create',{
                    templateUrl:'/menus/form-create',
                    controller: 'MenuController'
                })
                .when('/menus/edit/:id',{
                    templateUrl:'/menus/form-edit',
                    controller: 'MenuController'
                })   
                //-----------------------------------------------          
                .when('/colaboradores', {
                    templateUrl: '/js/app/colaboradores/views/index.html',
                    controller: 'ColaboradorController'
                })
                .when('/colaboradores/create',{
                    templateUrl:'/colaboradores/form-create',
                    controller: 'ColaboradorController'
                })
                .when('/colaboradores/edit/:id',{
                    templateUrl:'/colaboradores/form-edit',
                    controller: 'ColaboradorController'
                })  
                //-----------------------------------------------          
                .when('/contacts', {
                    templateUrl: '/js/app/contacts/views/index.html',
                    controller: 'contactController'
                })                
                              
                
                
                .otherwise({
                    redirectTo: '/'
                });
            $locationProvider.html5Mode(true);
        }]);

})();
