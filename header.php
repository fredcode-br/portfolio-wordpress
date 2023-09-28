<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . './assets/css/main.css'  ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . './assets/css/header.css'  ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . './assets/css/footer.css'  ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200;700&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
<header class="main-header d-flex align-items-center position-fixed top-0 start-0 end-0">
        <div class="container p-0">
            <nav class="d-flex justify-content-between">
                <?php the_custom_logo(); ?>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list d-flex align-items-center list-unstyled m-0 gap-5">
                    <li class="nav-item">
                        <button class="nav-action active" data-scroll-to="hero">
                            Início
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-action active" data-scroll-to="skills">
                            Habilidades
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-action active" data-scroll-to="me">
                            Quem sou
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-action active" data-scroll-to="projects">
                            Projetos
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-action active" data-scroll-to="services">
                            Serviços
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<?php


    
