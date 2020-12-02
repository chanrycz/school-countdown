<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css2?family=Google+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <title>School Countdown - Rainbow (Epilepsy Warning) | chanrycz.com</title>
  <link rel="shortcut icon" href="favicon.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="robots" content="noindex, nofollow" />
  <style>
	html {
	  height: 100%;
	  width: 100%;
	}
	
    html,
	body {
      margin: 0;
	  overflow-x: hidden;
    }
	
	body {
	  height: 100%;
	  width: 100%;
	}

    body {
      text-align: center;
      background: var(--rainbow-color);
      font-family: "Google Sans", sans-serif;
      font-weight: 400;
    }

    h1 {
      color: #fff;
      font-weight: 700;
      font-size: 1.8em;
      margin-bottom: 0px;
      margin-top: 0px;
    }

    #wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
    }

    #clockdiv {
      color: #fff;
      display: inline-block;
      font-weight: 100;
      text-align: center;
      font-size: 2em;
      margin: auto;
    }

    .time>span {
      padding: 15px;
      border-radius: 3px;
      font-weight: 700;
      background: var(--rainbow-color);
      display: inline-block;
      font-variant-numeric: tabular-nums;
    }
    
    /* Smartphones (portrait and landscape) ----------- */
    @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px) {
        .smalltext {
          padding-top: 5px;
          font-weight: 400;
          font-size: 0.5em !important;
        }
    }
    
    /* Desktops and laptops ----------- */
    @media only screen 
    and (min-width : 1224px) {
        .smalltext {
          padding-top: 5px;
          font-weight: 400;
          font-size: 1.2em !important;
        }
    }
    
    /* iPads (portrait and landscape) ----------- */
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px) {
        .smalltext {
          padding-top: 5px;
          font-weight: 400;
          font-size: 0.5em !important;
        }
    }

    #endtext {
      font-size: 0.6em;
      margin: none;
      margin-top: 30px;
      font-weight: 500;
    }

    .time {
      margin-top: 30px;
      padding: 10px;
      border-radius: 3px;
      background: var(--rainbow-color-2);
      display: inline-block;
    }

    #flex-start {
      align-self: flex-start;
    }

    #flex-end {
      align-self: flex-end;
    }

    .blinking {
      animation: blinking 0.8s infinite;
    }

    @keyframes blinking {
      0% {
        color: #fff;
      }

      49% {
        color: #fff;
      }

      50% {
        color: transparent;
      }

      99% {
        color: transparent;
      }

      100% {
        color: #fff;
      }
    }

    input[type=range]#volume {
      position: relative;
      top: -4px;
      width: calc(200px + 3em);
      background-color: transparent;
      -webkit-appearance: none;
    }
    
    @supports (-moz-appearance:none) {
        input[type=range]#volume {
            position: static !important;
            top: 0 !important;
        }
    }

    input[type=range]#volume:focus {
      outline: none;
    }

    input[type=range]#volume::-webkit-slider-runnable-track {
      background: #ffffff;
      border: 1px solid #ffffff;
      border-radius: 25px;
      width: 100%;
      height: 10px;
      cursor: pointer;
    }

    input[type=range]#volume::-webkit-slider-thumb {
      margin-top: -6px;
      width: 20px;
      height: 20px;
      background: var(--rainbow-color);
      border: 2.5px solid #ffffff;
      border-radius: 50px;
      cursor: pointer;
      -webkit-appearance: none;
    }

    input[type=range]#volume:focus::-webkit-slider-runnable-track {
      background: #ffffff;
    }

    input[type=range]#volume::-moz-range-track {
      background: #ffffff;
      border: 1px solid #ffffff;
      border-radius: 25px;
      width: 100%;
      height: 10px;
      cursor: pointer;
    }

    input[type=range]#volume::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: var(--rainbow-color);
      border: 2.5px solid #ffffff;
      border-radius: 50px;
      cursor: pointer;
    }

    input[type=range]#volume::-ms-track {
      background: transparent;
      border-color: transparent;
      border-width: 7.6px 0;
      color: transparent;
      width: 100%;
      height: 10px;
      cursor: pointer;
    }

    input[type=range]#volume::-ms-fill-lower {
      background: #ffffff;
      border: 1px solid #ffffff;
      border-radius: 50px;
    }

    input[type=range]#volume::-ms-fill-upper {
      background: #ffffff;
      border: 1px solid #ffffff;
      border-radius: 50px;
    }

    input[type=range]#volume::-ms-thumb {
      width: 20px;
      height: 20px;
      background: var(--rainbow-color);
      border: 2.5px solid #ffffff;
      border-radius: 50px;
      cursor: pointer;
      margin-top: 0px;
    }

    input[type=range]#volume:focus::-ms-fill-lower {
      background: #ffffff;
    }

    input[type=range]#volume:focus::-ms-fill-upper {
      background: #ffffff;
    }

    @supports (-ms-ime-align:auto) {
      input[type=range]#volume {
        margin: 0;
      }
    }

    .rainbow {
      background: var(--rainbow-color);
    }
  </style>
  <title>School Countdown | chanrycz.com</title>
</head>

