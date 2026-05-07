<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emre Yılmaz, yaratıcı web tasarımcısı portfolyosu.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Header Navigation -->
    <header id="header">
        <div class="container nav-container">
            <a href="<?php echo home_url(); ?>" class="logo">&lt;Emre Yılmaz /&gt;</a>
            <nav class="nav-links">
                <a href="#about">Hakkımda</a>
                <a href="#services">Neler Yapıyorum?</a>
                <a href="#portfolio">Portfolyo</a>
                <a href="#pricing">Planlar</a>
                <a href="#faq">S.S.S</a>
            </nav>
            <div class="nav-actions">
                <button class="btn btn-premium trigger-contact-modal">Benimle Çalışın <i
                        class="fa-solid fa-arrow-right"></i></button>
            </div>
            <button class="menu-toggle" aria-label="Menu Toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>
