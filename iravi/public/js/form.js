var inputs=document.getElementsByClassName('formulario_input');
for (var i=0;i < inputs.length;i++){
	inputs[i].addEventListener('keyup',function(){
		if (this.value.length>=1) {
			this.nextElementSibling.classList.add('fijar');
	}else{
		this.nextElementSibling.classList.remove('fijar');
	}
})
}

/*------------Validation Function-----------------*/
var count = 0; // To count blank fields.
function validation(event) {
var radio_check = document.getElementsByName('gender'); // Fetching radio button by name.
var input_field = document.getElementsByClassName('text_field'); // Fetching all inputs with same class name text_field and an html tag textarea.
var text_area = document.getElementsByTagName('textarea');
// Validating radio button.
if (radio_check[0].checked == false && radio_check[1].checked == false) {
var y = 0;
} else {
var y = 1;
}
// For loop to count blank inputs.
for (var i = input_field.length; i > count; i--) {
if (input_field[i - 1].value == '' || text_area.value == '') {
count = count + 1;
} else {
count = 0;
}
}
if (count != 0 || y == 0) {
alert("*Todos los campos son obligatorios*"); // Notifying validation
event.preventDefault();
} else {
return true;
}
}
/*---------------------------------------------------------*/
// Function that executes on click of first next button.
function next_step1() {
document.getElementById("first").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "003366";
document.getElementById("active1").style.color = "green";
document.getElementById("ok1").style.display = "inline";
}
// Function that executes on click of first previous button.
function prev_step1() {
document.getElementById("first").style.display = "block";
document.getElementById("second").style.display = "none";
document.getElementById("active1").style.color = "003366";
document.getElementById("active2").style.color = "grey";
document.getElementById("ok1").style.display = "none";
}
// Function that executes on click of second next button.
function next_step2() {
document.getElementById("second").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "003366";
document.getElementById("active2").style.color = "green";
document.getElementById("ok2").style.display = "inline";
}
// Function that executes on click of second previous button.
function prev_step2() {
document.getElementById("third").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "003366";
document.getElementById("active3").style.color = "grey";
document.getElementById("ok2").style.display = "none";
}
function next_step3(){
document.getElementById("third").style.display = "none";
document.getElementById("four").style.display = "block";
document.getElementById("active4").style.color = "003366";
document.getElementById("active3").style.color = "green";
document.getElementById("ok3").style.display = "inline";
}
function prev_step3() {
document.getElementById("four").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "003366";
document.getElementById("active4").style.color = "grey";
document.getElementById("ok3").style.display = "none";
}

