<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css2?family=Google+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <title>Communist School Countdown | chanrycz.com</title>
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
      background: #de2910;
      font-family: "Google Sans", sans-serif;
      font-weight: 400;
    }

    h1 {
      color: #ffde00;
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
      color: #ffde00;
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
      background: #de2910;
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
      background: #881a0b;
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
      background: #ffde00;
      border: 1px solid #ffde00;
      border-radius: 25px;
      width: 100%;
      height: 10px;
      cursor: pointer;
    }

    input[type=range]#volume::-webkit-slider-thumb {
      margin-top: -6px;
      width: 20px;
      height: 20px;
      background: #de2910;
      border: 2.5px solid #ffde00;
      border-radius: 50px;
      cursor: pointer;
      -webkit-appearance: none;
    }

    input[type=range]#volume:focus::-webkit-slider-runnable-track {
      background: #ffde00;
    }

    input[type=range]#volume::-moz-range-track {
      background: #ffde00;
      border: 1px solid #ffde00;
      border-radius: 25px;
      width: 100%;
      height: 10px;
      cursor: pointer;
    }

    input[type=range]#volume::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: #de2910;
      border: 2.5px solid #ffde00;
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
      background: #ffde00;
      border: 1px solid #ffde00;
      border-radius: 50px;
    }

    input[type=range]#volume::-ms-fill-upper {
      background: #ffde00;
      border: 1px solid #ffde00;
      border-radius: 50px;
    }

    input[type=range]#volume::-ms-thumb {
      width: 20px;
      height: 20px;
      background: #de2910;
      border: 2.5px solid #ffde00;
      border-radius: 50px;
      cursor: pointer;
      margin-top: 0px;
    }

    input[type=range]#volume:focus::-ms-fill-lower {
      background: #ffde00;
    }

    input[type=range]#volume:focus::-ms-fill-upper {
      background: #ffde00;
    }

    @supports (-ms-ime-align:auto) {
      input[type=range]#volume {
        margin: 0;
      }
    }
    
    img, input[type=image] {
        filter: brightness(0) saturate(100%) invert(85%) sepia(43%) saturate(2186%) hue-rotate(359deg) brightness(104%) contrast(104%) !important;
    }
    
    #hammer-sickle > svg {
        position: fixed;
        top: 1em;
        left: 1em;
        z-index: -1000;
        width: 10em;
        height: 10em;
    }
    
    @media only screen 
    and (max-width : 850px) {
        #hammer-sickle > svg {
            display: none !important;
        }
    }
  </style>
  <title>School Countdown | chanrycz.com</title>
</head>

<body>
  <div id="wrapper">
      <div id="hammer-sickle">
        <svg xmlns="http://www.w3.org/2000/svg" width="331pt" height="331pt" viewBox="0 0 331 331">
            <rect width="331" height="331" fill="#de2910"/>
            <path d="m165.49 15.47c30.28 10.787 58.307 27.796 81.948 49.566 22.675 21.132 41.915 47.019 51.072 76.93 6.2062 19.233 4.9292 40.017 0.82663 59.543-4.0982 18.189-12.101 35.528-23.755 50.119 13.217 12.923 26.307 25.974 39.558 38.863-1.7648 6.603-4.4693 13.351-9.8987 17.802-4.5399 3.9187-10.352 5.8133-16.072 7.2378-12.941-13.445-25.948-26.823-38.896-40.261-16.129 11.019-35.594 16.827-55.031 17.685-24.481 1.0821-48.954-6.8092-68.929-20.826-10.771-7.4027-20.48-16.254-29.387-25.794-1.5255 1.5006-3.1903 2.847-4.9022 4.1295 0.42452 3.2013 0.88448 6.3985 1.3259 9.6005-3.3426 0.19229-6.6797 1.0096-9.4884 2.8931-8.6657 5.4918-14.683 14.017-20.834 22.02-7.6271 9.9016-14.482 20.892-25.111 27.906-6.4414 3.9792-15.973 2.2974-19.918-4.3912-4.1259-6.5622-1.7458-15.032 2.6981-20.789 10.861-15.963 30.253-22.786 42.394-37.492 3.1577-3.9512 5.5457-8.5309 6.7303-13.461 3.101 0.19817 6.2023 0.39974 9.3044 0.60175 2.6274-2.6649 5.2677-5.3163 7.8851-7.9898 2.9183-0.0754 5.8923 0.23651 8.7736-0.32607 3.0076-2.6527 5.4052-5.9141 8.1214-8.8522 2.9751 0.8335 4.6657 3.6241 6.8187 5.617 13.307 12.12 28.525 22.682 45.869 28.068 22.179 7.1054 46.889 4.8481 67.694-5.4908-41.672-42.905-83.205-85.947-124.82-128.91-9.3317 9.8253-18.627 19.688-28.092 29.385-11.559-11.792-23.231-23.473-34.849-35.207 21.898-21.92 44.042-43.594 66.061-65.393 19.037 5.1825 38.049 10.456 57.103 15.577-13.021 11.821-26.257 23.403-39.323 35.173 43.419 42.566 86.622 85.358 130.11 127.86 10.498-12.773 16.407-29.037 17.21-45.504 1.4809-21.788-3.5608-43.463-10.743-63.901-10.152-26.973-29.562-49.179-50.658-68.282-13.185-11.72-26.774-23.002-40.801-33.701z" fill="#ffd600"/>
        </svg>
      </div>
    <div id="clockdiv">
      <div id="flex-start">
        <h1 id="title">&#10240;</h1>
      </div>
      <div>
        <div class="time">
          <span class="days" id="day">&#10240;&#10240;</span>
          <div class="smalltext">Days</div>
        </div>
        <div class="time">
          <span class="hours" id="hour">&#10240;&#10240;</span>
          <div class="smalltext">Hours</div>
        </div>
        <div class="time">
          <span class="minutes" id="minute">&#10240;&#10240;</span>
          <div class="smalltext">Minutes</div>
        </div>
        <div class="time">
          <span class="seconds" id="second">&#10240;&#10240;</span>
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
  <audio id="player" hidden="" src="USSRAnthem.mp3" type="audio/mp3">
  </audio>
  <script src="start.js?v=<?php echo date('Ymd-His', filemtime('start.js')); ?>"></script>
  <script>
    const song = document.getElementById("player");
    var songIndex = 0;
    const songs = ['USSRAnthem.mp3','CommunistManifesto.mp3'];
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
        if (songIndex >= 2) {
          songIndex = 0;
        }
      } else {
        randomNumber = Math.floor(Math.random() * 1);
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
        if (songIndex <= 0) {
          songIndex = 1;
        }
      } else {
        randomNumber = Math.floor(Math.random() * 1);
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
    }
  </script>
  <script src="https://9ypnywyv51fd.statuspage.io/embed/script.js"></script>
</body>

</html>