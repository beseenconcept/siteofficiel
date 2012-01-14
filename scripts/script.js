/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function draw() {
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = "rgb(255, 102, 0)";
    ctx.fillRect (10, 10, 55, 50);
    ctx.fillStyle = "rgba(204, 51, 102, 0.5)";
    ctx.fillRect (30, 30, 55, 50);
//    var canvasbis = document.getElementById("canvas2");
//    var context = canvasbis.getContext("2d");
    ctx.fillStyle = "rgb(51, 153, 51)";
    ctx.fillRect (70, 15, 55, 50);
    ctx.fillStyle = "rgba(0, 102, 153, 0.5)";
    ctx.fillRect (90, 35, 55, 50);
    
}

if (window.addEventListener){
window.addEventListener('load',draw,false);
} else if (window.attachEvent) {
  window.attachEvent('onload',draw);
}

window.onload = draw;

