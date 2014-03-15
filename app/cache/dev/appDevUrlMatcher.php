<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/1e6974e')) {
                // _assetic_1e6974e
                if ($pathinfo === '/css/1e6974e.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1e6974e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1e6974e',);
                }

                // _assetic_1e6974e_0
                if ($pathinfo === '/css/1e6974e_screen_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1e6974e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1e6974e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/5642938')) {
                // _assetic_5642938
                if ($pathinfo === '/css/5642938.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5642938,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5642938',);
                }

                // _assetic_5642938_0
                if ($pathinfo === '/css/5642938_menu_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5642938,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5642938_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/1f38064')) {
                // _assetic_1f38064
                if ($pathinfo === '/css/1f38064.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f38064',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1f38064',);
                }

                // _assetic_1f38064_0
                if ($pathinfo === '/css/1f38064_forms_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1f38064',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1f38064_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/b1af6fb')) {
                // _assetic_b1af6fb
                if ($pathinfo === '/css/b1af6fb.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1af6fb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b1af6fb',);
                }

                // _assetic_b1af6fb_0
                if ($pathinfo === '/css/b1af6fb_boton_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b1af6fb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b1af6fb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/c606c95')) {
                // _assetic_c606c95
                if ($pathinfo === '/css/c606c95.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c606c95',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c606c95',);
                }

                // _assetic_c606c95_0
                if ($pathinfo === '/css/c606c95_sidebar_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c606c95',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c606c95_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/53ecf78')) {
                // _assetic_53ecf78
                if ($pathinfo === '/css/53ecf78.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '53ecf78',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_53ecf78',);
                }

                // _assetic_53ecf78_0
                if ($pathinfo === '/css/53ecf78_cart_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '53ecf78',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_53ecf78_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/b8f18bb')) {
                // _assetic_b8f18bb
                if ($pathinfo === '/js/b8f18bb.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b8f18bb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b8f18bb',);
                }

                // _assetic_b8f18bb_0
                if ($pathinfo === '/js/b8f18bb_jquery-1.7.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b8f18bb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b8f18bb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/f73b9e2')) {
                // _assetic_f73b9e2
                if ($pathinfo === '/js/f73b9e2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f73b9e2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f73b9e2',);
                }

                // _assetic_f73b9e2_0
                if ($pathinfo === '/js/f73b9e2_jquery.reveal_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f73b9e2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f73b9e2_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/cbb2827')) {
            // _assetic_cbb2827
            if ($pathinfo === '/images/cbb2827.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cbb2827',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_cbb2827',);
            }

            // _assetic_cbb2827_0
            if ($pathinfo === '/images/cbb2827_delete_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cbb2827',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_cbb2827_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/54be4f3')) {
            // _assetic_54be4f3
            if ($pathinfo === '/css/54be4f3.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '54be4f3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_54be4f3',);
            }

            // _assetic_54be4f3_0
            if ($pathinfo === '/css/54be4f3_productos_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '54be4f3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_54be4f3_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/4f63c61')) {
                // _assetic_4f63c61
                if ($pathinfo === '/images/4f63c61.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f63c61',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_4f63c61',);
                }

                // _assetic_4f63c61_0
                if ($pathinfo === '/images/4f63c61_bondiola1_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f63c61',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_4f63c61_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/a1dd853')) {
                // _assetic_a1dd853
                if ($pathinfo === '/images/a1dd853.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1dd853',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_a1dd853',);
                }

                // _assetic_a1dd853_0
                if ($pathinfo === '/images/a1dd853_lomitocurado1_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1dd853',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_a1dd853_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/26abfbc')) {
                // _assetic_26abfbc
                if ($pathinfo === '/images/26abfbc.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26abfbc',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_26abfbc',);
                }

                // _assetic_26abfbc_0
                if ($pathinfo === '/images/26abfbc_chori1_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26abfbc',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_26abfbc_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/0025d70')) {
                // _assetic_0025d70
                if ($pathinfo === '/css/0025d70.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0025d70',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0025d70',);
                }

                // _assetic_0025d70_0
                if ($pathinfo === '/css/0025d70_recetas_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0025d70',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0025d70_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/7710d01')) {
                // _assetic_7710d01
                if ($pathinfo === '/css/7710d01.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7710d01',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7710d01',);
                }

                // _assetic_7710d01_0
                if ($pathinfo === '/css/7710d01_reveal_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7710d01',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7710d01_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/8350bb7')) {
                // _assetic_8350bb7
                if ($pathinfo === '/images/8350bb7.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8350bb7',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_8350bb7',);
                }

                // _assetic_8350bb7_0
                if ($pathinfo === '/images/8350bb7_mas_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8350bb7',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_8350bb7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/ecfc170')) {
                // _assetic_ecfc170
                if ($pathinfo === '/images/ecfc170.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecfc170',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ecfc170',);
                }

                // _assetic_ecfc170_0
                if ($pathinfo === '/images/ecfc170_menos_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecfc170',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ecfc170_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/5ff4048')) {
            // _assetic_5ff4048
            if ($pathinfo === '/css/5ff4048.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5ff4048',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5ff4048',);
            }

            // _assetic_5ff4048_0
            if ($pathinfo === '/css/5ff4048_style1_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5ff4048',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5ff4048_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/f6f87d4')) {
            // _assetic_f6f87d4
            if ($pathinfo === '/images/f6f87d4.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f6f87d4',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f6f87d4',);
            }

            // _assetic_f6f87d4_0
            if ($pathinfo === '/images/f6f87d4_cabezera_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f6f87d4',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f6f87d4_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // TodoCerdoTodoCerdoBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'TodoCerdoTodoCerdoBundle_homepage');
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::indexAction',  '_route' => 'TodoCerdoTodoCerdoBundle_homepage',);
        }
        not_TodoCerdoTodoCerdoBundle_homepage:

        // TodoCerdoTodoCerdoBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_about;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::aboutAction',  '_route' => 'TodoCerdoTodoCerdoBundle_about',);
        }
        not_TodoCerdoTodoCerdoBundle_about:

        // TodoCerdoTodoCerdoBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_contact;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::contactAction',  '_route' => 'TodoCerdoTodoCerdoBundle_contact',);
        }
        not_TodoCerdoTodoCerdoBundle_contact:

        // TodoCerdoTodoCerdoBundle_faq
        if ($pathinfo === '/faq') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_faq;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PageController::faqAction',  '_route' => 'TodoCerdoTodoCerdoBundle_faq',);
        }
        not_TodoCerdoTodoCerdoBundle_faq:

        // TodoCerdoTodoCerdoBundle_newproducto
        if ($pathinfo === '/newproducto') {
            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::newAction',  '_route' => 'TodoCerdoTodoCerdoBundle_newproducto',);
        }

        // TodoCerdoTodoCerdoBundle_productos
        if ($pathinfo === '/producto') {
            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::indexAction',  '_route' => 'TodoCerdoTodoCerdoBundle_productos',);
        }

        // TodoCerdoTodoCerdoBundle_listproductos
        if (0 === strpos($pathinfo, '/listproducto') && preg_match('#^/listproducto(?P<idTipo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TodoCerdoTodoCerdoBundle_listproductos')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::listAction',));
        }

        // TodoCerdoTodoCerdoBundle_editarproducto
        if (0 === strpos($pathinfo, '/editarproducto') && preg_match('#^/editarproducto(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TodoCerdoTodoCerdoBundle_editarproducto')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::editarAction',));
        }

        // TodoCerdoTodoCerdoBundle_deleteproducto
        if (0 === strpos($pathinfo, '/deleteproducto') && preg_match('#^/deleteproducto(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TodoCerdoTodoCerdoBundle_deleteproducto')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::deleteAction',));
        }

        // TodoCerdoTodoCerdoBundle_updateproducto
        if (0 === strpos($pathinfo, '/updateproducto') && preg_match('#^/updateproducto(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TodoCerdoTodoCerdoBundle_updateproducto')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::updateAction',));
        }

        // TodoCerdoTodoCerdoBundle_descripcion
        if ($pathinfo === '/descripcion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_descripcion;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\ProductoController::descripcionAction',  '_route' => 'TodoCerdoTodoCerdoBundle_descripcion',);
        }
        not_TodoCerdoTodoCerdoBundle_descripcion:

        // TodoCerdoTodoCerdoBundle_addDetalle
        if ($pathinfo === '/addDetalle') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_addDetalle;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::addDetalleAction',  '_route' => 'TodoCerdoTodoCerdoBundle_addDetalle',);
        }
        not_TodoCerdoTodoCerdoBundle_addDetalle:

        // TodoCerdoTodoCerdoBundle_eliminarDetalle
        if ($pathinfo === '/eliminarDetalle') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_eliminarDetalle;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::eliminarDetalleAction',  '_route' => 'TodoCerdoTodoCerdoBundle_eliminarDetalle',);
        }
        not_TodoCerdoTodoCerdoBundle_eliminarDetalle:

        // TodoCerdoTodoCerdoBundle_darUbicacion
        if (0 === strpos($pathinfo, '/darUbicacion') && preg_match('#^/darUbicacion(?:/(?P<idUsuario>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_darUbicacion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'TodoCerdoTodoCerdoBundle_darUbicacion')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::darUbicacionAction',  'idUsuario' => 0,));
        }
        not_TodoCerdoTodoCerdoBundle_darUbicacion:

        if (0 === strpos($pathinfo, '/obtener')) {
            // TodoCerdoTodoCerdoBundle_obtenerBarrios
            if ($pathinfo === '/obtenerBarrios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_TodoCerdoTodoCerdoBundle_obtenerBarrios;
                }

                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::obtenerBarriosAction',  '_route' => 'TodoCerdoTodoCerdoBundle_obtenerBarrios',);
            }
            not_TodoCerdoTodoCerdoBundle_obtenerBarrios:

            // TodoCerdoTodoCerdoBundle_obtenerDireccion
            if ($pathinfo === '/obtenerDireccion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_TodoCerdoTodoCerdoBundle_obtenerDireccion;
                }

                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::obtenerDireccionAction',  '_route' => 'TodoCerdoTodoCerdoBundle_obtenerDireccion',);
            }
            not_TodoCerdoTodoCerdoBundle_obtenerDireccion:

        }

        // TodoCerdoTodoCerdoBundle_detalleCarrito
        if ($pathinfo === '/detalleCarrito') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_TodoCerdoTodoCerdoBundle_detalleCarrito;
            }

            return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\PedidoController::detalleCarritoAction',  '_route' => 'TodoCerdoTodoCerdoBundle_detalleCarrito',);
        }
        not_TodoCerdoTodoCerdoBundle_detalleCarrito:

        if (0 === strpos($pathinfo, '/receta')) {
            // receta
            if ($pathinfo === '/receta') {
                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::indexAction',  '_route' => 'receta',);
            }

            // receta_show
            if (preg_match('#^/receta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_show')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::showAction',));
            }

            // receta_new
            if ($pathinfo === '/receta/new') {
                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::newAction',  '_route' => 'receta_new',);
            }

            // receta_create
            if ($pathinfo === '/receta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_receta_create;
                }

                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::createAction',  '_route' => 'receta_create',);
            }
            not_receta_create:

            // receta_edit
            if (preg_match('#^/receta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_edit')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::editAction',));
            }

            // receta_update
            if (preg_match('#^/receta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_receta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_update')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::updateAction',));
            }
            not_receta_update:

            // receta_delete
            if (preg_match('#^/receta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_receta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receta_delete')), array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::deleteAction',));
            }
            not_receta_delete:

            // receta_descripcion
            if ($pathinfo === '/receta/descripcion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_receta_descripcion;
                }

                return array (  '_controller' => 'TodoCerdo\\TodoCerdoBundle\\Controller\\RecetaController::descripcionAction',  '_route' => 'receta_descripcion',);
            }
            not_receta_descripcion:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
