
var holes = document.querySelectorAll('.hole');
var scoreBoard = document.querySelector('.score');
var moles = document.querySelectorAll('.mole');

var startButton = document.querySelector('[data-action="startGame"]');

startButton.addEventListener('click', function () {
    startGame();
});



function startGame() {
    console.log('test');

    setInterval(function(){
      var hond = Math.floor((Math.random() * 6) + 1);
       holes[hond - 1].className = "hole up hole" + hond;
       holes[hond - 1].addEventListener('click', function(){score();});
      setTimeout(function(){
       holes[hond - 1].className = "hole hole" + hond;
     }, 1000);
   }, 1000);
}

var scoreCounter = 0;
function score(){
  scoreCounter++;
  console.log(scoreCounter);
  document.querySelector('.score').innerHTML = scoreCounter;
}
