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

	.when('/',{
			
			controller 		: 	'authCtrl',
			controllerAs 	: 	'auth',
			templateUrl 	: 	'app_client/auth/login.php' })


		.when('/dashboard',{
			
			templateUrl 	:   'app_client/dashboard.php' })


		.when('/employee',{

			controller 		: 	'employeeCtrl',
			controllerAs 	: 	'employee',
			templateUrl 	:   'app_client/employee/all_employee.php'})


		.when('/employee/:param',{

			controller 		: 	'employeeCtrl',
			controllerAs 	: 	'employee',
			templateUrl 	:   'app_client/employee/employee.php'})


		.when('/test',{
	
			templateUrl :'app_client/test.php' })

		.otherwise({

		redirectTo:'/' });



	$locationProvider.html5Mode(true);

});