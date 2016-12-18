app.service('authService',['$window','$location','$http',function($window,$location,$http){

	this.infoMessage = null;
	

	/**
	 * [saveUserDetails private function to store logged user details in local storage]
	 * @param  {[type]} data [description]
	 * @return {[type]}      [description]
	 */
	var saveUserDetails = function(data){

		$window.localStorage.setItem('userId',data.userId);
		$window.localStorage.setItem('token',data.token);
		$window.localStorage.setItem('employeeId',data.employeeId);
		$window.localStorage.setItem('name',data.name);

	};


	/**
	 * [authenticate authenticate user]
	 * @param  {[type]} user [description]
	 * @return {[type]}      [description]
	 */
	this.authenticate = function(user){
		
		this.infoMessage = null;
		
		return $http.post('/api/account/signin',user)

					.success(function(data){

						saveUserDetails(data);
	
					});


	};


	/**
	 * [dlogout logs user out and clear local storage]
	 * @return {[type]} [description]
	 */
	this.logout = ()=>{


		$window.localStorage.clear();
		
		this.infoMessage = "Gooodbye, see you soon!";
		
		 $location.path('/');

	};


	/**
	 * [isLoggedin check if user is loggedin already]
	 * @return {Boolean} [return true if logged in ]
	 */
	this.isLoggedin=function(){


  		$token = $window.localStorage.getItem('token');

  		if($token){
		
			return true;
 		 }

  		return false;
	};


	/**
	 * [getCurrentUser description]
	 * @return {[type]} [description]
	 */
	this.getCurrentUser = function(){

			const user = {};

			user.id 		= $window.localStorage.getItem('userId');
			user.name 		= $window.localStorage.getItem('name');
			user.employeeId	=$window.localStorage.getItem('employeeId');
			
			return user;

	}



}]);