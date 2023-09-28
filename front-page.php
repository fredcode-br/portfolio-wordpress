<?php
require_once 'header.php';

if(have_posts()):   
    while(have_posts()): the_post();
    ?>

        <section data-scroll="hero" id="hero" class="d-flex align-items-center overflow-hidden py-5 px-0">
            <div class="container d-flex  justify-content-center justify-content-md-between align-items-center position-relative">
                <div class="text-hero d-flex align-items-center align-items-md-start flex-column w-75">
                    <h1 class="text-hero-pt-1 text-center text-md-start text-light fs-1 lh-1 pb-3 gap-1" style="font-weight: bold;">
                        Construindo o 
                        <span>futuro digital</span>
                        das empresas com inovação e qualidade incomparáveis.
                    </h1>
                    <ul class="icons-social d-flex gap-3 list-unstyled pb-2">
                        <li class="d-flex justify-content-center align-items-center">
                            <a href="https://www.instagram.com/fred_drufino/">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/instagram.svg' ?>" alt="">
                            </a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center">
                            <a href="https://www.linkedin.com/in/frederico-rufino/">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/linkedin.svg' ?>" alt="">
                            </a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center">
                            <a href="https://github.com/fredcode-br">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/github.svg' ?>" alt="">
                            </a>
                        </li>
                    </ul>
                    <a class="btn-fredcode" href="https://wa.me/5519996254267">Contrate-me</a>
                </div>
                <div class="image-hero d-none d-md-block">
                    <img src="<?= get_template_directory_uri() . '/assets/icons/hero.svg' ?>" alt="">
                </div>
        </section>

        <section data-scroll="skills" id="skills" class="py-5 px-0">
            <div class="container d-flex overflow-hidden position-relative p-0">
                <ul class="skills-list d-flex m-0 p-0 gap-1">
                    <?php
                        $argsSkills = array(
                            'posts_per_page' => '12',
                            'post_type' => 'habilidades',
                            'order'    => 'ASC'
                        );
                        $querySkills = new WP_Query($argsSkills);
                        if($querySkills->have_posts()):
                            while($querySkills->have_posts()): $querySkills->the_post();            
                                echo "<li class=\"skill d-flex  justify-content-center align-items-center \" id=".get_the_ID().">";
                                    the_post_thumbnail(); 
                                echo '</li>';
                            endwhile;
                        endif;
                    ?>    
                </ul>
                <ul class="skills-list d-flex m-0 p-0 gap-1">
                    <?php
                        $argsSkills = array(
                            'posts_per_page' => '12',
                            'post_type' => 'habilidades',
                            'order'    => 'ASC'
                        );
                        $querySkills = new WP_Query($argsSkills);
                        if($querySkills->have_posts()):
                            while($querySkills->have_posts()): $querySkills->the_post();            
                                echo "<li class=\"skill d-flex  justify-content-center align-items-center \" id=".get_the_ID().">";
                                    the_post_thumbnail(); 
                                echo '</li>';
                            endwhile;
                        endif;
                    ?>    
                </ul>
                <span class="skill-description d-none">*passe o cursor do mouse no card para ler*</span>
            </div>
        </section>

        <section data-scroll="me" id="me" class="py-5 px-0">
            <div class="container p-0">
                <div class="me-content d-flex flex-column flex-lg-row justify-content-center p-4">
                        <div class="image-me">
                            <img src="<?= get_template_directory_uri() . '/assets/img/me.png' ?>">
                        </div>
                        <div class="text-me d-flex flex-column justify-content-between ps-0 pt-5 ps-lg-5">
                            <div>
                                <h2 class="text-ligth">Quem sou</h2>
                                <span>Full Stack Developer | UI Designer</span>
                            </div>
                            <p class="pt-5 pb-3">
                            Meu nome é Frederico Rufino, sou desenvolvedor full stack e designer. 
                            Atualmente atuo como freelance criando experiências digitais personalizadas, 
                            combinando performance e design em um ambiente responsivo. Vamos trabalhar 
                            juntos para fazer o seu projeto se destacar!
                            </p>
                            <a class="btn-fredcode" href="https://wa.me/5519996254267">Contrate-me</a>
                        </div>
                    </div>
            </div>
        </section>

        <section data-scroll="recent-works" id="recent-works" class="d-none">
            <div class="container d-flex align-items-center justify-content-center p-0">
                <div class="content-works">
                    <ul class="works-list d-flex list-unstyled  ">
                        <?php
                            $argsWorks = array(
                                'post_type' => 'trabalhos',
                                'posts_per_page' => 5,
                                'order' => 'ASC'
                            );
                            $queryWorks = new WP_Query($argsWorks);
                            if($queryWorks->have_posts()):
                                while($queryWorks->have_posts()): $queryWorks->the_post();
                                    $postID = '1';
                                    echo "<button onclick=\"showJob('$postID')\">";
                                        the_title(); 
                                    echo '</button>';
                                endwhile;
                            endif;
                        ?>
                    </ul>
                    <div class="work-data d-flex align-items-center justify-content-center">
                        <div class="image-work">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="text-work">
                            <?php 
                                the_title('<h3>','</h3>');
                                echo '<h4 id="cargo-job">Desenvolvedor Full Stack</h4>';
                                the_content('<p id="description-job">','</p>');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section data-scroll="projects" id="projects" class="py-5 px-0">
            <div class="container projects-content p-0 d-flex flex-column align-items-center">
                <h2 class="text-ligth">Projetos</h2>
                <ul class="projects-list d-grid justify-content-between gap-2 p-0 pt-4 w-100 flex-wrap">
                    <?php
                        $argsProjects = array('post_type' => 'projetos');
                        $queryProjects = new WP_Query($argsProjects);

                        if($queryProjects->have_posts()):
                            while($queryProjects->have_posts()): $queryProjects->the_post();
                                $projectLink = get_post_meta($post->ID, '_link_projeto', true ); 
                                echo '<li class="card-project d-flex flex-column align-items-center justify-content-around p-3 gap-2">';
                                    the_post_thumbnail();
                                    the_title('<h3>','</h3>'); 
                                    the_content('<p">','</p>');
                                    echo '<a href="'.$projectLink.'">Visualizar projeto</a>';
                                echo '</li>';
                            endwhile;
                        endif;
                    ?>
                </ul>
                <a class="btn-fredcode mt-3 text-light" href="https://github.com/fredcode-br?tab=repositories">Repositórios no GitHub</a>
            </div>
        </section>

        <section data-scroll="services" id="services" class="py-5 px-0">
            <div class="container services-content p-0 d-flex flex-column align-items-center">
                <h2 class="text-ligth">Serviços</h2>
                <ul class="services-list d-flex justify-content-around list-unstyled gap-4 m-0 p-0 pt-4 w-100">
                    <li class="card-service d-flex flex-column justify-content-around align-items-center p-2">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/design.svg' ?>" alt="">
                        <h3 class="text-center">UI Design</h3>
                        <p>Crio interfaces que são claras, objetivas e, acima de tudo, intuitivas para proporcionar a melhor experiência ao usuário.</p>
                    </li>
                    <li class="card-service d-flex flex-column justify-content-around align-items-center p-2">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/frontend.svg' ?>" alt="">
                        <h3 class="text-center">Desenvolvimento Frontend</h3>
                        <p>Construo interfaces cativantes que unem design impressionante e funcionalidade perfeita, garantindo que a primeira impressão seja sempre inesquecível.</p>
                    </li>
                    <li class="card-service d-flex flex-column justify-content-around align-items-center p-2">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/backend.svg' ?>" alt="">
                        <h3 class="text-center">Desenvolvimento Backend</h3>
                        <p>Nos bastidores, construo a base sólida que sustenta aplicações poderosas, garantindo que tudo funcione de maneira eficiente e segura, sem que os usuários percebam.</p>
                    </li>
                </ul>
            </div>
        </section> 

    <?php
    endwhile;
endif;

require_once 'footer.php';
