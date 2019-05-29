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

for(var i=0;i<data.length;i++){
	if (data[i].y<42){
    	data[i].color = "red";
    }
  	else{
      data[i].color = "green"
    }
}
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Wits Science Faculty"
	},
	data: [{
		type: "pie",
		startAngle:90,
		toolTipContent: "<b>{label}</b>: {y}",
		indexLabelFontSize: 16,
		indexLabel: "{label}",
		dataPoints: data
	}]
});


chart.render();

}
