app.controller('profileCtrl',function($scope,authService){

var currentUser =authService.getCurrentUser();
var employee_id=currentUser.employeeId;
console.log(employee_id);

this.user=currentUser;


});