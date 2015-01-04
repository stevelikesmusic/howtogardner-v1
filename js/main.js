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












