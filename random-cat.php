<?php
/**
 * Random Cats.
 *
 * A shortcode to display random cats in your posts and pages.
 *
 * @package   WP_Random_Cats
 * @author    Andr&eacute;s Villarreal <andrezrv@gmail.com>
 * @license   GPL-2.0
 * @link      https://github.com/andrezrv/wp-random-cats
 * @copyright 2014 Andrés Villarreal
 *
 * @wordpress-plugin
 * Plugin Name:       Random Cats
 * Plugin URI:        https://github.com/andrezrv/wp-random-cats
 * Description:       A shortcode to display random cats in your posts and pages.
 * Version:           1.0
 * Author:            Andr&eacute;s Villarreal
 * Author URI:        http://www.andrezrv.com
 * License:           GPL-2.0
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
add_shortcode( 'random-cat', 'random_cat' );
/**
 * Display a random cat. Period.
 *
 * @return string
 * @since  1.0
 */
function random_cat() {
	$cat = '<div id="random-cat">';
	$cat .= '<a href="http://thecatapi.com"><img src="http://thecatapi.com/api/images/get?format=src&type=gif"></a>';
	$cat .= '</div>';
	$cat = apply_filters( 'random_cat', $cat );
	return $cat;
}
