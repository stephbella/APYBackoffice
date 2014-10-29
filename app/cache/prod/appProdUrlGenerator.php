<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Backoffice\\SecurityBundle\\Controller\\LoginController::logAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'backoffice_contenus_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contents',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_contenus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::newcontenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new_contenus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_contenus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::editcontenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_contenus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contenus_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Backoffice\\ContenusBundle\\Controller\\ContenusController::deletecontenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contenus_delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'backoffice_menus_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_menus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::newmenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new_menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_menus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::editmenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit_menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menus_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Backoffice\\MenusBundle\\Controller\\MenusController::deletemenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/menus_delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
