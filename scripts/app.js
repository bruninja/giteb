'use strict';

/**
 * @ngdoc overview
 * @name cicebrisApp
 * @description
 * # cicebrisApp
 *
 * Main module of the application.
 */
var app = angular.module('cicebrisApp', ['ngResource','ngRoute']);

  app.config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/sobre', {
        templateUrl: 'views/sobre.html',
        controller: 'CicebrisCtrl',
        controllerAs: 'sobre'
      })
      .when('/santodaime', {
        templateUrl: 'views/santodaime.html',
        controller: 'DaimeCtrl',
        controllerAs: 'daime'
      })
      .when('/calendario', {
        templateUrl: 'views/calendario.html',
        controller: 'CalendarioCtrl',
        controllerAs: 'calendario'
      })
      .when('/contato', {
        templateUrl: 'views/contato.html',
        controller: 'ContatoCtrl',
        controllerAs: 'contato'
      })
      .when('/anamnese', {
        templateUrl: 'views/anamnese/index.html',
        controller: 'AnamneseCtrl',
        controllerAs: 'anamnese'
      })
      .otherwise({
        redirectTo: '/'
      });

  });
