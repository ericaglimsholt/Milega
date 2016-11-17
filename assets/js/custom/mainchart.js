
var fulfilled = document.querySelector('.fulfilled').textContent;
var unfulfilled = document.querySelector('.unfulfilled').textContent;
var total = (parseInt(fulfilled) + parseInt(unfulfilled));
var done = Math.round((parseInt(fulfilled) / total) * 100);
var notDone = 100 - done;

console.log(fulfilled);
console.log(unfulfilled);
console.log(done);
console.log(total)
new Chartist.Pie('.ct-chart', {
  series: [done, notDone],
	labels: ['', '']
}, {
  donut: true,
  donutWidth: 30,
  startAngle: 270,
  showLabel: true
});
