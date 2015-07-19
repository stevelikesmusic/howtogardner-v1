//(Math.random().toString(16) + '0000000').slice(2, 8));

$(document).ready(function() {
  $('button').click(function() {
      var color = '#'+(Math.random().toString(16) + '0000000').slice(2, 8);
      $('body').css('backgroundColor', color);      
      $('h1').css('color', color);
      console.log(color);
  });
});
