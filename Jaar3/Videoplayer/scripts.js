document.querySelector('#hond').addEventListener("click", playPause);
var play = false

function playPause(){
  if(play === false){
    video.play();
    Progress();
    play = true;
  }
  else if(play === true){
    video.pause();
    play = false;
  }
}

document.querySelector('#playBackRate').addEventListener("change", playBackRate);
function playBackRate(){
  video.playbackRate = document.querySelector('#playBackRate').value;
}

document.querySelector('#volume').addEventListener("change", volume);
function volume(){
  video.volume = document.querySelector('#volume').value;
}

document.querySelector('#back').addEventListener("click", volume);
function volume(){
  video.currentTime -= 10;
}

document.querySelector('#forward').addEventListener("click", volume);
function volume(){
  video.currentTime += 25;
}

function Progress()
{

    var Player = document.querySelector("#video");
    var Filled = document.querySelector("#progress_filled");
    var Played = 0;
    Played = (100 / (Player.duration / Player.currentTime))

    Filled.style.flexBasis = Played + "%";

    if(!video.paused)
    {
        setTimeout(Progress, 500);;
    }
}

document.querySelector('#location').addEventListener("click", SkipTo);
function SkipTo()
{
    var Player = document.querySelector("#video");
    var Filled = document.querySelector("#progress_filled");

    var position = window.event.clientX;
    var Offset = (window.innerWidth - document.getElementById("location").offsetWidth) / 2;
    var progress = 100 / (window.innerWidth / (position + Offset));
    Filled.style.flexBasis = progress + "%";
    Player.currentTime = (Player.duration / 100) * progress;

}


var video = document.querySelector("video.viewer");
video.addEventListener("dblclick",toggleFullScreen);

    var fullscreen = false;

    function toggleFullScreen() {
        if(fullscreen == false) {
            var requestFullScreen = video.requestFullscreen || video.msRequestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen;
            requestFullScreen.call(video);
            fullscreen = true;
        } else if (fullscreen == true){
            var exitFullScreen = video.exitFullscreen || video.msExitFullscreen || video.mozExitFullScreen || video.webkitExitFullscreen;
            exitFullScreen.call(video);
            fullscreen = false;
        }
    }
