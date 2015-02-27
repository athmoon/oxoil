var app = angular.module('oxoilApp', []);

app.controller('MainController', function( $scope ){
    console.log('angularJS is working properly');
});

app.controller('FeatureProductsController', function( $scope ){
    $scope.featureProducts = [
        { title : 'Base Oil', photo:  'http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }
    ];
    $scope.featureSelect = function( id ){
        console.log(id);
    }
});