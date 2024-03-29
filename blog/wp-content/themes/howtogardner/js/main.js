//Add a loop to add events to links

var adina = $('#adina'),
		baxter = $('#baxter'),
		treehouse = $('#treehouse'),
		wedding = $('#wedding');
	

var changeTo = function(photoName) {
	$('#portrait').attr('src', 'img/' + photoName + '.jpg');
}

var changeBack = function() {
	$('#portrait').attr('src', 'img/steve.jpg');
}

//Adina link
adina.mouseenter(function() {
	$('#portrait').attr('src', 'img/adina.jpg');
});
adina.on('click', function(e) {
	e.preventDefault();
});
$('#adina').mouseleave(changeBack);

//Baxter link
baxter.mouseenter(function() {
	$('#portrait').attr('src', 'img/baxter.jpg');
});
baxter.mouseleave(changeBack);
baxter.on('click', function(e) {
	e.preventDefault();
});

//Treehouse link
treehouse.mouseenter(function() {
	$('#portrait').attr('src', 'http://wac.a8b5.edgecastcdn.net/80A8B5/static-assets/assets/content/referral-badge-grn.png');
});

treehouse.mouseleave(changeBack);

//Wedding link
wedding.mouseenter(function() {
	$('#portrait').attr('src', 'img/wedding.jpg');
});
wedding.mouseleave(changeBack);
wedding.on('click', function(e) {
	e.preventDefault();
});



/*=====================================================
Form 
======================================================*/

//Client side validation

var submitButton = $('#submit');

//Disable submit button
submitButton.prop('disabled', true).addClass('disabled');

function areInputsFilled() {
	var name = $('#name').val(),
			email = $('#email').val(),
			message = $('#message').val();
	
	return name !== "" && email !== "" && message !== ""; 
}

function enableSubmitEvent() {
	submitButton.prop("disabled", !areInputsFilled());
	if (areInputsFilled()) {
		submitButton.removeClass('disabled');
	} else {
		submitButton.addClass('disabled');
	}
}

$('input').keyup(enableSubmitEvent);
$('textarea').keyup(enableSubmitEvent);

//When submit button is clicked
//Prevent default form submit
$('form').on('submit', function(e) {
	e.preventDefault();
	var url = 'contact.php',
			//Capture name and separate first and last
			formName = $('#form-name').val(),
			separateName = formName.split(" "),
			lastName = separateName.pop().trim(),
			firstName = separateName.trim(),
			//Collect form input fields
			dataString = $(this).serialize();
			//Send form input values to mailer
			$.post(url, dataString, function(response) {
				//$('form').hide();
				console.log("Response: " + response);
				var thanks = "<p class='thanks'>" + firstName + ", you're fantastic! <br>I'll get back to you as soon as I can. Thanks for the email.</p>";
				$('#form-area').html(thanks);
			});						 
});













