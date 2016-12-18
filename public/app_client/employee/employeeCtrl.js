app.controller('employeeCtrl',['$scope','$location','$routeParams','employeeService',function($scope,$location,$routeParams,employeeService){




	
		employeeService.getAllEmployee().success((data)=>{
      
      	this.employeeList= data;
    
    	}).error(function(data,status){
      
		this.errorMessage=data.error;
    });

    	this.getEmployee=(id)=>{


    	employeeService.getEmployee(id).success((data)=>{
      alert('request employee');
      	this.em= data;
      	console.log(this.em);
    
    	}).error(function(data,status){
      
		this.errorMessage=data.error;
    });
    	};


	
     
}]);