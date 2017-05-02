(function(){
    var app = angular.module('medicamentos',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'medicamentos.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();