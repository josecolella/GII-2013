/**
 *	File: validateForm.js
 *	@Author: Jose Miguel Colella
 *	
 * Este archivo lo usamos para validar los campos del
 * formulario que permite a los usuarios hacer comentarios
 * sobre las noticias
 */

function validateForm(form) {


	fail = validateUserName(form.UserName.value);
	fail += validateFirstName(form.FirstNameText.value);
	fail += validateLastName(form.LastNameText.value);
	fail += validateBirthday(form.BirthdayText.value);
	fail += validateEmailText(form.EmailText.value);
	fail += validatePassword(form.password.value);
	fail += validateConfirmPassword(form.confirmPassword.value);
		
	if(fail == "") return true;
	else {alert(fail); document.getElementById("Password").value = ''; document.getElementById("ConfirmPassword").value = '';return false;}


}
function validateUserName(field) {
	if(field == null || field == "") 
		return "Campo [Nombre de Usuario] no puede esta vacio\n";
	else if(field <= 2) 
		return "Campo [Nombre de Usuario] tiene que tener más de 2 caracteres\n";
	else if(/[^a-zA-Z0-9_-]/.test(field))
		return "Campo [Nombre de Usuario] solo puede tener characters a-z,A-Z,0-9,-,_ \n";
	return "";
}
function validateFirstName(field) {
	if(field == null || field == "") 
		return "Campo [Nombre] no puede esta vacio\n";
	else if(field <= 2) 
		return "Campo [Nombre] tiene que tener más de 2 caracteres\n";
	else if(/[^a-zA-Z]/.test(field))
		return "Campo [Nombre] solo puede tener characters a-z,A-Z\n";
	return "";
}
function validateLastName(field) {
	if(field == null || field == "") 
		return "Campo [Apellido] no puede esta vacio\n";
	else if(field <= 2) 
		return "Campo [Apellido] tiene que tener más de 2 caracteres\n";
	else if(/[^a-zA-Z]/.test(field))
		return "Campo [Apellido] solo puede tener characters a-z,A-Z\n";
	return "";
}
function validateBirthday(field) {
	if(field == null || field == "") return "Campo [Fecha de Nacimiento] no puede esta vacio\n";
	return "";
}
function validateEmailText(field) {
	if(field == null || field == "") return "Campo [Correo Electrónico] no puede esta vacio\n";
	else if(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(field)) return "";
	else return "Campo [Correo Electrónico] incorrecto\n";
}
function validatePassword(field) {
	if(field == null || field == "") return "Campo [Contraseña] no puede estar vacio\n";
	else if(/[^a-zA-Z0-9_-]/.test(field)) 
		return "Campo [Nombre de Usuario] solo puede tener characters a-z,A-Z,0-9,-,_ \n";
	return "";
}
function validateConfirmPassword(field) {
	var password = document.getElementById("Password").value;

	if(field == null || field == "") 
		return "Campo [Confirmar Contraseña] no puede estar vacio\n";
	else if(password != field) 
		return "Campo [Confirmar Contraseña] tiene que ser igual que campo [Contraseña]\n";
	return "";
}