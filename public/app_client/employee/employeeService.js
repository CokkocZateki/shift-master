app.service('employeeService',['$http',function($http){


	this.getAllEmployee = function(){


		return $http.get('/api/employee');


	}

	this.getEmployee = function(id){

		console.log('requesting'+'/api/employee/'+id);
		return $http.get('/api/employee/'+id);


	}


}]);