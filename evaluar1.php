<?php require 'includes/funciones.php';
incluirTemplate('header'); ?>

<div class="contenedor sombra">
  <div class="grid centrar-responsables">

    <div class="card1 element">
      <img class="logo_card" loading="Lazy" src="build/img/logo_solutions.png" alt="logo-solutions">
    </div>

    <div class="card2">

      <label>Sistema Que Implementar</label>
      <form class="formulario">
        <select class="formulario__campo">
          <option disabled selected>Versión de Sistema</option>
          <!-- disabled=off option. Selected=default -->
          <option>Inventario</option>
          <option>Contabilidad</option>
          <option>Planilla</option>
        </select>
      </form>

    </div>

    <div class="card3">
      <label>Cliente</label>
      <input class="input-text" placeholder="Nombre del Cliente" type="text"></input>
    </div>

    <div class="card4">
      <label>Versión</label>
      <input class="input-text" placeholder="Versión a Implementar" type="text"></input>
    </div>

    <div class="card5">
      <label>Ejecutivo</label>
      <form class="formulario">
        <select class="formulario__campo">
          <option disabled selected>Implementador</option>
          <!-- disabled=off option. Selected=default -->
          <option>Carlos Reyes</option>
          <option>Frank Peinado</option>
          <option>Lesly Guttierez</option>
          <option>Mireia Zapatero</option>
          <option>Franco López</option>
        </select>
      </form>
    </div>

    <div class="card6">
      <label>Fecha</label>
      <input class="formulario__campo" type="date" min="2021-12-31"></input>
    </div>
  </div>
  <!--Fin contenedor-->
  <!-- Fin d-principal-->

  <main>
    <!-- inicio main -->
    <div class="descripcion">
      <h2>Descripción</h2>
      <textarea class="text-area" type="text" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, sequi praesentium nostrum eius aperiam expedita eos et mollitia ipsam quia odio nobis porro labore quo provident unde sint nulla, neque tenetur laboriosam maxime consequatur voluptate magni dolores! Illum consequatur temporibus quibusdam similique iusto. Neque corporis voluptates saepe rem exercitationem voluptate."></textarea>
    </div>

    <h2>Puestos Implicados y Responsabilidades</h2>
    <form class="formulario-preguntas">
      <div class="table-container">
        <table class="tablas">

          <th class="sub-titulos">#</th>
          <th class="sub-titulos">Descripción</th>
          <th class="sub-titulos">Definir</th>
          <th class="sub-titulos">Comentarios</th>

          <tr>
            <td>1</td>
            <td>¿Cuenta con un Servidor de Datos?</td>
            <td>
              <input class="text" name="server" type="radio">Si</input>
              <input class="text" name="server" type="radio">No</input>
            </td>
            <td></td>
          </tr>

          <tr>
            <td>2</td>
            <td>¿Cuenta con licencia de software de sistema operativo, antivirus y backoffice?</td>
            <td>
              <input class="text" name="licencia" type="radio">Si</input>
              <input class="text" name="licencia" type="radio">No</input>
            </td>
            <td></td>
          </tr>

          <tr>
            <td>3</td>
            <td>¿Cuenta con política de copias de respaldo? Si la respuesta es si, defina la frecuencia y modalidad.
            </td>
            <td>
              <input class="text" name="respaldo" type="radio">Si</input>
              <input class="text" name="respaldo" type="radio">No</input>
            </td>
            <td></td>
          </tr>

          <tr>
            <td>4</td>
            <td>¿Considera que el hardware existente es el adecuado a las necesidades que demanda la organización?
            </td>
            <td>
              <input class="text" name="adecuado" type="radio">Si</input>
              <input class="text" name="adecuado" type="radio">No</input>
            </td>
            <td></td>
          </tr>

          <tr>
            <td>5</td>
            <td>¿Cual es el Tipo de Red? (Cableado, Wifi, otros), especifique.</td>
            <td>
              <input class="text" placeholder="Tipo de Red" type="text"></input>
            <td></td>
          </tr>

          <tr>
            <td>6</td>
            <td>¿Cual es el sistema operativo de los equipos?</td>
            <td>
              <input class="text" placeholder="Sistema Operativo" type="text"></input>
            <td></td>
          </tr>
        </table>
      </div>
    </form>
