<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas{
            border: 1px solid;
        }
        #imagen{
            display: none;
        }
    
    </style>
</head>
<body>
 
    <canvas id="canvas" width="500" height="500">
        Hola, tu navegador no funciona
    </canvas>
      <!-- }  <img src="descarga.jpg" alt="" id="imagen"> -->

    <script>
        var canvas = null;
        var ctx = null;
        var color = 'red';
        var fig = 'arc';
        var press = false;

        var superX = 0;
        var superY = 0;

        function run(){
            canvas = document.getElementById('canvas');
            ctx = canvas.getContext('2d');
           // paint();
        }

         document.addEventListener('keydown',(e)=>{
         //   console.log(e.keyCode);//w = 87, 
            if(e.keyCode==87 || e.keyCode == 38){
            //arriba
                superY-=20;
            } 
            if(e.keyCode==40 || e.keyCode == 83){
            //abajo
                superY+=20;
            } 
            if(e.keyCode==37 || e.keyCode == 65){
            //izq
                superX-=20;
            } 
            if(e.keyCode==39 || e.keyCode == 68){
            //der
                superX+=20;
            } 
            paint();
        });

        function paint(){

            window.requestAnimationFrame(paint);


            ctx.fillStyle = 'white';
            ctx.fillRect(0,0,500,500);
            ctx.fillStyle = 'red';
            ctx.fillRect(superX, superY, 40,40);


            superX+=10;

            if(superX>500)
            superX = 0;
        }

        window.requestAnimationFrame = (function () {
        return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 17);
        };
    }());
    window.addEventListener('load',run);
</script>
</body>
</html>