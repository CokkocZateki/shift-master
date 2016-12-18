<ng-include src="'/app_client/shared/sidebar/sidebar.php'"></ng-include>

<top-navigation></top-navigation>

<div class="right_col" role="main" >
<p>Employee details</p> {{emplyee.employeeList.length}}
<h1>{{employee.em.first_name}}</h1>
  <ul>
	<li ng-repeat="e in employee.employeeList">
		
		<p>{{e.first_name}}</p><a href="/employee/{{e.id}}" ng-click="employee.getEmployee(e.id)">view</a>
	</li>
</div>


       <footer></footer>