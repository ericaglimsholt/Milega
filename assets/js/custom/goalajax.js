

var ajaxShower = document.querySelectorAll('.titleContainer');



for (var j = 0; j < ajaxShower.length; j++) {
ajaxShower[j].addEventListener('click', makeRequest);
}


function makeRequest(event) {
	var request = new XMLHttpRequest();


	request.onreadystatechange = printContent;
	request.open('GET', '/assets/php/updategoals.php', true);
	request.send();




	function printContent() {

		var cleanRes = JSON.parse(request.responseText);

		var loadTitle = document.querySelector('input[name="goaltitle"]');
		var loadContent = document.querySelector('textarea[name="goaldescription"]');
		var loadFulfilled = document.querySelector('input[name="fullfilled"]');
		var loadReminder = document.querySelector('input[name="reminder"]');
		var loadDone = document.querySelector('input[name="done"]');
		var loadId = document.querySelector('input[name="goalid"]');



		cleanRes.forEach(function(object) {
			console.log(object.goalId);
			console.log(event.target.id);
			if (object.goalId === event.target.id) {
				loadTitle.value = object.goalTitle
				loadContent.innerHTML = object.goalContent;
				loadFulfilled.value = object.fulfilled;
				loadReminder.value = object.reminder;
				if (object.done == 1) {
				loadDone.checked = true;
				loadId.value = object.goalId;
				}
			}
		});



	// 	// loadContent.innerHTML = splitRes[3];
	// 	// loadFulfilled.value = splitRes[5];
	// 	// loadReminder.value = splitRes[6];
	// 	// if (splitRes[7] == 1) {
	// 	// 	loadDone.checked = true;
	// 	//
	// 	// loadId.value = splitRes[0];
	// }
	}
}
