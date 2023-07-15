<?php

    include 'db/conexion.php';

?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Contacto - Barbería Alura</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="caja">
            <h1><img src="img/logo.png" alt="Logo de la Barbería Alura"></h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="agendas.php">Listado Citas</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- FORMULARIO DE INSETAR INFORMACION DE AGENDACION DE CITAS -->

    <main>
        <form action="back/almacenarInformacion.php" method="POST">
            <label for="nombreapellido">Nombre y Apellido</label>
            <input type="text" name="nombreApellido" id="nombreapellido" class="input-padron" required>

            <label for="correoelectronico">Correo Electrónico</label>
            <input type="email" name="email" id="correoelectronico" class="input-padron" required placeholder="email@dominio.com">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" class="input-padron" required placeholder="(XX) XXXX XXXX">

            <label for="mensaje">Mensaje</label>
            <textarea cols="70" name="descripcion" rows="10" id="mensaje" class="input-padron" required></textarea>

            <fieldset>
                <legend>¿Cómo le gustaría que lo contactemos?</legend>

                <label for="radio-email"><input type="radio" name="contacto" value="email"
                        id="radio-email">Email</label>

                <label for="radio-telefono"><input type="radio" name="contacto" value="telefono"
                        id="radio-telefono">Teléfono</label>

                <label for="radio-whatsapp"><input type="radio" name="contacto" value="whatsapp" id="radio-whatsapp"
                        checked>WhatsApp</label>

            </fieldset>

            <fieldset>
                <legend>¿En cuál horario prefiere ser atendido?</legend>
                <select>
                    <option name="horario">Mañana</option>
                    <option name="horario">Tarde</option>
                    <option name="horario">Noche</option>
                </select>
            </fieldset>

            <label class="checkbox" name="novedades"><input type="checkbox" checked>¿Le gustaría recibir novedades de la Barbería
                Alura?</label>

            <input type="submit" name="agregar" value="Enviar formulario" class="enviar">

        </form>

        <table>
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Horario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>08h ~ 20h</td>
                </tr>
                <tr>
                    <td>Miércoles</td>
                    <td>08h ~ 20h</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>08h ~ 20h</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <img src="img/logo-blanco.png" alt="Logo de la Barbería Alura">
        <p class="copyright">&copy Copyright Barbería Alura - 2020</p>
    </footer>
</body>

</html>