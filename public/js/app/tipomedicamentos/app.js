(function(){
    var app = angular.module('tipomedicamentos',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'tipomedicamentos.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();