/* 
 * Emulation de la bilise canvas sous ie8
 */

function draw() {
    
    var el = document.createElement('canvas');
    G_vmlCanvasManager.initElement(el);
    var ctx = el.getContext('2d');
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


