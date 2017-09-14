document.querySelector('#hond').addEventListener("click", playPause);
var play = false

function playPause(){
  if(play === false){
    video.play();
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


document.querySelector('#location').addEventListener("click", chooseLocation);
function chooseLocation(){
  alert('start: '+ video.seekable.start(0) + ' end: ' + video.seekable.end(0));
    video.currentTime=5;
}
