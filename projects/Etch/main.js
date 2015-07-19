var etch = $('#eas-screen'),
	board = $('#eas');
	$box = $('.box');

// Find RGB background
function findRBG() {

}

// Change background color
function changeBackground() {

}

// Grid function
function grid() {

	// Empty grid
	etch.html("");
	
	// Create grid
	var width = $('#new-width').val(),
		boxSize = 480 / width;
	
	for (var i = 0; i < width; i += 1) {
		var row = $('<div class="row" id="' + i + '"></div>').css('height', boxSize + "px");
		for (var ib = 0; ib < width; ib += 1) {
			$('<span class="box"></span>').css({'width': boxSize + "px", 'height': boxSize + "px"}).appendTo(row);
		}
		etch.append(row);
	}
	
	// Color box when mouse hovers
	$('.box').mouseenter(function() {
		if (board.hasClass('erase')) {
			board.removeClass('erase');
		}
		curOp = parseFloat($(this).css('opacity'));
		$(this).css('opacity', curOp + .1);
	});
}

// Set new width on click
$('#set-width').on('click', grid);

// Set new width with enter
$('#new-width').on('keydown', function(e) {
	if (e.which == 13) 
		grid();	
});

// Reset grid
$('#reset').on('click', function() {
	$('#eas').addClass('erase');
	$('.box').animate({opacity: 0}, 1000);
});

$(grid);