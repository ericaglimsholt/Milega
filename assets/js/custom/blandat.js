let clickGoal = document.querySelectorAll('.titleContainerInner');
var showgoal = document.querySelectorAll('.partgoalcontainer');


for (var i = 0; i < clickGoal.length; i++) {
	clickGoal[i].addEventListener('click', function() {

		event.target.parentElement.nextSibling.classList.toggle('showpartgoal');

});
}

// Takes in the new goal
document.querySelector('.new').addEventListener("click", function(event){
		document.getElementById('modal').style.display='block';
		event.preventDefault();
});

// Takes out the new goal
document.getElementById("gremove").addEventListener("click", function(){
		document.getElementById("modal").style.display = "none";
});

//Message container pop-up
/*
let saveButton = document.querySelector('.savegoal');
saveButton.addEventListener('click', function () {
	let messWrap = document.querySelector('.messagewrapper');
	messWrap.style.display= "flex";
});


let close = document.querySelector('.close');
close.addEventListener('click', function() {
	let messWrap = document.querySelector('.messagewrapper');
	messWrap.style.display= "none";
});
*/