<body>
  <div id="wrapper">
    <div id="clockdiv">
      <div id="flex-start">
        <h1 id="title">&#10240;</h1>
      </div>
      <div>
        <div class="time">
          <span class="days rainbow" id="day">&#10240;&#10240;</span>
          <div class="smalltext">Days</div>
        </div>
        <div class="time">
          <span class="hours rainbow" id="hour">&#10240;&#10240;</span>
          <div class="smalltext">Hours</div>
        </div>
        <div class="time">
          <span class="minutes rainbow" id="minute">&#10240;&#10240;</span>
          <div class="smalltext">Minutes</div>
        </div>
        <div class="time">
          <span class="seconds rainbow" id="second">&#10240;&#10240;</span>
          <div class="smalltext">Seconds</div>
        </div>
        <div id="flex-end">
          <p id="endtext">&#10240;</p>
          <div style="margin-top: 15px;"><input id="loop" type="image" src="loop_all.png" value="Loop"
              onclick="changeLoop()" width="50" height="50" style="outline: none"><input type="image" src="previous.png"
              value="Previous" onclick="previous()" width="50" height="50"
              style="padding-left: 1em;padding-right: 1em;outline: none"><input id="play-pause" type="image"
              src="play.png" value="Play" onclick="playPause()" width="50" height="50" style="outline: none"><input
              type="image" src="next.png" value="Next" onclick="next()" width="50" height="50"
              style="padding-left: 1em;outline: none;padding-right: 1em"><input id="shuffle" type="image"
              src="shuffle-off.png" value="Shuffle" onclick="changeShuffle()" width="50" height="50"
              style="outline: none"><br><img src="volume-down.png" width="25px"><input id="volume" type="range" min="0" max="100"
              value="100" style="margin-right: 5px;"><img src="volume-up.png" width="25px"></div>
        </div>
      </div>
    </div>
  </div>
  <audio id="player" hidden="" src="DankSong4.2.wav" type="audio/wav">
  </audio>
  <script src="start.js?v=<?php echo date('Ymd-His', filemtime('start.js')); ?>"></script>
  <script>
    var rainbowColor = setInterval(function () {
      var randomColor = Math.floor(Math.random() * 16777215).toString(16);
      document.body.style.backgroundColor = "#" + randomColor;
      document.documentElement.style.setProperty('--rainbow-color', ("#" + randomColor));
    }, 100);
    var rainbowColor2 = setInterval(function () {
      var randomColor2 = Math.floor(Math.random() * 16777215).toString(16);
      document.documentElement.style.setProperty('--rainbow-color-2', ("#" + randomColor2));
    }, 100);
    const song = document.getElementById("player");
    var songIndex = 0;
    const songs = ['DankSong4.2.wav', 'DankSong5.wav', 'DankSong6.wav', 'DankSong7.wav', 'DankSong8.wav', 'DankSong9.wav', 'DankSong10.wav', 'DankSong11.wav', 'DankSong12.wav', 'DankSong13.wav', 'DankSong14.wav'];
    var playing = false;
    var looping = false;
    var shuffling = false;
    song.pause();
    function playPause() {
      if (playing == false) {
        song.play();
        document.getElementById("play-pause").src = "pause.png";
        playing = true;
        localStorage.setItem('schoolCountSongNum', songIndex);
      } else if (playing == true) {
        song.pause();
        document.getElementById("play-pause").src = "play.png";
        playing = false;
        localStorage.setItem('schoolCountSongNum', songIndex);
      }
    }
    function changeLoop() {
      if (looping == false) {
        song.loop = true;
        document.getElementById("loop").src = "loop_1.png";
        looping = true;
        localStorage.setItem('schoolCountLoop', true);
      } else if (looping == true) {
        song.loop = false;
        document.getElementById("loop").src = "loop_all.png";
        looping = false;
        localStorage.setItem('schoolCountLoop', false);
      }
    }
    function changeShuffle() {
      if (shuffling == false) {
        document.getElementById("shuffle").src = "shuffle-on.png";
        shuffling = true;
        localStorage.setItem('schoolCountShuffle', true);
      } else if (shuffling == true) {
        document.getElementById("shuffle").src = "shuffle-off.png";
        shuffling = false;
        localStorage.setItem('schoolCountShuffle', false);
      }
    }
    function next() {
      if (shuffling == false) {
        songIndex++;
        if (songIndex > 10) {
          songIndex = 0;
        }
      } else {
        randomNumber = Math.floor(Math.random() * 11);
        if (randomNumber != songIndex) {
          songIndex = randomNumber;
        }
      }
      song.src = songs[songIndex];
      playing = false;
      playPause();
    }
    function previous() {
      if (shuffling == false) {
        songIndex--;
        if (songIndex < 0) {
          songIndex = 10;
        }
      } else {
        randomNumber = Math.floor(Math.random() * 11);
        if (randomNumber != songIndex) {
          songIndex = randomNumber;
        }
      }
      song.src = songs[songIndex];
      playing = false;
      playPause();
    }
    if (song) {
      song.addEventListener('ended', function () {
        next();
      });
    }
    var volSlider = document.getElementById("volume");
    volSlider.value = 100;
    volSlider.addEventListener("input", function () {
      song.volume = (volSlider.value / 100);
      localStorage.setItem('schoolCountVolume', volSlider.value);
    }, false);
    window.onload = function () {
      localStorage.setItem('Website by Ryan Chan', 'Copyright \251 2020 Ryan Chan. All rights reserved.');
      if (localStorage.getItem('schoolCountVolume') != null) {
        volSlider.value = parseInt(localStorage.getItem('schoolCountVolume'));
        song.volume = (volSlider.value / 100);
      }
      if (localStorage.getItem('schoolCountLoop') == 'true') {
        looping = false;
        changeLoop();
      }
      if (localStorage.getItem('schoolCountShuffle') == 'true') {
        shuffling = false;
        changeShuffle();
      }
      if (localStorage.getItem('schoolCountSongNum') != null) {
        songIndex = parseInt(localStorage.getItem('schoolCountSongNum'));
        song.src = songs[songIndex];
      }
    }
  </script>
  <script src="https://9ypnywyv51fd.statuspage.io/embed/script.js"></script>
</body>

</html>