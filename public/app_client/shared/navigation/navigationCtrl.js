app.controller('navigationCtrl',function(authService){


	this.logout = function(){

		authService.logout();
	}
});