let clickGoal = document.querySelectorAll('.titleContainerInner');
var showgoal = document.querySelectorAll('.partgoalcontainer');


for (var i = 0; i < clickGoal.length; i++) {
	clickGoal[i].addEventListener('click', function() {

		event.target.parentElement.nextSibling.classList.toggle('showpartgoal');

});
}
