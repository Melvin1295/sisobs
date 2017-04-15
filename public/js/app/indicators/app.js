(function(){
    var app = angular.module('indicators',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'indicators.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();