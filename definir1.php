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
            <td>Jefe del Proyecto (Cliente)</td>
            <td>
              <input class="text" placeholder="Jefe del Proyecto" type="text"></input>
            </td>
            <td>Persona a cargo, quien gestionara, autoriza y lidera tanto proyecto como la comunicación Cliente –
              Solutions
              Tech</td>
          </tr>

          <tr>
            <td>2</td>
            <td>Encargado de Soporte IT (Cliente</td>
            <td>
              <input class="text" placeholder="Encargado de IT" type="text"></input>
            </td>
            <td>Definir si el cliente cuenta con encargado de Soporte Informático.</td>
          </tr>

          <tr>
            <td>3</td>
            <td>Tipo de Instalación del Sistema</td>
            <td>
              <input class="text" placeholder="Tipo de Instalación" type="text"></input>
            </td>
            <td>Local, Red, Servidor Virtual.</td>
          </tr>

          <tr>
            <td>4</td>
            <td>¿Cuenta con un Servidor?</td>
            <td>
              <input class="text" placeholder="¿Cliente tiene servidor?" type="text"></input>
            </td>
            <td>Cliente cuenta con un servidor y políticas de respaldo de información.</td>
          </tr>

          <tr>
            <td>5</td>
            <td>Cantidad de equipos a instalar sistema.</td>
            <td>
              <input class="text" name="No. Usuarios" min="1" type=number>
            <td>Definir el numero de computadoras incluyendo servidor que se instalara el sistema. (Importante en la
              OT
              debe
              detallarse por equipos y usuario cada equipo y debe coincidir con este valor).</td>
          </tr>

          <tr>
            <td>6</td>
            <td>Cantidad de usuarios a utilizar sistema.</td>
            <td>
              <input class="text" type=number name="No. Usuarios" min="1" type=number>
            <td>Determinar cantidad de usuarios, Rol para coordinar con la capacitación.</td>
          </tr>

          <tr>
            <td>7</td>
            <td>Administrador de Sistema</td>
            <td><input class="text" placeholder="Nombre del Administrador" type="text"></input></td>
            <td>Determinar Usuario con el Rol de administrador, y creador de usuarios.</td>
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
      <h2>Documentos Relacionados</h2>
    </div>

    <div class="table-container">
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

    <h2>Responsables</h2>
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