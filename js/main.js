
// Initialize Variables
var closePopup = document.getElementById("popupclose");
var quizbutton = document.getElementById("quizButton");
var overlay = document.getElementById("overlay");
var popup = document.getElementById("popup");
// Close Popup Event
closePopup.onclick = function() {
overlay.style.display = 'none';
popup.style.display = 'none';
};
// Show Overlay and Popup
quizButton.onclick = function() {
overlay.style.display = 'block';
popup.style.display = 'block';
}



function getScore(){
	
	var question1 = document.getElementById('quizz')['q1'].value;
	var question2 = document.getElementById('quizz')['q2'].value;
	var question3 = document.getElementById('quizz')['q3'].value;
	var question4 = document.getElementById('quizz')['q4'].value;
	var question5 = document.getElementById('quizz')['q5'].value;
	var total = 0;
	
	if(question1 == 'b'){total++};
	if(question2 == 'a'){total++};
	if(question3 == 'c'){total++};
	if(question4 == 'b'){total++};
	if(question5 == 'b'){total++};
	
	window.alert('You Scored: ' + total + '/5');
	
	document.getElementById("score").innerHTML = 'You Scored: ' + total + '/5';
}	


function validateForm() {
    var name = document.forms['commentForm']['name'].value;
	var text = document.forms['commentForm']['text'].value;
	
	if(name == ""){
		window.alert("Name must be filled out.");
		return false;
		
	}
	if(text == ""){
		window.alert("You need to fill in a comment.");
		return false;
		
	}
}