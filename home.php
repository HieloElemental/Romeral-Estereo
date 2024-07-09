<?php
require "globals.php";
require TEMPLATES . "SiteTemplate.php";
require TEMPLATES . "HeaderN.php";
require TEMPLATES . "Footer.php";
require TEMPLATES . "WelcomeCard.php";
require TEMPLATES . "EarCard.php";

SiteTemplate("Inicio", function () {
?>
<?php echo HeaderN("Bienvenidos", "home"); ?>
<main>
    <div class="container">
        <div class="card w-45-p">
            <?php echo WelcomeCard(); ?>
        </div>
        <div class="card w-45-p">
            <?php echo EarCard(); ?>
        </div>
    </div>
</main>
<?php echo Footer(); ?>
<?php
});
?>