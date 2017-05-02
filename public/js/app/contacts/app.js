(function(){
    var app = angular.module('contacts',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'contacts.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})(); 