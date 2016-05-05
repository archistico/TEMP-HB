// crea il modulo e chiamalo scotchApp
var helpbookApp = angular.module('helpbookApp', ['ngRoute', 'n3-line-chart', 'ngSanitize']);

// configura gli instradamenti
helpbookApp.config(function ($routeProvider) {
    $routeProvider

            // route per pagina home
            .when('/', {
                templateUrl: 'pages/dashboard.php',
                controller: 'mainController'
            })

            // route per pagina
            .when('/rubrica', {
                templateUrl: 'pages/rubrica.php',
                controller: 'rubricaController'
            })

            // route per pagina
            .when('/opere', {
                templateUrl: 'pages/opere.php',
                controller: 'opereController'
            })

            .when('/movimenti', {
                templateUrl: 'pages/movimenti.php',
                controller: 'movimentiController'
            })

            .when('/movimentivisualizza', {
                templateUrl: 'pages/movimentivisualizza.php',
                controller: 'movimentivisualizzaController'
            })

            .when('/movimentinuovo', {
                templateUrl: 'pages/movimentinuovo.php',
                controller: 'movimentinuovoController'
            })

            .when('/opzioni', {
                templateUrl: 'pages/opzioni.php',
                controller: 'opzioniController'
            })

            .when('/operenuova', {
                templateUrl: 'pages/operenuova.php',
                controller: 'operenuovaController'
            })

            .when('/operevisualizza', {
                templateUrl: 'pages/operevisualizza.php',
                controller: 'operevisualizzaController'
            })

            .when('/soggettivisualizza', {
                templateUrl: 'pages/soggettivisualizza.php',
                controller: 'soggettivisualizzaController'
            })

            .when('/soggettinuovo', {
                templateUrl: 'pages/soggettinuovo.php',
                controller: 'soggettinuovoController'
            })


            ;
});

// create the controller and inject Angular's $scope
helpbookApp.controller('mainController', function ($scope, $http) {
    // create a message to display in our view
    $scope.message = 'Pagina principale';
    $scope.dataVendite = {
        dataset0: [
            {x: 0, val_0: 30},
            {x: 1, val_0: 44},
            {x: 2, val_0: 30},
            {x: 3, val_0: 35},
            {x: 4, val_0: 40},
            {x: 5, val_0: 60},
            {x: 6, val_0: 30},
            {x: 7, val_0: 25},
            {x: 8, val_0: 120},
            {x: 9, val_0: 30},
            {x: 10, val_0: 45},
            {x: 11, val_0: 60},
            {x: 12, val_0: 50}
        ]
    };
    
    $scope.dataEntrate = {
        dataset0: [
            {x: 0, val_0: 600},
            {x: 1, val_0: 1000},
            {x: 2, val_0: 1500},
            {x: 3, val_0: 1000},
            {x: 4, val_0: 1200},
            {x: 5, val_0: 1200},
            {x: 6, val_0: 805},
            {x: 7, val_0: 1200},
            {x: 8, val_0: 1000},
            {x: 9, val_0: 1100},
            {x: 10, val_0: 1000},
            {x: 11, val_0: 1200},
            {x: 12, val_0: 1500}
        ]
    };
    
    // column
    // type: ['line', 'dot', 'area'],
    
    $scope.optionsVendite = {
        series: [
            {
                axis: "y",
                dataset: "dataset0",
                key: "val_0",
                label: "Vendite",
                color: "#1f77b4",
                type: ['column'],
                id: 'mySeries0'
            }
        ],
        axes: {x: {key: "x"}}
    };
    
    $scope.optionsEntrate = {
        series: [
            {
                axis: "y",
                dataset: "dataset0",
                key: "val_0",
                label: "Entrate",
                color: "#1f77b4",
                type: ['column'],
                id: 'mySeries0'
            }
        ],
        axes: {x: {key: "x"}}
    };
    
    
    $scope.caricaCollane = function () {
    $http.get('ajax/getCollane.php').success(function (data) {
       $scope.list = data;
    });
    };
    
});

helpbookApp.controller('opereController', function ($scope) {
    $scope.message = 'Opere';
});

helpbookApp.controller('movimentiController', function ($scope) {

});

helpbookApp.controller('movimentinuovoController', function ($scope) {

});

helpbookApp.controller('rubricaController', function ($scope) {

});
 

