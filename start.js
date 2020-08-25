document.getElementById("title").innerHTML = "Mid&#8209;Semester Break";
document.getElementById("endtext").innerHTML = "Other Important Days:<br>Staff Inset Day on Sep 26<br>Mid-Autumn Fest. on Oct 1-2<br>Digital Learning Drill Day on Oct 5<br>Double Ten Holiday on Oct 9";

var deadline = new Date("Oct 25, 2020 15:05:00").getTime();

var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML = ('0' + days).slice(-2);
document.getElementById("hour").innerHTML = ('0' + hours).slice(-2);
document.getElementById("minute").innerHTML = ('0' + minutes).slice(-2);
document.getElementById("second").innerHTML = ('0' + seconds).slice(-2); 
if (t < 0) { 
     clearInterval(x);
     document.getElementById("day").innerHTML = '00'; 
     document.getElementById("hour").innerHTML = '00'; 
     document.getElementById("minute").innerHTML = '00' ;
     document.getElementById("second").innerHTML = '00'; 
     document.getElementById("day").classList.add("blinking"); 
     document.getElementById("hour").classList.add("blinking"); 
     document.getElementById("minute").classList.add("blinking");
     document.getElementById("second").classList.add("blinking");
     document.getElementById("endtext").innerHTML = "Term Break has started!";}


var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML = ('0' + days).slice(-2);
document.getElementById("hour").innerHTML = ('0' + hours).slice(-2);
document.getElementById("minute").innerHTML = ('0' + minutes).slice(-2);
document.getElementById("second").innerHTML = ('0' + seconds).slice(-2); 
if (t < 0) { 
     clearInterval(x);
     document.getElementById("day").innerHTML = '00'; 
     document.getElementById("hour").innerHTML = '00'; 
     document.getElementById("minute").innerHTML = '00' ;
     document.getElementById("second").innerHTML = '00';
     document.getElementById("day").classList.add("blinking"); 
     document.getElementById("hour").classList.add("blinking"); 
     document.getElementById("minute").classList.add("blinking");
     document.getElementById("second").classList.add("blinking");
     document.getElementById("endtext").innerHTML = "Term Break has started!"; } 
}, 500);