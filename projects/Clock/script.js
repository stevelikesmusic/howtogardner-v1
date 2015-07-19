var startButton = document.getElementById('start');
var stopButton = document.getElementById('stop');
var dayWeek = document.getElementById('day');
var calDate = document.getElementById('date');
var meridien = "AM";
var count;
var daysArray = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var monthsArray = ["January","February","March","April","May","June","July","August","September","October","November","December"];


//Runs clock
var updateClock = function () {
  var clock = document.getElementById('clock'),
      currentTime = new Date(),
      currentHours = currentTime.getHours(),
      currentMinutes = currentTime.getMinutes(),
      currentSeconds = currentTime.getSeconds(),
      year = 1900 + currentTime.getYear(),

      monthPlace = currentTime.getMonth(),
      date = currentTime.getDate(),
      dayPlace = currentTime.getDay();

      month = monthsArray[monthPlace];
      day = daysArray[dayPlace];


  //Sets currentHours for 12hour AM PM
  if (currentHours > 12) {
    currentHours = currentHours - 12;
    meridien = "PM";   
  }
  
  //adds 0 placeholder to minutes
  if (currentMinutes < 10) {
    currentMinutes = "0" + currentMinutes;  
  }

  //adds 0 placeholder to seconds
  if (currentSeconds < 10) { 
    currentSeconds = "0" + currentSeconds;
  }

  //Display day of the week
  dayWeek.innerHTML = day;

  //Display calendar date
  calDate.innerHTML = month + " " + date + ", " + year;

  //displays the time in clock div
  clock.innerHTML = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridien;
}
 

//Starts clock
var startClock = function() {	
  count = setInterval(updateClock, 500);
}

//Stops clock
var stopClock = function () {   
  clearInterval(count);
  console.log('Stopping...');
}


//Start clock event
startButton.addEventListener('click', startClock);

//Stop clock event
stopButton.addEventListener('click', stopClock);