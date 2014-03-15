<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_assetic_1e6974e' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1e6974e',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1e6974e.css',    ),  ),  4 =>   array (  ),),
        '_assetic_1e6974e_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1e6974e',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1e6974e_screen_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_5642938' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 5642938,    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5642938.css',    ),  ),  4 =>   array (  ),),
        '_assetic_5642938_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 5642938,    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5642938_menu_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_1f38064' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1f38064',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1f38064.css',    ),  ),  4 =>   array (  ),),
        '_assetic_1f38064_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1f38064',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1f38064_forms_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_b1af6fb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b1af6fb',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/b1af6fb.css',    ),  ),  4 =>   array (  ),),
        '_assetic_b1af6fb_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b1af6fb',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/b1af6fb_boton_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_c606c95' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c606c95',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/c606c95.css',    ),  ),  4 =>   array (  ),),
        '_assetic_c606c95_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c606c95',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/c606c95_sidebar_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_53ecf78' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '53ecf78',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/53ecf78.css',    ),  ),  4 =>   array (  ),),
        '_assetic_53ecf78_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '53ecf78',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/53ecf78_cart_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_b8f18bb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b8f18bb',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/b8f18bb.js',    ),  ),  4 =>   array (  ),),
        '_assetic_b8f18bb_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'b8f18bb',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/b8f18bb_jquery-1.7.2_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_f73b9e2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f73b9e2',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/f73b9e2.js',    ),  ),  4 =>   array (  ),),
        '_assetic_f73b9e2_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f73b9e2',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/f73b9e2_jquery.reveal_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_cbb2827' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'cbb2827',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/cbb2827.png',    ),  ),  4 =>   array (  ),),
        '_assetic_cbb2827_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'cbb2827',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/cbb2827_delete_1.png',    ),  ),  4 =>   array (  ),),
        '_assetic_54be4f3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '54be4f3',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/54be4f3.css',    ),  ),  4 =>   array (  ),),
        '_assetic_54be4f3_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '54be4f3',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/54be4f3_productos_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_4f63c61' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4f63c61',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/4f63c61.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_4f63c61_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4f63c61',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/4f63c61_bondiola1_1.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_a1dd853' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a1dd853',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/a1dd853.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_a1dd853_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a1dd853',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/a1dd853_lomitocurado1_1.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_26abfbc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '26abfbc',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/26abfbc.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_26abfbc_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '26abfbc',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/26abfbc_chori1_1.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_0025d70' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0025d70',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/0025d70.css',    ),  ),  4 =>   array (  ),),
        '_assetic_0025d70_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0025d70',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/0025d70_recetas_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7710d01' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7710d01',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/7710d01.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7710d01_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7710d01',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/7710d01_reveal_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_8350bb7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '8350bb7',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/8350bb7.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_8350bb7_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '8350bb7',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/8350bb7_mas_1.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_ecfc170' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ecfc170',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/ecfc170.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_ecfc170_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ecfc170',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/ecfc170_menos_1.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_5ff4048' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5ff4048',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5ff4048.css',    ),  ),  4 =>   array (  ),),
        '_assetic_5ff4048_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5ff4048',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/5ff4048_style1_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_f6f87d4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f6f87d4',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/f6f87d4.jpg',    ),  ),  4 =>   array (  ),),
        '_assetic_f6f87d4_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f6f87d4',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/f6f87d4_cabezera_1.jpg',    ),  ),  4 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::aboutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_faq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::faqAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/faq',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_newproducto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newproducto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_listproductos' => array (  0 =>   array (    0 => 'idTipo',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'idTipo',    ),    1 =>     array (      0 => 'text',      1 => '/listproducto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_editarproducto' => array (  0 =>   array (    0 => 'idProducto',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'idProducto',    ),    1 =>     array (      0 => 'text',      1 => '/editarproducto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_deleteproducto' => array (  0 =>   array (    0 => 'idProducto',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'idProducto',    ),    1 =>     array (      0 => 'text',      1 => '/deleteproducto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_updateproducto' => array (  0 =>   array (    0 => 'idProducto',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'idProducto',    ),    1 =>     array (      0 => 'text',      1 => '/updateproducto',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_descripcion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::descripcionAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/descripcion',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_addDetalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::addDetalleAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addDetalle',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_eliminarDetalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::eliminarDetalleAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarDetalle',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_darUbicacion' => array (  0 =>   array (    0 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::darUbicacionAction',    'idUsuario' => 0,  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'text',      1 => '/darUbicacion',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_obtenerBarrios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::obtenerBarriosAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/obtenerBarrios',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_obtenerDireccion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::obtenerDireccionAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/obtenerDireccion',    ),  ),  4 =>   array (  ),),
        'TodoCerdoTodoCerdoBundle_detalleCarrito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::detalleCarritoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detalleCarrito',    ),  ),  4 =>   array (  ),),
        'receta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/receta',    ),  ),  4 =>   array (  ),),
        'receta_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/receta',    ),  ),  4 =>   array (  ),),
        'receta_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/receta/new',    ),  ),  4 =>   array (  ),),
        'receta_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/receta/create',    ),  ),  4 =>   array (  ),),
        'receta_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/receta',    ),  ),  4 =>   array (  ),),
        'receta_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/receta',    ),  ),  4 =>   array (  ),),
        'receta_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/receta',    ),  ),  4 =>   array (  ),),
        'receta_descripcion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::descripcionAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/receta/descripcion',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}