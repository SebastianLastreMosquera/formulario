addEventListener('load', () => {
  listarPersonas();  
});

const listarPersonas = () => {
  const lista = document.getElementById('listar-personas');
  fetch('listar-personas.php')
  .then(response => response.ok ? Promise.resolve(response) : Promise.reject(response))
    .then(response => response.json())
      .then(response => {
        lista.innerHTML = '';
          const fragmento = document.createDocumentFragment();
          for (const personas of response) {
              const filaTabla = document.createElement("tr");
              const nombre = document.createElement("td");
              const apellido = document.createElement("td");
              const telefono = document.createElement("td");

              nombre.textContent = personas.nombre;
              apellido.textContent = personas.apellido;
              telefono.textContent = personas.telefono;

              fragmento.appendChild(filaTabla).appendChild(nombre).insertAdjacentElement('afterend', apellido).insertAdjacentElement('afterend', telefono);
          }
          lista.appendChild(fragmento) 
        }
      )
      .catch(reject => console.log(reject))
}

  const btnGuardar = document.getElementById('btn-guardar');
  const formulario = document.getElementById('formulario');
  const mostrar = document.getElementById('btn-mostrar');
  const ocultar = document.getElementById('btn-ocultar');
  let listado = document.getElementById('listado');
  // let apellido = document.getElementById('apellido');
  // let telefono = document.getElementById('telefono');
  listado.style.display="none";
  mostrar.style.display="none";
  btnGuardar.style.display="block"

  const  ocultarDatos = () =>{
    ocultar.style.display="none";
    formulario.style.display="none";
    listado.style.display="block";
    mostrar.style.display="block";
    btnGuardar.style.display="none";
    listarPersonas();
  }

  ocultar.addEventListener('click', () => {
    ocultarDatos()
  })


  mostrar.addEventListener('click', () => {
    mostrar.style.display="none";
    ocultar.style.display="block";
    formulario.style.display="block";
    listado.style.display="none";
    btnGuardar.style.display="block"
    listarPersonas();
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



