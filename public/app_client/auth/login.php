
<div class="row">
    <div class="splash-screen" >
        <h1 class="text-xs-center" intro>Shiftmaster</h1>
        <div class="row">
            <div class="col-sm-4 offset-sm-4 login" slide>
                <div class="alert alert-danger" ng-show="auth.errorMessage">{{ auth.errorMessage}}</div>
                <form name="loginForm" role="form"  ng-submit="auth.login(user)"novalidate>
                    <div class="form-group" ng-class="{'has-error':loginForm.email.$invalid && !loginForm.email.$pristine}">
                        <input type="email" name="email" class="form-control" placeholder="Email" ng-model="user.email" ng-blur="blur=true" ng-focus="blur=false" required>
                        <p class="error" ng-show="loginForm.email.$invalid && !loginForm.email.$pristine && ng-blur">Please enter valid email</p>
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" class="form-control" placeholder="Password" ng-model="user.password" required>
                    </div>
                    <div class="from-group">
                        <button class="btn btn-login form-control" ng-disabled="loginForm.$invalid &&  !loginForm.$pristine">{{auth.actionStatus}}</button>
                    </div>

                </form>
                <a href="/test"><small>Forgot password</small></a>

            </div>
           
            <p class="copyright"><small>&copy 2016 SproutTech</small></p>
        </div>
    </div>
</div>