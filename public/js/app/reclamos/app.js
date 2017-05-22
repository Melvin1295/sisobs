(function(){
    var app = angular.module('reclamos',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'reclamos.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
        
    ]);
})();