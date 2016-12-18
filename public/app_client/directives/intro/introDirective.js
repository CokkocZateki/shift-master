/*
 * Directive to animate landing page intro logo
 */


app.directive('intro',['$interval','$timeout',function($interval,$timeout){

	return{

		restrict:'A',
		link:function(scope,element,attrs){

			$timeout(function(){

			
				element.css('font-size','53px');
				element.css('transform','translateY(-180px)');


			},700);
			

		}

	}



}]);

/**
 * slides login container up
 */

app.directive('slide',['$interval','$timeout',function($interval,$timeout){

	return{

		restrict:'A',
		link:function(scope,element,attrs){

			$timeout(function(){

		
				element.css('transform','translateY(-180px)');
				element.css('opacity','1');


			},1900)
			

		}

	}



}]);