</div>
<!--contenedor sombra-->

<main>
  <div class="contenedor sombra">
    <div class="descripcion">
      <h2>Observaciones</h2>
      <textarea class="text-area" type="text" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, sequi praesentium nostrum eius aperiam expedita eos et mollitia ipsam quia odio nobis porro labore quo provident unde sint nulla, neque tenetur laboriosam maxime consequatur voluptate magni dolores! Illum consequatur temporibus quibusdam similique iusto. Neque corporis voluptates saepe rem exercitationem voluptate."></textarea>
    </div>

    <div class="descripcion">
      <h2>Estado General del Equipo</h2>
      <input class="text" name="estado_del_equipo" type="radio">Alto</input>
      <input class="text" name="estado_del_equipo" type="radio">Medio</input>
      <input class="text" name="estado_del_equipo" type="radio">Bajo</input>
    </div>

    <div class="descripcion">
      <h2>Observaciones Generales</h2>
      <textarea class="text-area" type="text" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, sequi praesentium nostrum eius aperiam expedita eos et mollitia ipsam quia odio nobis porro labore quo provident unde sint nulla, neque tenetur laboriosam maxime consequatur voluptate magni dolores! Illum consequatur temporibus quibusdam similique iusto. Neque corporis voluptates saepe rem exercitationem voluptate."></textarea>
    </div>

    <div class="table-container">
      <h2>Recomendaciones Relacionadas</h2>
      <table class="tablas">

        <th class="sub-titulos">#</th>
        <th class="sub-titulos">Nombre del Documento</th>
        <th class="sub-titulos">Explicación (en caso de ser necesaria)</th>

        <tr>
          <td>1</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>2</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>3</td>
          <td></td>
          <td></td>
        </tr>

        <tr>
          <td>4</td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>

    <div class="centrar-responsables">
      <section class="flex-container">
        <div class="box">
          <label>Elaborado Por</label>
          <form class="formulario">
            <select class="formulario__campo">
              <option disabled selected>Implementador</option>
              <!-- disabled=off option. Selected=default -->
              <option>Carlos Reyes</option>
              <option>Frank Peinado</option>
              <option>Lesly Guttierez</option>
              <option>Mireia Zapatero</option>
              <option>Franco López</option>
            </select>
          </form>
        </div>



        <div class="box">
          <label>Revisado Por</label>
          <form class="formulario">
            <select class="formulario__campo">
              <option disabled selected>Implementador</option>
              <!-- disabled=off option. Selected=default -->
              <option>Carlos Reyes</option>
              <option>Frank Peinado</option>
              <option>Lesly Guttierez</option>
              <option>Mireia Zapatero</option>
              <option>Franco López</option>
            </select>
          </form>
        </div>

        <div class="box">
          <label>Aprobado Por</label>
          <form class="formulario">
            <select class="formulario__campo">
              <option disabled selected>Implementador</option>
              <!-- disabled=off option. Selected=default -->
              <option>Carlos Reyes</option>
              <option>Frank Peinado</option>
              <option>Lesly Guttierez</option>
              <option>Mireia Zapatero</option>
              <option>Franco López</option>
            </select>
          </form>
        </div>
      </section>

      <section class="flex-container">
        <div>
          <button class="bt-file bordeado">
            <i class="fa-solid fa-file-signature"></i>
            Añadir Firma
            <label for="bt-file">
            </label>
            <input type="file" id="bt-file">
          </button>
        </div>

        <div>
          <button class="bt-file bordeado">
            <i class="fa-solid fa-file-signature"></i>
            Añadir Firma
            <label for="bt-file">
            </label>
            <input type="file" id="bt-file">
          </button>
        </div>

        <div>
          <button class="bt-file bordeado">
            <i class="fa-solid fa-file-signature"></i>
            Añadir Firma
            <label for="bt-file">
            </label>
            <input type="file" id="bt-file">
          </button>
        </div>

      </section>
    </div>
    <!--termina div responsables-->
</main>

<footer class="site-footer">
  <p>Todos los derechos reservados.</p>
</footer>
<script src="build/js/app.js"></script>

</body>