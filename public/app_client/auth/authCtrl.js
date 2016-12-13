app.controller('authCtrl',function(authService,$location){
var that =this;
this.actionStatus="Signin";

if(authService.isLoggedin()){
  
  $location.path('/test');

}


this.login = (user)=>{
  
  this.actionStatus="Signing in"

	authService.authenticate(user).success(function(data){
    $location.path('/test');  
  })
  .error((data,status)=>{
      
      this.actionStatus="Signin";
      this.errorMessage=data.error;
                   
  });;
}


this.logout = ()=>{

  authService.logout();

};



});