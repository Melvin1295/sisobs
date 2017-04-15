(function(){
    var app = angular.module('publishers',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'publishers.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();