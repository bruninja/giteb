
// create our angular app and inject ngAnimate and ui-router
// =============================================================================
angular.module('formApp', ['ngAnimate', 'ui.router'])

// configuring our routes
// =============================================================================
.config(function($stateProvider, $urlRouterProvider) {

    $stateProvider

        // route to show our basic form (/form)
        .state('form', {
            url: '/form',
            templateUrl: 'form.html',
            controller: 'formController'
        })

        // nested states
        // each of these sections will have their own view
        // url will be nested (/form/dados)
        .state('form.dados', {
            url: '/dados',
            templateUrl: 'form-dados.html'
        })

        // url will be /form/saude
        .state('form.saude', {
            url: '/saude',
            templateUrl: 'form-saude.html'
        })

        // url will be /form/espiritualidade
        .state('form.espiritualidade', {
            url: '/espiritualidade',
            templateUrl: 'form-espiritualidade.html'
        })
        .state('form.termo', {
          url: '/termo',
          templateUrl: 'form-termo.html'
        });

    // catch all route
    // send users to the form page
    $urlRouterProvider.otherwise('/form/dados');
})

// our controller for the form
// =============================================================================
.controller('formController', function($scope) {

    // we will store all of our form data in this object
    $scope.formData = {};

    // function to process the form
    $scope.processForm = function() {
        alert('awesome!');
    };

});
