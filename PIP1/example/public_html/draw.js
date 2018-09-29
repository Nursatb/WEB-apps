
var cvs = document.getElementById('canvas');
var c = cvs.getContext('2d');
c.font = '16px serif';

var form = document.getElementById('form');

function draw() {
  c.clearRect(0,0,300,300);
  //if(!validate(form))
    //return;
  var r = Number(form.rin.value);

  var x = Number(form.xin.value) / r * 140 + 150;
  var y = 150 - parseY(form) / r * 140;

  c.beginPath();
  c.fillStyle = '#6be';
  c.moveTo(10,150);
  c.lineTo(10,80);
  c.lineTo(150,80);
  c.lineTo(150,10);
  c.arc(150,150,140,-Math.PI/2,0);
  c.lineTo(220,150);
  c.lineTo(150,290);
  c.lineTo(150,150);
  c.closePath();
  c.fill();

  c.beginPath();
  c.moveTo(0,150);
  c.lineTo(300,150);
  c.lineTo(295,155);
  c.moveTo(300,150);
  c.lineTo(295,145);
  c.moveTo(150,300);
  c.lineTo(150,0);
  c.lineTo(155,5);
  c.moveTo(150,0);
  c.lineTo(145,5);
  c.stroke();

  c.beginPath();
  c.moveTo(10,145);
  c.lineTo(10,155);
  c.moveTo(80,145);
  c.lineTo(80,155);
  c.moveTo(220,145);
  c.lineTo(220,155);
  c.moveTo(290,145);
  c.lineTo(290,155);

  c.moveTo(145,10);
  c.lineTo(155,10);
  c.moveTo(145,80);
  c.lineTo(155,80);
  c.moveTo(145,220);
  c.lineTo(155,220);
  c.moveTo(145,290);
  c.lineTo(155,290);
  c.stroke();

  c.fillStyle = '#000';
  c.fillText(-r, 10, 150);
  c.fillText(-r/2, 80, 150);
  c.fillText(r/2, 220, 150);
  c.fillText(r, 290, 150);
  c.fillText(r, 150, 10);
  c.fillText(r/2, 150, 80);
  c.fillText(-r/2, 150, 220);
  c.fillText(-r, 150, 290);


  c.fillStyle = '#000';
  c.beginPath();
  c.moveTo(x, y);
  c.arc(x, y, 5, 0, Math.PI * 2);
  c.fill();
}

setInterval(draw,10);
