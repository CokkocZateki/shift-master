app.controller('profileCtrl',['$scope','authService','userService',function($scope,authService,userService){

var currentUser =authService.getCurrentUser();
var employeeId=currentUser.employeeId;
var userId = currentUser.id;
userService.getProfile(userId).success((response)=>{
      console.dir(response.data.employee.data);
      	
    this.user=response.data.employee.data.lastName;
    	}).error(function(data,status){
      
		console.log('error occured');
		console.dir(data);
    });


}]);