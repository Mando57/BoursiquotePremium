<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/4a3f6b4')) {
                // _assetic_4a3f6b4
                if ($pathinfo === '/css/4a3f6b4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a3f6b4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4a3f6b4',);
                }

                // _assetic_4a3f6b4_0
                if ($pathinfo === '/css/4a3f6b4_cssGeneral_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a3f6b4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4a3f6b4_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/0e4d8f7')) {
                // _assetic_0e4d8f7
                if ($pathinfo === '/css/0e4d8f7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e4d8f7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0e4d8f7',);
                }

                // _assetic_0e4d8f7_0
                if ($pathinfo === '/css/0e4d8f7_cssGeneral_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e4d8f7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0e4d8f7_0',);
                }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // la_fleur_symfony_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'la_fleur_symfony_homepage');
            }

            return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::indexAction',  '_route' => 'la_fleur_symfony_homepage',);
        }

        if (0 === strpos($pathinfo, '/catalogue')) {
            // la_fleur_symfony_catalogue
            if ($pathinfo === '/catalogue') {
                return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::indexAction',  '_route' => 'la_fleur_symfony_catalogue',);
            }

            // la_fleur_symfony_categorie
            if (preg_match('#^/catalogue/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'la_fleur_symfony_categorie')), array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::categorieAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // la_fleur_symfony_backoff
            if ($pathinfo === '/administrer') {
                return array (  '_controller' => 'LaFleurSymfonyBundle::index',  '_route' => 'la_fleur_symfony_backoff',);
            }

            // la_fleur_symfony_accueil
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'la_fleur_symfony_accueil',);
            }

            // la_fleur_symfony_ajouterpanier
            if (0 === strpos($pathinfo, '/ajouterpanier') && preg_match('#^/ajouterpanier/(?P<cat>[^/]++)/(?P<prod>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'la_fleur_symfony_ajouterpanier')), array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::ajouterPanierAction',));
            }

        }

        // la_fleur_symfony_voirPanier
        if ($pathinfo === '/panier') {
            return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::voirPanierAction',  '_route' => 'la_fleur_symfony_voirPanier',);
        }

        // la_fleur_symfony_nouveau
        if ($pathinfo === '/nouveau') {
            return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::nouveauClientAction',  '_route' => 'la_fleur_symfony_nouveau',);
        }

        // la_fleur_symfony_connec
        if ($pathinfo === '/connec') {
            return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::connectionClientAction',  '_route' => 'la_fleur_symfony_connec',);
        }

        // la_fleur_symfony_validerPanier
        if ($pathinfo === '/validPanier') {
            return array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::validPanierAction',  '_route' => 'la_fleur_symfony_validerPanier',);
        }

        // la_fleur_symfony_retirerPanier
        if (0 === strpos($pathinfo, '/retirerPanier') && preg_match('#^/retirerPanier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'la_fleur_symfony_retirerPanier')), array (  '_controller' => 'SIO\\LaFleurSymfonyBundle\\Controller\\catalogueController::retirerPanierAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
