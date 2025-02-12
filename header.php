<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    

    <a id="logo" href="/" title="Home">
        <img src="assets/images/testament_graphic_house.png" width="170" height="64" alt="testament graphic house" title="Home">
    </a>
    <nav id="menu">
        <img id="closemenu" src="assets/icons/close.svg" alt="close">

        <a class="<?= ($current_page == 'index.php' ? 'active' : '') ?>" href="/">Home</a>
        <a class="<?= ($current_page == 'aboutus.php' ? 'active' : '') ?>" href="aboutus.php">About Us</a>
        <a class="<?= ($current_page == 'services.php' ? 'active' : '') ?>" href="services.php">Services</a>
        <a class="<?= ($current_page == 'gallery.php' ? 'active' : '') ?>" href=" gallery.php">Gallery</a>
        <a class="<?= ($current_page == 'faq.php' ? 'active' : '') ?>" href=" faq.php">FAQ</a>
        <a class="<?= ($current_page == 'contact.php' ? 'active' : '') ?>" href="contact.php">Contact</a>

        <div class="socials">
            <a href="mailto:info@testamentgraphichouse.com" class="social"><img src="assets/icons/mail.svg" width="20" height="20" alt="email"></a>
            <a href="tel:+17049536197" class="social"><img src="assets/icons/phone.svg" width="20" height="20" alt="phone"></a>
            <a href="https://www.facebook.com/TestamentGraphicHouse/" class="social" target="_blank"><img src="assets/icons/facebook.svg" width="20" height="20" alt="facebook"></a>
            <a href="https://www.instagram.com/testamentgraphichouse/" target="_blank" class="social"><img src="assets/icons/instagram.svg" width="20" height="20" alt="instagram"></a>
        </div>
    </nav>

    <img src="assets/icons/menu.svg" id="openmenu" alt="menu">

</header>