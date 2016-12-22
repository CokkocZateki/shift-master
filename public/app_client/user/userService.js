app.service('userService',['$http',function($http){


	this.getProfile = function(id){
		console.log('employye id is '+id);

			return $http.get('api/users/'+id);
	}



}]);