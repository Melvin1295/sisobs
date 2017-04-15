(function(){
    var app = angular.module('menus',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'menus.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();