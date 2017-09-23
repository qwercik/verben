var inputs = document.getElementsByTagName('input');
var lastFocusedInput = inputs[0];

for (var i = 0; i < inputs.length; ++i) {
	inputs[i].addEventListener('focus', function() {
		lastFocusedInput = document.activeElement;
	});
}

var characterAddButtons = document.getElementsByClassName('character-add-button');

for (var i = 0; i < characterAddButtons.length; ++i) {
	var entry = characterAddButtons[i];
	entry.addEventListener('click', function() {
		lastFocusedInput.value += this.innerHTML;
		lastFocusedInput.focus();
	});
}
