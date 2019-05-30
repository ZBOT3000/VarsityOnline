

window.onload = function() {
var data = [
          {label:  "Computer Science ", y: 40, exploded: true,},
          {label: "Biological Science", y: 40,exploded: true,},
          {label: "Mathematics of Finance", y : 42,exploded: true,},
          {label:  "Astronomy", y :43,exploded: true,},
          {label:  "Nuclear Science", y: 43,exploded: true,},
          {label:  "Chemistry", y: 43,exploded: true,},
          {label:  "Chemical Engineering", y: 40,exploded: true,},
          {label:  "Civil Engineering", y: 43,exploded: true,},
          {label:  "Electrical Engineering", y: 36,exploded: true,},
          {label:  "Mechanical Engineering", y: 40,exploded: true,},
          {label:  "Mining Engineering", y: 40,exploded: true},
          {label:  "Aeronautical Engineering", y: 40,exploded: true,}
        ]

var ac = num;
if(ac==1){
  var Aps = witsAps;
}else if(ac==2){
  var Aps = ujAps;
} else if(ac==3){
  var Aps = upAps;
}else {
  var Aps = witsAps;
}



for(var i=0;i<data.length;i++){
	if (Aps<data[i].y){
    	data[i].color = "red";
    }
  	else{
      data[i].color = "green"
    }
}


var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1",
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Science Faculty"
	},
	data: [{
		type: "pie",
		startAngle:90,
		toolTipContent: "<b>{label}</b>: {y}",
		dataPoints: data
	}]
});


chart.render();

}
