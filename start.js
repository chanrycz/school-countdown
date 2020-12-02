// Create XMLHttpRequest to fetch JSON data
const xhttp = new XMLHttpRequest();
xhttp.overrideMimeType("application/json");
xhttp.onreadystatechange = function () {
	if (xhttp.readyState == 4 && xhttp.status == "200") {
		const data = JSON.parse(xhttp.responseText);
		var eventMessage;
		var events_data;
		var dateParse;
		var dateFormatted;
        var deadline = new Date( data.countDate ).getTime();
        var endmessage = data.mainEndMessage;
        if(data.otherEvents.length != 0) {
            eventMessage = data.otherEventsTitle;
            events_data = data.otherEvents;
            for (var i in events_data) {
                if (events_data[i].hasOwnProperty("date")) {
                    if (events_data[i].hasOwnProperty("seperator")) {
                        dateParse = events_data[i].date;
                        dateFormatted = new Date(dateParse).toLocaleDateString(undefined, {month: 'short', day: 'numeric'});
                        eventMessage += "<br>" + events_data[i].name + events_data[i].seperator + dateFormatted;
                    } else {
                        dateParse = events_data[i].date;
                        dateFormatted = new Date(dateParse).toLocaleDateString(undefined, {month: 'short', day: 'numeric'});
                        eventMessage += "<br>" + events_data[i].name + " &mdash; " + dateFormatted;
                    }
                }
                else {
                    if (events_data[i].hasOwnProperty("seperator")) {
                        eventMessage += "<br>" + events_data[i].name + events_data[i].seperator + events_data[i].text;
                    } else {
                        eventMessage += "<br>" + events_data[i].name + " &mdash; " + events_data[i].text;
                    }
                }
            }
        } else {
            eventMessage = "";
            events_data = "";
        }
        
        var now = new Date().getTime(); 
        var t = deadline - now; 
        var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        var seconds = Math.floor((t % (1000 * 60)) / 1000); 
        document.getElementById("day").innerHTML = ("0" + days).slice(-2);
        document.getElementById("hour").innerHTML = ("0" + hours).slice(-2);
        document.getElementById("minute").innerHTML = ("0" + minutes).slice(-2);
        document.getElementById("second").innerHTML = ("0" + seconds).slice(-2);
        if (t < 0) { 
             clearInterval(x);
             document.getElementById("day").innerHTML = "00"; 
             document.getElementById("hour").innerHTML = "00"; 
             document.getElementById("minute").innerHTML = "00" ;
             document.getElementById("second").innerHTML = "00"; 
             document.getElementById("day").classList.add("blinking"); 
             document.getElementById("hour").classList.add("blinking"); 
             document.getElementById("minute").classList.add("blinking");
             document.getElementById("second").classList.add("blinking");
             document.getElementById("endtext").innerHTML = endmessage;}
        
        
        var x = setInterval(function() { 
        var now = new Date().getTime(); 
        var t = deadline - now; 
        var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        var seconds = Math.floor((t % (1000 * 60)) / 1000); 
        document.getElementById("day").innerHTML = ("0" + days).slice(-2);
        document.getElementById("hour").innerHTML = ("0" + hours).slice(-2);
        document.getElementById("minute").innerHTML = ("0" + minutes).slice(-2);
        document.getElementById("second").innerHTML = ("0" + seconds).slice(-2);
        if (t < 0) { 
             clearInterval(x);
             document.getElementById("day").innerHTML = "00"; 
             document.getElementById("hour").innerHTML = "00"; 
             document.getElementById("minute").innerHTML = "00" ;
             document.getElementById("second").innerHTML = "00";
             document.getElementById("day").classList.add("blinking"); 
             document.getElementById("hour").classList.add("blinking"); 
             document.getElementById("minute").classList.add("blinking");
             document.getElementById("second").classList.add("blinking");
             document.getElementById("endtext").innerHTML = endmessage; } 
        }, 500);
        
		document.getElementById("title").innerHTML = data.mainEvent;
        document.getElementById("endtext").innerHTML = eventMessage;
	}
};
xhttp.open("GET", "events.json", true);
xhttp.send();