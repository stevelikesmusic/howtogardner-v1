$(document).ready(function() {
	var brush = 'white';
	
	$('.button').click(function() {
		if ($(this).hasClass('red')) {
			brush = 'red';
		} else if ($(this).hasClass('blue')) {
				brush = 'blue';
		} else if ($(this).hasClass('yellow')) {
			brush = 'yellow';
		} else if ($(this).hasClass('white')) {
			brush = 'white';  
		} else {
			brush = 'black';
		}
		console.log(brush);
	}); 
		
		
	$('.cell').click(function() {
		$(this).css('backgroundColor', brush);	
	});

	$('button').click(function() {
		$('.cell').css('backgroundColor', 'white');
});



});

