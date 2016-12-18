
/**
 * Authentication Controller handles login
 */

app.controller('authCtrl',['$scope','$location','authService',function($scope,$location,authService){


  this.actionStatus="Signin";
  this.infoMessage = authService.infoMessage;

  //redirect to dashboard if loggedin already.
  if(authService.isLoggedin()){
  
    $location.path('/dashboard');

  };

  /**
   * [login user]
   * @param  {object} user [json object]
   * @return {[ void]}      [redirect to dashboard/login page]
   */
  
  this.login = (user)=>{
    this.infoMessage=null;
    this.actionStatus="Signing in";

  	authService.authenticate(user).success(function(data){
      
      $location.path('/dashboard');  
    })
    
    .error((data,status)=>{
        
      this.actionStatus="Signin";
      this.errorMessage=data.error;
                     
    });;
  
  };


}]);