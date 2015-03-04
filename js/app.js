var app = angular.module('oxoilApp', []);


app.controller('MainController', function( $scope ){
    console.log('angularJS is working properly');
});

app.controller('FeatureProductsController', function( $scope ){
    console.log($scope.featureProducts);
    /*$scope.init = function(productData){
        $scope.featureProducts = productData;
    }*/
    /*$scope.featureProducts = [
        { id: 1, title : 'Base Oil', photo:  'http://www.argusmedia.com.br/~//~/media/Images/Hero-Box-530-by-335/Petroleum/Base-Oil.jpg', description: 'Base oils are used to manufacture products including lubricating greases, motor oil and metal processing fluids. Different products require different compositions and properties in the oil. One of the most important factors is the liquid’s viscosity at various temperatures.' },
        { id: 2, title : 'Fuel with Sulfur', photo:  'http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg', description: 'Fuels are any materials that store potential energy in forms that can be practicably released and used for work or as heat energy. ' },
        { id: 3, title : 'Gasoline', photo:  'http://www.thehindu.com/multimedia/dynamic/00497/IN08_GASOLINE1_497253f.jpg', description: 'Gasoline, also spelled gasolene, also called gas or petrol, mixture of volatile, flammable liquid hydrocarbons derived from petroleum and used as fuel for internal-combustion engines. It is also used as a solvent for oils and fats.' },
        { id: 4, title : 'Base Oil', photo:  'http://www.argusmedia.com.br/~//~/media/Images/Hero-Box-530-by-335/Petroleum/Base-Oil.jpg', description: 'Base oils are used to manufacture products including lubricating greases, motor oil and metal processing fluids. Different products require different compositions and properties in the oil. One of the most important factors is the liquid’s viscosity at various temperatures.' },
        { id: 5, title : 'Fuel with Sulfur', photo:  'http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg', description: 'Fuels are any materials that store potential energy in forms that can be practicably released and used for work or as heat energy. ' },
        { id: 6, title : 'Gasoline', photo:  'http://www.thehindu.com/multimedia/dynamic/00497/IN08_GASOLINE1_497253f.jpg', description: 'Gasoline, also spelled gasolene, also called gas or petrol, mixture of volatile, flammable liquid hydrocarbons derived from petroleum and used as fuel for internal-combustion engines. It is also used as a solvent for oils and fats.' }
    ];
    $scope.currentProduct = $scope.featureProducts[0];
    $scope.isCurrentlyActive = $scope.currentProduct.id ==  $scope.featureProducts[0].id ? true : false;

    $scope.featureSelect = function( id ){
        $scope.currentProduct = $scope.featureProducts[id];
        console.log(id);
    }*/

});