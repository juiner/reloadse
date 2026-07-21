<?php
/**
 * ReloadSe — Tema Filho
 *
 * Enfileira o estilo do tema filho e os assets do site institucional.
 *
 * @package reloadse-child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CSS base do tema filho (depende do CSS do GeneratePress).
 *
 * O GeneratePress carrega o próprio CSS automaticamente (handle: generate-style).
 * Em temas clássicos o style.css do filho NÃO é carregado sozinho — por isso
 * o enfileiramos aqui, garantindo que ele venha depois do CSS do pai.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'reloadse-child-style',
		get_stylesheet_uri(),
		array( 'generate-style' ),
		wp_get_theme()->get( 'Version' )
	);
} );

/**
 * Assets do site institucional (one-page), carregados apenas na home.
 *
 * Estrutura:
 *   assets/css/fonts.css  — @font-face das fontes locais (Sora, IBM Plex Sans/Mono)
 *   assets/css/site.css   — estilos do site
 *   assets/js/site.js     — interações (reveal, contadores, menu, formulário)
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( ! is_front_page() ) {
		return;
	}

	$dir = trailingslashit( get_stylesheet_directory_uri() );
	$ver = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'reloadse-fonts', $dir . 'assets/css/fonts.css', array(), $ver );
	wp_enqueue_style( 'reloadse-site', $dir . 'assets/css/site.css', array( 'reloadse-fonts' ), $ver );

	wp_enqueue_script( 'reloadse-site', $dir . 'assets/js/site.js', array(), $ver, true );
}, 20 );

/**
 * Na home usamos marcação própria (front-page.php), sem o header/rodapé do
 * GeneratePress. Removemos o CSS do tema pai e do filho apenas nessa página
 * para evitar conflitos de layout — o site.css é totalmente autossuficiente.
 */
add_action( 'wp_enqueue_scripts', function () {
	if ( ! is_front_page() ) {
		return;
	}

	wp_dequeue_style( 'generate-style' );
	wp_dequeue_style( 'generate-style-grid' );
	wp_dequeue_style( 'reloadse-child-style' );
}, 100 );
