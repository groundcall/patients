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

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/alex/users')) {
                if (0 === strpos($pathinfo, '/admin/alex/users/hospital')) {
                    // admin_alex_users_hospital_list
                    if ($pathinfo === '/admin/alex/users/hospital/list') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::listAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_list',  '_route' => 'admin_alex_users_hospital_list',);
                    }

                    // admin_alex_users_hospital_create
                    if ($pathinfo === '/admin/alex/users/hospital/create') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::createAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_create',  '_route' => 'admin_alex_users_hospital_create',);
                    }

                    // admin_alex_users_hospital_batch
                    if ($pathinfo === '/admin/alex/users/hospital/batch') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::batchAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_batch',  '_route' => 'admin_alex_users_hospital_batch',);
                    }

                    // admin_alex_users_hospital_edit
                    if (preg_match('#^/admin/alex/users/hospital/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_hospital_edit')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::editAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_edit',));
                    }

                    // admin_alex_users_hospital_delete
                    if (preg_match('#^/admin/alex/users/hospital/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_hospital_delete')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::deleteAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_delete',));
                    }

                    // admin_alex_users_hospital_show
                    if (preg_match('#^/admin/alex/users/hospital/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_hospital_show')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::showAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_show',));
                    }

                    // admin_alex_users_hospital_export
                    if ($pathinfo === '/admin/alex/users/hospital/export') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalAdminController::exportAction',  '_sonata_admin' => 'alex.patients.admin.hospital',  '_sonata_name' => 'admin_alex_users_hospital_export',  '_route' => 'admin_alex_users_hospital_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/alex/users/user')) {
                    // admin_alex_users_user_list
                    if ($pathinfo === '/admin/alex/users/user/list') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_list',  '_route' => 'admin_alex_users_user_list',);
                    }

                    // admin_alex_users_user_create
                    if ($pathinfo === '/admin/alex/users/user/create') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_create',  '_route' => 'admin_alex_users_user_create',);
                    }

                    // admin_alex_users_user_batch
                    if ($pathinfo === '/admin/alex/users/user/batch') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_batch',  '_route' => 'admin_alex_users_user_batch',);
                    }

                    // admin_alex_users_user_edit
                    if (preg_match('#^/admin/alex/users/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_user_edit')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_edit',));
                    }

                    // admin_alex_users_user_delete
                    if (preg_match('#^/admin/alex/users/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_user_delete')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_delete',));
                    }

                    // admin_alex_users_user_show
                    if (preg_match('#^/admin/alex/users/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_alex_users_user_show')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_show',));
                    }

                    // admin_alex_users_user_export
                    if ($pathinfo === '/admin/alex/users/user/export') {
                        return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'alex.patients.admin.user',  '_sonata_name' => 'admin_alex_users_user_export',  '_route' => 'admin_alex_users_user_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // alex_users_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'alex_users_homepage');
            }

            return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\DefaultController::loginAction',  '_route' => 'alex_users_homepage',);
        }

        // alex_users_admin
        if ($pathinfo === '/admin') {
            return array('_route' => 'alex_users_admin');
        }

        // alex_users_patients
        if ($pathinfo === '/patients') {
            return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\PatientController::indexAction',  '_route' => 'alex_users_patients',);
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
            if ($pathinfo === '/users/edit') {
                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\UserController::editAction',  '_route' => 'users_edit',);
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

        if (0 === strpos($pathinfo, '/hospital')) {
            // hospital
            if (rtrim($pathinfo, '/') === '/hospital') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hospital');
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::indexAction',  '_route' => 'hospital',);
            }

            // hospital_show
            if (preg_match('#^/hospital/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospital_show')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::showAction',));
            }

            // hospital_new
            if ($pathinfo === '/hospital/new') {
                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::newAction',  '_route' => 'hospital_new',);
            }

            // hospital_create
            if ($pathinfo === '/hospital/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_hospital_create;
                }

                return array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::createAction',  '_route' => 'hospital_create',);
            }
            not_hospital_create:

            // hospital_edit
            if (preg_match('#^/hospital/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospital_edit')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::editAction',));
            }

            // hospital_update
            if (preg_match('#^/hospital/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_hospital_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospital_update')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::updateAction',));
            }
            not_hospital_update:

            // hospital_delete
            if (preg_match('#^/hospital/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_hospital_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospital_delete')), array (  '_controller' => 'Alex\\UsersBundle\\Controller\\HospitalController::deleteAction',));
            }
            not_hospital_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
