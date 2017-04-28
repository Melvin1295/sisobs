(function(){
    var app = angular.module('reportemedicamentos',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'reportemedicamentos.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();