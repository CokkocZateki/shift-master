app.controller('navigationCtrl',['$scope','$window','authService',function($scope,$window,authService){


	this.loggedUser = authService.getCurrentUser();
	

	/**
	 * [logout logs user out]
	 * @return {[void]} [redirect to login page]
	 */
	this.logout = function(){
		this.user =null;
		authService.infoMessage="Goodbye, see you soon!";
		authService.logout();
	}
}]);