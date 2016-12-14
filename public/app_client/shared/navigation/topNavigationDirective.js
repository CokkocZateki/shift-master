app.directive('topNavigation',function(){
	

	return{

		restrict:'E',
		templateUrl:'app_client/shared/navigation/top_navigation.php',
		replace:true,
		controller: 'navigationCtrl',
		controllerAs:'navigation'




	}
});