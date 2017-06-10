var canvas = document.querySelector('#canvas');
var ctx = canvas.getContext('2d');

var colour = 'black';
var aleHetWerkeuim = document.querySelector('#aleHetWerkruim');
var aleHetWerkruim_style = getComputedStyle(aleHetWerkruim);
canvas.width = parseInt(aleHetWerkruim_style.getPropertyValue('width'));
canvas.height = parseInt(aleHetWerkruim_style.getPropertyValue('height'));

var mouse = {
  x: 0,
  y: 0
};
var last_mouse = {
  x: 0,
  y: 0
};
var poulter = 0;

function poulterize() {
  xx = Math.floor((Math.random() * 900) + 1);
  yy = Math.floor((Math.random() * 500) + 1);
  var img = document.querySelector("#poulter");
  ctx.drawImage(img, xx, yy);
  poulter++;
  if (poulter > 1) {
    document.querySelector('#poulter').src = getPoulter(true, false, 150, 150);
    ctx.drawImage(img, xx, yy);
    if (poulter > 5) {
      ctx.font = "111px Arial";
      ctx.fillText("STOP POULTERING", 150, 150);
    }
    if (poulter > 7) {
      window.location.assign("https://en.wikipedia.org/wiki/Will_Poulter");
    }

  }
}

function colorPick(colour) {
  colour = colour;
  ctx.strokeStyle = colour;
}

function lineSize(size) {
  size = size.value;
  ctx.lineWidth = size;
}

/* Mouse Capturing Work */
canvas.addEventListener('mousemove', function(e) {
  last_mouse.x = mouse.x;
  last_mouse.y = mouse.y;

  mouse.x = e.pageX - this.offsetLeft;
  mouse.y = e.pageY - this.offsetTop;
}, false);


/* Drawing on Paint App */
ctx.lineWidth;
ctx.lineJoin = 'round';
ctx.lineCap = 'round';

document.getElementById('colourke').addEventListener('change', function() {
  colour = this.value;
  colorPick(colour);
}, false);


document.querySelector('#sizing').addEventListener('click', function() {
  console.log('lol');
  lineSize(event.target);
}, false);

document.getElementById('poulterize').addEventListener('click', function() {
  poulterize();
}, false);

canvas.addEventListener('mousedown', function(e) {
  canvas.addEventListener('mousemove', onPaint, false);
}, false);

canvas.addEventListener('mouseup', function() {
  canvas.removeEventListener('mousemove', onPaint, false);
}, false);

var onPaint = function() {
  ctx.beginPath();
  ctx.moveTo(last_mouse.x, last_mouse.y);
  ctx.lineTo(mouse.x, mouse.y);
  ctx.closePath();
  ctx.stroke();
};;
