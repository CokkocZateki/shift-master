/*
|--------------------------------------------------------------------------
| Application Route
|--------------------------------------------------------------------------
|
| Contains front-endd application routes 
| AngularJs Routes
| 
| 
*/






app.config(function($routeProvider,$locationProvider){


	$routeProvider

	.when("/",{
			controller:'authCtrl',
			controllerAs:'auth',
			templateUrl :"app_client/auth/login.php" })

		.when("/dashboard",{
	
			templateUrl :"app_client/dashboard.php" })

	.otherwise({

		redirectTo:'/' });



	$locationProvider.html5Mode(true);

});