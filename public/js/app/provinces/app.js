(function(){
    var app = angular.module('provinces',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'provinces.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();