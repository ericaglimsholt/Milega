
var fulfilled = document.querySelector('.fulfilled').textContent;
var unfulfilled = document.querySelector('.unfulfilled').textContent;
var total = (parseInt(fulfilled) + parseInt(unfulfilled));
var done = Math.round((parseInt(fulfilled) / total) * 100);
var notDone = 100 - done;

new Chartist.Pie('.ct-chart', {
  series: [done, notDone],
	labels: ['', '']
}, {
  donut: true,
  donutWidth: 45,
  startAngle: 270,
  showLabel: true,
	width: 250,
	height: 250
});
