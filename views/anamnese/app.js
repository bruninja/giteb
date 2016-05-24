
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
.controller('formController', function($scope, $http) {

    // we will store all of our form data in this object
    $scope.formData = {};

    // pessoa
    // $scope.ficha = null;


    // function to process the form
    $scope.processForm = function() {

        // $scope.formData.push($scope.ficha);

        // window.console.log($scope.formData);
        // dataform = {};
        // dataform = $scope.formData;



        $http({
          url: "php/scri.php",
          method: "POST",
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          data: $scope.formData
        }).success(function(resp){
          $scope.codeStatus =  resp.data;
          window.console.log('Sucesso');
          window.console.log($scope.formData);
          // window.location="php/scri.php";

        }).error(function(resp){
          $scope.codeStatus = resp||"Failed";
          window.console.log('Erro');
        });
    };

});
