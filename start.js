var deadline = new Date("Aug 24, 2020 8:00:00").getTime();

var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML = days;
document.getElementById("hour").innerHTML = hours;
document.getElementById("minute").innerHTML = minutes;
document.getElementById("second").innerHTML = seconds;
if (t < 0) {
     clearInterval(x);
     document.getElementById("day").innerHTML = '0';
     document.getElementById("hour").innerHTML = '0';
     document.getElementById("minute").innerHTML = '0';
     document.getElementById("second").innerHTML = '0';
     document.getElementById("day").classList.add("blinking");
     document.getElementById("hour").classList.add("blinking");
     document.getElementById("minute").classList.add("blinking");
     document.getElementById("second").classList.add("blinking");
     document.getElementById("endtext").innerHTML = "Summer has ended!";
}


var x = setInterval(function () {
     var now = new Date().getTime();
     var t = deadline - now;
     var days = Math.floor(t / (1000 * 60 * 60 * 24));
     var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((t % (1000 * 60)) / 1000);
     document.getElementById("day").innerHTML = days;
     document.getElementById("hour").innerHTML = hours;
     document.getElementById("minute").innerHTML = minutes;
     document.getElementById("second").innerHTML = seconds;
     if (t < 0) {
          clearInterval(x);
          document.getElementById("day").innerHTML = '0';
          document.getElementById("hour").innerHTML = '0';
          document.getElementById("minute").innerHTML = '0';
          document.getElementById("second").innerHTML = '0';
          document.getElementById("day").classList.add("blinking");
          document.getElementById("hour").classList.add("blinking");
          document.getElementById("minute").classList.add("blinking");
          document.getElementById("second").classList.add("blinking");
          document.getElementById("endtext").innerHTML = "Summer has ended!";
     }
}, 1000);