var app = angular.module('oxoilApp', []);

app.controller('MainController', function( $scope ){
    console.log('angularJS is working properly');
});

app.controller('FeatureProductsController', function( $scope ){

    $scope.featureProducts = [
        { id: 1, title : 'Base Oil', photo:  'http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' },
        { id: 2, title : 'Fuel with Sulfur', photo:  'http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg', description: 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }
    ];
    $scope.currentProduct = $scope.featureProducts[0];
    $scope.isCurrentlyActive = $scope.currentProduct.id ==  $scope.featureProducts[0].id ? true : false;

    $scope.featureSelect = function( id ){
        $scope.currentProduct = $scope.featureProducts[id - 1];
        console.log(id);


    }

});