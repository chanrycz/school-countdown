const xhttp=new XMLHttpRequest;xhttp.overrideMimeType("application/json"),xhttp.onreadystatechange=function(){if(4==xhttp.readyState&&"200"==xhttp.status){const s=JSON.parse(xhttp.responseText);var a,b,c,d,e=new Date(s.countDate).getTime(),f=s.mainEndMessage,g=s.snowingMode,h=s.endFireworks;if(!0===g&&setInterval(createSnowFlake,150),0!==s.otherEvents.length)for(var j in a=s.otherEventsTitle,b=s.otherEvents,b)b[j].hasOwnProperty("date")?b[j].hasOwnProperty("seperator")?(c=b[j].date,d=new Date(c).toLocaleDateString("fr-FR",{month:"short",day:"numeric"}),a+="<br>"+b[j].name+b[j].seperator+d):(c=b[j].date,d=new Date(c).toLocaleDateString("fr-FR",{month:"short",day:"numeric"}),a+="<br>"+b[j].name+" &mdash; "+d):a+=b[j].hasOwnProperty("seperator")?"<br>"+b[j].name+b[j].seperator+b[j].text:"<br>"+b[j].name+" &mdash; "+b[j].text;else a="",b="";var i=ServerDate.now(),k=e-i,l=Math.floor(k/86400000),m=Math.floor(k%86400000/3600000),n=Math.floor(k%3600000/60000),o=Math.floor(k%60000/1e3);if(document.getElementById("day").innerHTML=100<=l?("0"+l).slice(-3):("0"+l).slice(-2),document.getElementById("hour").innerHTML=("0"+m).slice(-2),document.getElementById("minute").innerHTML=("0"+n).slice(-2),document.getElementById("second").innerHTML=("0"+o).slice(-2),0>k&&(clearInterval(r),document.getElementById("day").innerHTML="00",document.getElementById("hour").innerHTML="00",document.getElementById("minute").innerHTML="00",document.getElementById("second").innerHTML="00",document.getElementById("day").classList.add("blinking"),document.getElementById("hour").classList.add("blinking"),document.getElementById("minute").classList.add("blinking"),document.getElementById("second").classList.add("blinking"),document.getElementById("endtext").innerHTML=f,!0===h)){var p=document.createElement("link");p.setAttribute("rel","stylesheet"),p.setAttribute("href","css/fireworks.css"),document.getElementsByTagName("head")[0].appendChild(p);var q=document.createElement("div");q.classList.add("pyro"),document.body.appendChild(q)}var r=setInterval(function(){var a=ServerDate.now(),b=e-a,c=Math.floor(b/86400000),d=Math.floor(b%86400000/3600000),g=Math.floor(b%3600000/60000),i=Math.floor(b%60000/1e3);if(document.getElementById("day").innerHTML=100<=c?("0"+c).slice(-3):("0"+c).slice(-2),document.getElementById("hour").innerHTML=("0"+d).slice(-2),document.getElementById("minute").innerHTML=("0"+g).slice(-2),document.getElementById("second").innerHTML=("0"+i).slice(-2),0>b&&(clearInterval(r),document.getElementById("day").innerHTML="00",document.getElementById("hour").innerHTML="00",document.getElementById("minute").innerHTML="00",document.getElementById("second").innerHTML="00",document.getElementById("day").classList.add("blinking"),document.getElementById("hour").classList.add("blinking"),document.getElementById("minute").classList.add("blinking"),document.getElementById("second").classList.add("blinking"),document.getElementById("endtext").innerHTML=f,!0===h)){var j=document.createElement("link");j.setAttribute("rel","stylesheet"),j.setAttribute("href","css/fireworks.css"),document.getElementsByTagName("head")[0].appendChild(j);var k=document.createElement("div");k.classList.add("pyro"),document.body.appendChild(k)}},100);document.getElementById("title").innerHTML=s.mainEvent,document.getElementById("endtext").innerHTML=a}};function createSnowFlake(){const a=document.createElement("i");a.classList.add("fas"),a.classList.add("fa-snowflake"),a.style.left=Math.random()*window.innerWidth+"px",a.style.animationDuration=3*Math.random()+2+"s",a.style.opacity=Math.random(),a.style.fontSize=10*Math.random()+10+"px",document.body.appendChild(a),setTimeout(()=>{a.remove()},5e3)}xhttp.open("GET","settings/events_fr.json",!0),xhttp.send();