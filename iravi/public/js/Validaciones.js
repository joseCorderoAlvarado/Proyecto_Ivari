var inputUser = document.getElementById('username');
input.oninvalid = function(event) {
    event.target.setCustomValidity('Escribe el usuario correctamente');
}
var inputPassword = document.getElementById('password');
input.oninvalid = function(event) {
    event.target.setCustomValidity('Escribe la contrasseña correctamente');
}