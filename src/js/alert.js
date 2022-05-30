EventListener();

function EventListener() {
  const alerta = document.querySelector(".alerta");
  alerta.addEventListener("submit", validar);
}

function validar(e) {
  e.preventDefault();

  const password = (document.querySelector(".password").value);

  if (password >= 1) {
    console.log("Debes colocar un correo electrónico");
  } else {
    console.log("Campo lleno crack");
  }
}
