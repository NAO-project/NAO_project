<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/blog')) {
            // blog_list
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\BlogController::bloglist',  '_route' => 'blog_list',);
            }

            // article_single
            if (0 === strpos($pathinfo, '/blog/single') && preg_match('#^/blog/single/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_single')), array (  '_controller' => 'App\\Controller\\BlogController::single',));
            }

            // new_article
            if ('/blog/new_article' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\BlogController::newArticleAction',  '_route' => 'new_article',);
<<<<<<< HEAD
            }

            // delete_article
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_article')), array (  '_controller' => 'App\\Controller\\BlogController::deleteArticleAction',));
            }

            // modify_article
            if (0 === strpos($pathinfo, '/blog/modify') && preg_match('#^/blog/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_article')), array (  '_controller' => 'App\\Controller\\BlogController::modifyArticleAction',));
=======
            }

            // delete_article
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_article')), array (  '_controller' => 'App\\Controller\\BlogController::deleteArticleAction',));
            }

            // modify_article
            if (0 === strpos($pathinfo, '/blog/modify') && preg_match('#^/blog/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_article')), array (  '_controller' => 'App\\Controller\\BlogController::modifyArticleAction',));
            }

        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ContactController::index',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // don
            if ('/don' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DonController::index',  '_route' => 'don',);
            }

            if (0 === strpos($pathinfo, '/don/CB')) {
                // donCB
                if ('/don/CB' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\DonController::CB',  '_route' => 'donCB',);
                }

                // CBcheckout
                if ('/don/CB_checkout' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\DonController::CBcheckout',  '_route' => 'CBcheckout',);
                }
<<<<<<< HEAD

            }

            // deny_obs
            if (0 === strpos($pathinfo, '/deny') && preg_match('#^/deny/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deny_obs')), array (  '_controller' => 'App\\Controller\\MapController::Deny',));
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // mentions_legales
        if ('/mentions-legales' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::mentions',  '_route' => 'mentions_legales',);
        }

        // map
        if ('/map' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MapController::MapAction',  '_route' => 'map',);
        }

        // association
        if ('/association' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::association',  '_route' => 'association',);
        }

        // validate_obs
        if (0 === strpos($pathinfo, '/validate') && preg_match('#^/validate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_obs')), array (  '_controller' => 'App\\Controller\\MapController::Validate',));
        }

        if (0 === strpos($pathinfo, '/research')) {
            // research
            if ('/research' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ResearchController::index',  '_route' => 'research',);
            }

            // results
            if ('/research/results' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ResearchController::results',  '_route' => 'results',);
            }

            // fiche_oiseau
            if (0 === strpos($pathinfo, '/research/fiche-oiseau') && preg_match('#^/research/fiche\\-oiseau/(?P<cd_name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_oiseau')), array (  '_controller' => 'App\\Controller\\ResearchController::fiche',));
            }

        }

        // subscribe
        if ('/subscribe' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::subscribeAction',  '_route' => 'subscribe',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // login
            if ('/user/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::login',  '_route' => 'login',);
>>>>>>> research
            }

            // blog_list
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\BlogController::bloglist',  '_route' => 'blog_list',);
            }

        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ContactController::index',  '_route' => 'contact',);
        }

<<<<<<< HEAD
        // don
        if ('/don' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\DonController::index',  '_route' => 'don',);
        }

        if (0 === strpos($pathinfo, '/don/CB')) {
            // donCB
            if ('/don/CB' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DonController::CB',  '_route' => 'donCB',);
=======
            // modifyuser
            if ('/user/modify' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::modifyUserAction',  '_route' => 'modifyuser',);
            }

            // user
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'user',);
>>>>>>> research
=======

>>>>>>> mapbranch
            }

            // deny_obs
            if (0 === strpos($pathinfo, '/deny') && preg_match('#^/deny/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deny_obs')), array (  '_controller' => 'App\\Controller\\MapController::Deny',));
            }

        }

<<<<<<< HEAD
        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // mentions_legales
        if ('/mentions-legales' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::mentions',  '_route' => 'mentions_legales',);
        }

        // map
        if ('/map' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MapController::MapAction',  '_route' => 'map',);
        }

        // association
        if ('/association' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::association',  '_route' => 'association',);
        }

        // validate_obs
        if (0 === strpos($pathinfo, '/validate') && preg_match('#^/validate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_obs')), array (  '_controller' => 'App\\Controller\\MapController::Validate',));
        }

        // research
        if ('/research' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ResearchController::index',  '_route' => 'research',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'user',);
            }

            // login
            if ('/user/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::login',  '_route' => 'login',);
            }

            // dashboard
            if ('/user/dashboard' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::dashboardAction',  '_route' => 'dashboard',);
            }

            // downgradeuser
            if ('/user/downgradeuser' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::downgradeUserAction',  '_route' => 'downgradeuser',);
            }

            // validateuser
            if ('/user/validateuser' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::validateUserAction',  '_route' => 'validateuser',);
            }

            // modifyuser
            if ('/user/modify' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::modifyUserAction',  '_route' => 'modifyuser',);
            }

        }

        // subscribe
        if ('/subscribe' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::subscribeAction',  '_route' => 'subscribe',);
        }

<<<<<<< HEAD
=======
>>>>>>> research
        elseif (0 === strpos($pathinfo, '/_')) {
=======
        if (0 === strpos($pathinfo, '/_')) {
>>>>>>> mapbranch
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
