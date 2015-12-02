<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
