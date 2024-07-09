<?php
require TEMPLATES . "NavBar.php";

function HeaderN($title2, $navTitle)
{
?>
<header>
    <?php echo NavBar($navTitle); ?>
    <div class="titles">
        <img src="<?php echo ASSETS ?>logo.png" alt="RomeralEstereo - Logo">
        <h1>
            Romeral Estereo
        </h1>
        <h2>--
            <?php echo $title2 ?>
            --
        </h2>
        <audio id="stream" preload="none" autoplay="autoplay" controls="controls">
            <source src="<?php echo AUDIOLINK ?>" type="audio/mpeg">
        </audio>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 230">
        <path fill="rgb(240,130,32)" fill-opacity="1"
            d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,90.7C672,85,768,139,864,176C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
</header>
<?php
}
?>