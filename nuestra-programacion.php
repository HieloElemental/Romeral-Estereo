<?php
require "globals.php";
require TEMPLATES . "SiteTemplate.php";
require TEMPLATES . "HeaderN.php";
require TEMPLATES . "Footer.php";
require TEMPLATES . "WelcomeCard.php";
require TEMPLATES . "EarCard.php";

SiteTemplate("Nuestra Programación", function () {
?>
<?php echo HeaderN("Echanos un oido", "nuestra-programación"); ?>
<main>
    <div class="container">
        <div class="card w-45-p">
            <?php echo EarCard(); ?>
        </div>
        <div class="card w-45-p">
            <?php echo WelcomeCard(); ?>
        </div>
        <div class="card card-special w-100-p">
            <h1>nuestra Programación</h1>
            <table>
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Género</td>
                        <td>Hora</td>
                        <td>Día</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Música Variada</td>
                        <td>Vallenato - Popular - Tropical - Romantica</td>
                        <td>00:00 - 6:00am</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Contacto Romeral</td>
                        <td>Todos los generos</td>
                        <td>10:00am - 12:00m</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>12:00m - 2:00pm</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Contacto Romeral</td>
                        <td>Todos los generos</td>
                        <td>2:00pm - 5:00pm</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>El retorno Romeral</td>
                        <td>Salsa Romantica - Vallenato Romantico - Balada Romantica</td>
                        <td>5:00pm - 8:00pm</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Las clasicas de Romeral</td>
                        <td>Todos los generos</td>
                        <td>6:00am - 9:00am</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>9:00am - 10:00am</td>
                        <td>Lunes - Viernes</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>8:00pm - 9:00pm</td>
                        <td>Lunes - Jueves</td>
                    </tr>
                    <tr>
                        <td>Lunes de Plancha</td>
                        <td>Balada Romantica en Español</td>
                        <td>9:00pm - 00:00</td>
                        <td>Lunes</td>
                    </tr>
                    <tr>
                        <td>Martes de Pop</td>
                        <td>Pop en Español - Rock en Español</td>
                        <td>9:00pm - 00:00</td>
                        <td>Martes</td>
                    </tr>
                    <tr>
                        <td>Miércoles de Vallenato</td>
                        <td>Vallenato</td>
                        <td>9:00pm - 00:00</td>
                        <td>Miércoles</td>
                    </tr>
                    <tr>
                        <td>Jueves de Salsa</td>
                        <td>Salsa</td>
                        <td>9:00pm - 00:00</td>
                        <td>Jueves</td>
                    </tr>
                    <tr>
                        <td>Al ritmo de la Noche</td>
                        <td>Todos los generos</td>
                        <td>7:00pm - 6:00am</td>
                        <td>Viernes - Sábado</td>
                    </tr>
                    <tr>
                        <td>Las clásicas de Romeral</td>
                        <td>Todos los generos</td>
                        <td>6:00am - 9:00am</td>
                        <td>Sábado</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>9:00am - 7:00pm</td>
                        <td>Sábado</td>
                    </tr>
                    <tr>
                        <td>Añoranzas</td>
                        <td>Música de Antaño</td>
                        <td>3:00pm - 5:00pm</td>
                        <td>Domingo</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>5:00pm - 00:00</td>
                        <td>Domingo</td>
                    </tr>
                    <tr>
                        <td>Desenguayabe Romeral</td>
                        <td>Musica Popular</td>
                        <td>6:00am - 9:00am</td>
                        <td>Domingo</td>
                    </tr>
                    <tr>
                        <td>Música Variada</td>
                        <td>Todos los generos</td>
                        <td>12:00am - 12:00m</td>
                        <td>Domingo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php echo Footer(); ?>
<?php
});
?>