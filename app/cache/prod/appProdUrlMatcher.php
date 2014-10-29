<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Backoffice\\SecurityBundle\\Controller\\LoginController::logAction',  '_route' => 'login',);
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

        }

        // backoffice_contenus_homepage
        if ($pathinfo === '/contents') {
            return array (  '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::indexAction',  '_route' => 'backoffice_contenus_homepage',);
        }

        // new_contenus
        if ($pathinfo === '/new_contenus') {
            return array (  '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::newcontenuAction',  '_route' => 'new_contenus',);
        }

        // edit_contenus
        if (0 === strpos($pathinfo, '/edit_contenus') && preg_match('#^/edit_contenus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_contenus')), array (  '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::editcontenuAction',));
        }

        // contenus_delete
        if (0 === strpos($pathinfo, '/contenus_delete') && preg_match('#^/contenus_delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenus_delete')), array (  '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::deletecontenuAction',));
        }

        // backoffice_menus_homepage
        if ($pathinfo === '/menus') {
            return array (  '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::indexAction',  '_route' => 'backoffice_menus_homepage',);
        }

        // new_menus
        if ($pathinfo === '/new_menus') {
            return array (  '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::newmenuAction',  '_route' => 'new_menus',);
        }

        // edit_menus
        if (0 === strpos($pathinfo, '/edit_menus') && preg_match('#^/edit_menus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_menus')), array (  '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::editmenuAction',));
        }

        // menus_delete
        if (0 === strpos($pathinfo, '/menus_delete') && preg_match('#^/menus_delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'menus_delete')), array (  '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::deletemenuAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
