<?php
require "globals.php";
require TEMPLATES . "SiteTemplate.php";
require TEMPLATES . "HeaderN.php";
require TEMPLATES . "Footer.php";
require TEMPLATES . "WelcomeCard.php";
require TEMPLATES . "EarCard.php";

SiteTemplate("Sobre Nosotros", function () {
?>
<?php echo HeaderN("Echanos un oido", "sobre-nosotros"); ?>
<main>
    <div class="container">
        <div class="card w-45-p">
            <?php echo EarCard(); ?>
        </div>
        <div class="card w-45-p">
            <?php echo WelcomeCard(); ?>
        </div>
        <div class="card w-100-p">
            <h1>Sobre Nosotros</h1>
            <p>Somos una emisora crossover donde queremos rescatar los ritmos de los años 70s, 80s, 90s y algunos
                ritmos del 2000.</p><br>
            <p>Donde nuestra escencia es la musica balada romantica en español - pop y rock en español - popular
                clasica y nueva ola - Ranchera - Vallenato clasico y nueva ola - Salsa calsica y nueva ola -
                Merengue - Tropical de todos los tiempos.</p><br>
            <p>Donde los artistas y sus canciones no mueren, llevandonos a recordar viejos tiempos, porque todo
                tiempo pasado fue mejor.</p>
        </div>
    </div>
</main>
<?php echo Footer(); ?>
<?php
});
?>