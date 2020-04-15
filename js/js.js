
const btnGuardar = document.getElementById('btn-guardar');
const formulario = document.getElementById('formulario');
const mostrar = document.getElementById('btn-mostrar');
const ocultar = document.getElementById('btn-ocultar');
const lista = document.getElementById('listado');
let nombre = document.getElementById('nombre');
let apellido = document.getElementById('apellido');
let telefono = document.getElementById('telefono');

ocultar.addEventListener('click', () => {
  formulario.style.display="none";
  lista.style.display="block";
  btnGuardar.style.display="none"
})

mostrar.addEventListener('click', () => {
  formulario.style.display="block";
  lista.style.display="none";
  btnGuardar.style.display="block"
})


btnGuardar.addEventListener('click', () => {
  let datos = new FormData(formulario);

  fetch('agregar.php', {
      method: 'POST',
      body: datos
    })
    .then(response => response.json())
    .then(response => {
      console.log(response)
      if (response !== "") {
        alert('Datos agregados');
        formulario.reset();
      }
    })
})