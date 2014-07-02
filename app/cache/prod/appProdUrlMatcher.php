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

        // alex_users_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'alex_users_homepage');
            }

            return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::indexAction',  '_route' => 'alex_users_homepage',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users');
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::indexAction',  '_route' => 'users',);
            }

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::showAction',));
            }

            // users_new
            if ($pathinfo === '/users/new') {
                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::newAction',  '_route' => 'users_new',);
            }

            // users_create
            if ($pathinfo === '/users/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_users_create;
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::createAction',  '_route' => 'users_create',);
            }
            not_users_create:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::editAction',));
            }

            // users_update
            if (preg_match('#^/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_users_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::updateAction',));
            }
            not_users_update:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::deleteAction',));
            }
            not_users_delete:

        }

        if (0 === strpos($pathinfo, '/patients')) {
            // patients
            if (rtrim($pathinfo, '/') === '/patients') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patients');
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::indexAction',  '_route' => 'patients',);
            }

            // patients_show
            if (preg_match('#^/patients/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patients_show')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::showAction',));
            }

            // patients_new
            if ($pathinfo === '/patients/new') {
                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::newAction',  '_route' => 'patients_new',);
            }

            // patients_create
            if ($pathinfo === '/patients/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patients_create;
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::createAction',  '_route' => 'patients_create',);
            }
            not_patients_create:

            // patients_edit
            if (preg_match('#^/patients/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patients_edit')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::editAction',));
            }

            // patients_update
            if (preg_match('#^/patients/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_patients_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patients_update')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::updateAction',));
            }
            not_patients_update:

            // patients_delete
            if (preg_match('#^/patients/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_patients_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patients_delete')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::deleteAction',));
            }
            not_patients_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
