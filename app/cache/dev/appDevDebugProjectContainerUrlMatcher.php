<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/account')) {
            // diyoh_account_showprofile
            if ($pathinfo === '/account/profile') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::showProfileAction',  '_route' => 'diyoh_account_showprofile',);
            }

            // diyoh_account_editprofile
            if ($pathinfo === '/account/edit_profile') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::editProfileAction',  '_route' => 'diyoh_account_editprofile',);
            }

            // diyoh_account_changepassword
            if ($pathinfo === '/account/change_password') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::changePasswordAction',  '_route' => 'diyoh_account_changepassword',);
            }

            if (0 === strpos($pathinfo, '/account/message')) {
                if (0 === strpos($pathinfo, '/account/messages')) {
                    // diyoh_account_showmessagesmenu
                    if ($pathinfo === '/account/messages') {
                        return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::showMessagesMenuAction',  '_route' => 'diyoh_account_showmessagesmenu',);
                    }

                    // diyoh_account_getreceivedmessages
                    if ($pathinfo === '/account/messages/received') {
                        return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getReceivedMessagesAction',  '_route' => 'diyoh_account_getreceivedmessages',);
                    }

                    // diyoh_account_getsentmessages
                    if ($pathinfo === '/account/messages/sent') {
                        return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getSentMessagesAction',  '_route' => 'diyoh_account_getsentmessages',);
                    }

                }

                // diyoh_account_showmessage
                if (preg_match('#^/account/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_account_showmessage')), array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::showMessageAction',));
                }

            }

            // diyoh_account_getallusercomments
            if ($pathinfo === '/account/comments') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getAllUserCommentsAction',  '_route' => 'diyoh_account_getallusercomments',);
            }

            // diyoh_account_getalluserdiscussions
            if ($pathinfo === '/account/discussions') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getAllUserDiscussionsAction',  '_route' => 'diyoh_account_getalluserdiscussions',);
            }

            // diyoh_account_getalluservoices
            if ($pathinfo === '/account/voices') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getAllUserVoicesAction',  '_route' => 'diyoh_account_getalluservoices',);
            }

            if (0 === strpos($pathinfo, '/account/projects')) {
                // diyoh_account_getalluserprojects
                if ($pathinfo === '/account/projects') {
                    return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getAllUserProjectsAction',  '_route' => 'diyoh_account_getalluserprojects',);
                }

                // diyoh_account_addnewproject
                if ($pathinfo === '/account/projects/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_diyoh_account_addnewproject;
                    }

                    return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::addNewProject',  '_route' => 'diyoh_account_addnewproject',);
                }
                not_diyoh_account_addnewproject:

            }

            // diyoh_account_getalluserfavouriteprojects
            if ($pathinfo === '/account/favourite_projects') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\AccountController::getAllUserFavouriteProjectsAction',  '_route' => 'diyoh_account_getalluserfavouriteprojects',);
            }

        }

        // diyoh_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'diyoh_default_index');
            }

            return array (  '_controller' => 'DiyohBundle\\Controller\\DefaultController::indexAction',  '_route' => 'diyoh_default_index',);
        }

        // diyoh_default_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'DiyohBundle\\Controller\\DefaultController::signupAction',  '_route' => 'diyoh_default_signup',);
        }

        if (0 === strpos($pathinfo, '/categor')) {
            // diyoh_project_showmaincategories
            if ($pathinfo === '/categories') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showMainCategoriesAction',  '_route' => 'diyoh_project_showmaincategories',);
            }

            // diyoh_project_showcategorycontent
            if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showcategorycontent')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showCategoryContentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tool')) {
            // diyoh_project_showtools
            if ($pathinfo === '/tools') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showToolsAction',  '_route' => 'diyoh_project_showtools',);
            }

            // diyoh_project_showtool
            if (preg_match('#^/tool/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showtool')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showToolAction',));
            }

        }

        if (0 === strpos($pathinfo, '/material')) {
            // diyoh_project_showmaterials
            if ($pathinfo === '/materials') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showMaterialsAction',  '_route' => 'diyoh_project_showmaterials',);
            }

            // diyoh_project_showmaterial
            if (preg_match('#^/material/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showmaterial')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showMaterialAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // diyoh_project_showtags
            if ($pathinfo === '/tags') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showTagsAction',  '_route' => 'diyoh_project_showtags',);
            }

            // diyoh_project_showtaglinks
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showtaglinks')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showTagLinksAction',));
            }

        }

        if (0 === strpos($pathinfo, '/project')) {
            // diyoh_project_showprojects
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectsAction',  '_route' => 'diyoh_project_showprojects',);
            }

            // diyoh_project_showproject
            if (preg_match('#^/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showproject')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectAction',));
            }

        }

        // diyoh_project_favourite
        if (0 === strpos($pathinfo, '/favourite') && preg_match('#^/favourite/(?P<id>[^/]++)/(?P<addOrRm>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_favourite')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::favouriteAction',));
        }

        if (0 === strpos($pathinfo, '/project')) {
            // diyoh_project_showprojecttools
            if (preg_match('#^/project/(?P<id>[^/]++)/tools$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showprojecttools')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectToolsAction',));
            }

            // diyoh_project_showprojectmaterials
            if (preg_match('#^/project/(?P<id>[^/]++)/materials$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showprojectmaterials')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectMaterialsAction',));
            }

            // diyoh_project_showprojectcomments
            if (preg_match('#^/project/(?P<id>[^/]++)/comments$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showprojectcomments')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectCommentsAction',));
            }

            // diyoh_project_showprojectdiscussions
            if (preg_match('#^/project/(?P<id>[^/]++)/discussions$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showprojectdiscussions')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectDiscussionsAction',));
            }

            // diyoh_project_showdiscussion
            if (preg_match('#^/project/(?P<projId>[^/]++)/discussion/(?P<discId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showdiscussion')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showDiscussionAction',));
            }

        }

        // diyoh_project_showinfoaboutotheruser
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_diyoh_project_showinfoaboutotheruser;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'diyoh_project_showinfoaboutotheruser')), array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showInfoAboutOtherUserAction',));
        }
        not_diyoh_project_showinfoaboutotheruser:

        // diyoh_project_showprojectstree
        if ($pathinfo === '/development_tree') {
            return array (  '_controller' => 'DiyohBundle\\Controller\\ProjectController::showProjectsTree',  '_route' => 'diyoh_project_showprojectstree',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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
