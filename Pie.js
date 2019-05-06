var myCanvas = document.getElementById("myCanvas");
myCanvas.width = 600;
myCanvas.height = 600;
 
var ctx;
ctx = myCanvas.getContext("2d");

function drawLine(ctx, startX, startY, endX, endY){
    ctx.beginPath();
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();
}

function drawArc(ctx, centerX, centerY, radius, startAngle, endAngle){
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
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
var aps = <?php session_start();
           echo $_SESSION["APS"]; ?>;

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
    "Aeronautical Engineering": 40,
    
};

var Piechart = function(options){
    this.options = options;
    this.canvas = options.canvas;
    this.ctx = this.canvas.getContext("2d");
    this.colors = options.colors;
 
    this.draw = function(){
        var total_value = 11;
        var color_index = 0;
        
 
        var start_angle = 0;
        for (categ in this.options.data){
            val = this.options.data[categ];
            var slice_angle = 2 * Math.PI * val / total_value;
 
            drawPieSlice(
                this.ctx,
                this.canvas.width/2,
                this.canvas.height/2,
                Math.min(this.canvas.width/2,this.canvas.height/2),
                start_angle,
                start_angle+slice_angle,
                
                this.colors[color_index+1]
            );
 
            start_angle += slice_angle;
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

