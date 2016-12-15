app.controller('authCtrl',function(authService,$location){
var that =this;
this.actionStatus="Signin";
this.infoMessage = authService.infoMessage;

if(authService.isLoggedin()){
  
  $location.path('/dashboard');

}


this.login = (user)=>{
  
  this.actionStatus="Signing in"

	authService.authenticate(user).success(function(data){
    $location.path('/dashboard');  
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