var myCanvas = document.getElementById("myCanvas");
myCanvas.width = 450;
myCanvas.height = 450;

var ctx;
ctx = myCanvas.getContext("2d");

function drawLine(ctx, startX, startY, endX, endY){
    ctx.beginPath();
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.strokeStyle = "black";
    ctx.stroke();
}

function drawArc(ctx, centerX, centerY, radius, startAngle, endAngle){
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.strokeStyle = "black";
    ctx.stroke();
}

function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
    ctx.fillStyle = color;
    ctx.beginPath();
    ctx.moveTo(centerX,centerY);
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.closePath();
    ctx.fill();
}

//var Stuff = <?php echo json_encode($APSArray); ?>;
//var aps = <?php session_start();
//          $aps1= $_SESSION["APS"]; ?>;
<--<?php
session_start();
$b = $_SESSION['13test'];
require 'functions.php';
$a = $_SESSION['43'];
?>
var aps = <?php echo $a ?>;
var myVinyls = {
    "Computer Science ": 40,
    "Biological Science": 40,
    "Mathematics of Finance": 42,
    "Astronomy":43,
    "Nuclear Science": 43,
    "Chemistry": 43,
    "Chemical Engineering": 40,
    "Civil Engineering": 43,
    "Electrical Engineering": 36,
    "Mechanical Engineering": 40,
    "Mining Engineering": 40,
    "Aeronautical Engineering": 40
};

var Piechart = function(options){
    this.options = options;
    this.canvas = options.canvas;
    this.ctx = this.canvas.getContext("2d");
    this.colors = options.colors;

    this.draw = function(){
        var total_value = 12;
        var color_index = 0;
        var keys = [];
        for (var key in options.data) {
        keys.push(key);
        }
        var count=0;
        var start_angle = 0;



        for (categ in this.options.data){
            val = 1;
            var slice_angle = 2 * Math.PI * val / total_value;
            var pieRadius = Math.min(this.canvas.width/2,this.canvas.height/2);
            var labelX = this.canvas.width/2 + (pieRadius / 2) * Math.cos(start_angle + slice_angle/2);
            var labelY = this.canvas.height/2 + (pieRadius / 2) * Math.sin(start_angle + slice_angle/2);

            if (this.options.data[categ]>aps){
              color_index=1;
            }
            else{
                color_index=0;
            }

            drawPieSlice(
                this.ctx,
                this.canvas.width/2,
                this.canvas.height/2,
                Math.min(this.canvas.width/2,this.canvas.height/2),
                start_angle,
                start_angle+slice_angle,

                this.colors[color_index]
            );

            if (this.options.doughnutHoleSize){
            var offset = (pieRadius * this.options.doughnutHoleSize ) / 2;
            labelX = this.canvas.width/2 + (offset + pieRadius / 2) * Math.cos(start_angle + slice_angle/2);
            labelY = this.canvas.height/2 + (offset + pieRadius / 2) * Math.sin(start_angle + slice_angle/2);
    }

            var labelText = keys[count] ;
            this.ctx.fillStyle = "white";
            this.ctx.font = "bold 9px Arial";
            this.ctx.fillText(labelText, labelX,labelY);
            start_angle += slice_angle;
            count++;
        }

    }
}

var myPiechart = new Piechart(
    {
        canvas:myCanvas,
        data:myVinyls ,
        colors:["green","red"]
    }
);
myPiechart.draw();
