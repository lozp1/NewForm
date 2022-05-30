document.addEventListener("DOMContentLoaded", function () {
  darkMode(); // nombre funcion
});

function darkMode() {
  // llamando a función creada (en linea 5)
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme:dark)");
  //console.log(prefiereDarkMode.matches); // preferencia de color en equipo

  if (prefiereDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  prefiereDarkMode.addEventListener("change", function () {
    // ajuste automatico segun seleccion de color en vivo
    if (prefiereDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const botonDarkMode = document.querySelector(".dark-mode-boton"); // llamando a clase creada en index.

  botonDarkMode.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode"); // agrega la clase "dark-mode" al body
  });
}