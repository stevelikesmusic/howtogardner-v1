//Add a loop to add events to links

var overlay = document.createElement('div'), 
    adina = $('#adina'),
		baxter = $('#baxter'),
		wedding = $('#wedding'),
    august = $('#august'),
    body = document.querySelector('body'),
    
    image = document.createElement('img');
	
var linkPhotos = [adina, baxter, wedding, august];

overlay.setAttribute('id', 'overlay');
overlay.appendChild(image);
body.appendChild(overlay);


//Set click handler on links with images
for (var i = 0, length = linkPhotos.length; i < length; i++) {
  linkPhotos[i].on('click', function(e) {
    e.preventDefault();
    var imageName = e.target.id,
        href = 'img/' + imageName + '.jpg';
    
    image.setAttribute('src', href);
    overlay.style.display = 'block';
  });
}

//Hide overlay when clicked
overlay.onclick = function() {
  overlay.style.display = 'none';
};


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
			formName = $('#name').val(),
			separateName = formName.split(" ");
      console.log("Name: " + separateName);
			var lastName = separateName.pop().trim();
      console.log("Last Name: " + lastName);
      console.log(separateName);
			var firstName = separateName[0].trim();
      console.log("First Name: " + firstName);
			//Collect form input fields
			var dataString = $(this).serialize();
      console.log("Data: " + dataString);
			//Send form input values to mailer
			$.post(url, dataString, function(response) {
				//$('form').hide();
				console.log("Response: " + response);
				var thanks = "<p class='thanks'>" + firstName + ", you're fantastic! <br>I'll get back to you as soon as I can. Thanks for the email.</p>";
				$('#form-area').html(thanks);
			});						
});













