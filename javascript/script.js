const form = document.getElementById('registro-especialistas');

form.addEventListener('submit', (event) => {
	event.preventDefault();

	const nombre = form.nombre.value;
	const apellidoPaterno = form['apellido-paterno'].value;
	const apellidoMaterno = form['apellido-materno'].value;
	const correoElectronico = form['correo-electronico'].value;
	const password = form.password.value;
	const confirmarPassword = form['confirmar-password'].value;
	const especialidad = form.especialidad.value;
	const fechaNacimiento = form['fecha-nacimiento'].value;
	const cedulaProfesional = form['cedula-profesional'].value;

	// TODO: validar datos y enviar a servidor

	console.log(nombre, apellidoPaterno, apellidoMaterno, correoElectronico, password, confirmarPassword, especialidad, fechaNacimiento, cedulaProfesional);
});

document.getElementById("registro-btn").addEventListener("click", function() {
    alert("El sistema está funcionando correctamente.");
  });
  