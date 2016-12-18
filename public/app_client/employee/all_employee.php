<ng-include src="'/app_client/shared/sidebar/sidebar.php'"></ng-include>

<top-navigation></top-navigation>

<div class="right_col" role="main" > 
        <ul>
	<li ng-repeat="e in employee.employeeList">
		
		<p>{{e.first_name}}</p><a href="/employee/{{e.id}}" ng-click="employee.getEmployee(e.id)">view</a>
	</li>
</ul>
</div>


       <footer></footer>