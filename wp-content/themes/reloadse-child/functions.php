<?php
/**
 * ReloadSe — Tema Filho
 * Enfileira o estilo do tema filho com dependência do tema pai (GeneratePress).
 *
 * O GeneratePress carrega o próprio CSS automaticamente (handle: generate-style).
 * Em temas clássicos o style.css do filho NÃO é carregado sozinho — por isso
 * o enfileiramos aqui, garantindo que ele venha depois do CSS do pai.
 */

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'reloadse-child-style',
        get_stylesheet_uri(),
        array( 'generate-style' ),
        wp_get_theme()->get( 'Version' )
    );
} );
