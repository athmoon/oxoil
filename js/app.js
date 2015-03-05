var app = angular.module('oxoilApp', []);


app.controller('MainController', function( $scope ){
    console.log('angularJS is working properly');
    console.log($scope.featureProducts);
});

app.controller('FeatureProductsController', ['$scope', function( $scope ){
    //$scope.featureProducts = [];

    $scope.initFeature = function(productData){
        $scope.featureProducts = productData;
        $scope.currentProduct = $scope.featureProducts[0];
    };

     $scope.featureSelect = function( product ){
         $scope.currentProduct = product;
     }


}]);
