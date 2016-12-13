app.controller('authCtrl',function(authService,$location){
var that =this;

this.login = function(user){

	authService.authenticate(user).success(function(data){
                           	$location.path('/test');  
                             
                })
                .error((data,status)=>{
                   
                   this.errorMessage=data.error;
                   console.log(data.error);
                   console.log(user.email);
                });;
}


});