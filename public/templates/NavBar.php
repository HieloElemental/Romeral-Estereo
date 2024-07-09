<?php
function NavBar($titleGet)
{
    $titles = ["home" => "Inicio", "sobre-nosotros" => "Sobre Nosotros", "nuestra-programacion" => "Nuestra Programación"];
?>
<nav>
    <ul class="nav-brand">
        <li>
            <img src="<?php echo ASSETS ?>logo.png" alt="Logo">
        </li>
        <li>Romeral Estereo</li>
    </ul>
    <ul class="nav-links">
        <?php
    foreach ($titles as $titleKey => $titleText) {
        ?>
        <li class="nav-link">
            <a href="<?php echo "https://romeralestereo.com/" . $titleKey ?>" class="nav-link <?php if ($titleGet == $titleKey) {
            echo "active";
        } ?>">
                <?php echo $titleText ?>
            </a>
        </li>
        <?php
    } ?>
    </ul>
    <ul class="nav-open" id="nav-open">
        <li><i class="material-icons">menu</i></li>
    </ul>

</nav>
<?php
    return;
}