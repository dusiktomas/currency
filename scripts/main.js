(function(){
    var currencyController = function ($scope) {
      $scope.information = {
        userId:  '123456',
        currencyFrom:  'EUR',
        currencyTo:  'GBP',
        ammountSell:  '1000',
        ammountBuy:  '747.10',
        rate:  '0.7471',
        timePlaced:  '24-JAN-15 10:27:44',
        originatingCountry:  'FR',
      };
      $scope.buildJson = function(){
        return JSON.stringify($scope.information);
      }; 
    };
    angular.module('CurrencyTrade', ['ngSanitize'])
      .controller('currencyController', currencyController)
    ;
  }());
