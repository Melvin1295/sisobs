(function(){
    var app = angular.module('editorials',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'editorials.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();