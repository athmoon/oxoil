var app = angular.module('oxoilApp', []);

app.controller('MainController', function( $scope ){
    console.log('angularJS is working properly');
});

app.controller('FeatureProductsController', function( $scope ){
    $scope.featureSelect = function( id ){
        console.log(id);
    }
});