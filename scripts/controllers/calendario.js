'use strict';

/**
 * @ngdoc function
 * @name cicebrisApp.controller:CalendarioCtrl
 * @description
 * # CalendarioCtrl
 * Controller of the cicebrisApp
 */
angular.module('cicebrisApp')
  .controller('CalendarioCtrl', function ($scope) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
    $scope.ano = new Date();
  });
