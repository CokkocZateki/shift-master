app.service('authService',function($http,$window,$location){


	var saveUserDetails=function(data){

		$window.localStorage.setItem('userId',data.userId);
		$window.localStorage.setItem('token',data.token);
		$window.localStorage.setItem('name',data.name);

	};



	this.authenticate = function(user){


		return $http.post('/api/account/signin',user)

					.success(function(data){

						saveUserDetails(data);
	
					});


	};



	this.logout=function(){


		$window.localStorage.clear();
		$location.path('/');

	};

	
	this.isLoggedin=function(){


  		$token = $window.localStorage.getItem('token');

  		if($token){
		
			return true;
 		 }

  		return false;
	}


	this.getCurrentUser = function(){

			const user = {};

			user.userId = $window.localStorage.getItem('userId');

			return user;

	}




});