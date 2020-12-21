let content1 = document.getElementById('content1');
let locate = document.getElementById('locate');
const doc = document.getElementById('dayOfWeek');
const days = new Date();
const day = days.getDay();

// link location
if (locate != null) {
  locate.innerHTML = 'Page location is ' + window.location.href;
}
//
// Following switch is from The Complete JavaScript Course 2020: From Zero to Expert! at Udemy
// --------------------------------------------------------------------------
switch (day) {
  case 0:
    doc.innerHTML = 'Today is Sunday';
    break;
  case 1:
    doc.innerHTML = 'Today is Monday';
    break;
  case 2:
    doc.innerHTML = 'Today is Tuesday';
    break;
  case 3:
    doc.innerHTML = 'Today is Wednesday';
    break;
  case 4:
    doc.innerHTML = 'Today is Thursday';
    break;
  case 5:
    doc.innerText = 'Today is Friday';
    break;
  case 6:
    doc.innerHTML = 'Today is Saturday';
    break;
  default:
    doc.innerHTML = 'No day is a good day';
}
