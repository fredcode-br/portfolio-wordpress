<?php

function fredcode_registrando_taxonomia() {
    register_taxonomy(
        'cargo',
        'trabalhos',
        array(
            'labels' => array('name' => 'Cargo'),
            'hierarchical' => true
        )
    );
}

add_action('init', 'fredcode_registrando_taxonomia');

function fredcode_registrando_post_customizado() {
    register_post_type('habilidades',
        array(
            'labels' => array('name' => 'Habilidades'),
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-welcome-learn-more'
        )
    );

    register_post_type('trabalhos',
        array(
            'labels' => array('name' => 'Trabalhos'),
            'public' => true,
            'menu_position' => 2,   
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-html'
        )
    );

    register_post_type('projetos',
        array(
            'labels' => array('name' => 'Projetos'),
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-screenoptions'
        )
    );
}

add_action('init', 'fredcode_registrando_post_customizado');

function fredcode_adicionando_recursos() {
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails'); 
}

add_action('init', 'fredcode_adicionando_recursos');

function fredcode_registrando_metabox() {
    add_meta_box(
        'ai_registrando_metabox',
        'Links do Projeto',
        'ai_funcao_callback_projetos',
        'projetos'
    );
}

add_action('add_meta_boxes', 'fredcode_registrando_metabox');

function ai_funcao_callback_projetos($post){
    $linkProjeto = get_post_meta($post->ID, '_link_projeto', true);
    $linkGithub = get_post_meta($post->ID, '_link_github', true);
    
    ?>
    <label for="link_projeto">Link Projeto</label>
    <input type="text" name="link_projeto" style="width: 100%;" value="<?= $linkProjeto ?>" />
    <br>
    <br>
    <label for="link_github">Link Github</label>
    <input type="text" name="link_github" style="width: 100%;" value="<?= $linkGithub ?>" />
    <?php
}


function fredcode_salvando_dados_metabox($post_id) {
    foreach( $_POST as $key=>$value){
        if($key !== 'parte_1' && $key !== 'destaque' && $key !== 'parte_2' && $key !== 'link_projeto' && $key !== 'link_github'){
            continue;
        }

        if($key !== 'link_projeto' && $key !== 'link_github'){
            continue;
        }


        update_post_meta(
            $post_id,
            '_'.$key,
            $_POST[$key]
        );
    }
}

add_action('save_post', 'fredcode_salvando_dados_metabox');

function fredcode_adicionando_scripts()
{
    wp_enqueue_script('nab-bar-js', get_template_directory_uri() . '/assets/js/nav-bar.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'fredcode_adicionando_scripts');


