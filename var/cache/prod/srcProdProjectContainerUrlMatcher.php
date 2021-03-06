<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            // article_single
            if (0 === strpos($pathinfo, '/blog/single') && preg_match('#^/blog/single/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_single')), array (  '_controller' => 'App\\Controller\\BlogController::single',));
            }

            // new_article
            if ('/blog/new_article' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\BlogController::newArticleAction',  '_route' => 'new_article',);
            }

            // delete_article
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_article')), array (  '_controller' => 'App\\Controller\\BlogController::deleteArticleAction',));
            }

            // modify_article
            if (0 === strpos($pathinfo, '/blog/modify') && preg_match('#^/blog/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_article')), array (  '_controller' => 'App\\Controller\\BlogController::modifyArticleAction',));
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

        // association
        if ('/association' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::association',  '_route' => 'association',);
        }

        // research
        if ('/research' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ResearchController::index',  '_route' => 'research',);
        }

        // subscribe
        if ('/subscribe' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::subscribeAction',  '_route' => 'subscribe',);
        }

        if (0 === strpos($pathinfo, '/user')) {
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

            // user
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'user',);
            }

            // user/subscribe
            if ('/user/subscribe' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::subscribe',  '_route' => 'user/subscribe',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
