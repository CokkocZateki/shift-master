app.controller('navigationCtrl',function(authService,$window){

	this.user = authService.getCurrentUser();
	this.logout = function(){
		authService.infoMessage="Goodbye, see you soon!";
		authService.logout();
	}
});