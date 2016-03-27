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

        if (0 === strpos($pathinfo, '/css/26e5d80')) {
            // _assetic_26e5d80
            if ($pathinfo === '/css/26e5d80.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '26e5d80',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_26e5d80',);
            }

            if (0 === strpos($pathinfo, '/css/26e5d80_')) {
                // _assetic_26e5d80_0
                if ($pathinfo === '/css/26e5d80_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26e5d80',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_26e5d80_0',);
                }

                if (0 === strpos($pathinfo, '/css/26e5d80_s')) {
                    // _assetic_26e5d80_1
                    if ($pathinfo === '/css/26e5d80_style_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26e5d80',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_26e5d80_1',);
                    }

                    // _assetic_26e5d80_2
                    if ($pathinfo === '/css/26e5d80_sweetalert_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26e5d80',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_26e5d80_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/8bc0093')) {
            // _assetic_8bc0093
            if ($pathinfo === '/js/8bc0093.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8bc0093',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8bc0093',);
            }

            if (0 === strpos($pathinfo, '/js/8bc0093_')) {
                // _assetic_8bc0093_0
                if ($pathinfo === '/js/8bc0093_jquery-2.1.4.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8bc0093',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8bc0093_0',);
                }

                // _assetic_8bc0093_1
                if ($pathinfo === '/js/8bc0093_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8bc0093',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8bc0093_1',);
                }

                // _assetic_8bc0093_2
                if ($pathinfo === '/js/8bc0093_sweetalert.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8bc0093',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8bc0093_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/7b09e58')) {
            // _assetic_7b09e58
            if ($pathinfo === '/images/7b09e58.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7b09e58',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_7b09e58',);
            }

            // _assetic_7b09e58_0
            if ($pathinfo === '/images/7b09e58_logo1_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7b09e58',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_7b09e58_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/04f3847')) {
            // _assetic_04f3847
            if ($pathinfo === '/css/04f3847.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_04f3847',);
            }

            if (0 === strpos($pathinfo, '/css/04f3847_')) {
                if (0 === strpos($pathinfo, '/css/04f3847_bootstrap')) {
                    // _assetic_04f3847_0
                    if ($pathinfo === '/css/04f3847_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_04f3847_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/04f3847_bootstrap-')) {
                        // _assetic_04f3847_1
                        if ($pathinfo === '/css/04f3847_bootstrap-datepicker.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_04f3847_1',);
                        }

                        // _assetic_04f3847_2
                        if ($pathinfo === '/css/04f3847_bootstrap-toggle.min_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_04f3847_2',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/css/04f3847_s')) {
                    // _assetic_04f3847_3
                    if ($pathinfo === '/css/04f3847_style_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_04f3847_3',);
                    }

                    // _assetic_04f3847_4
                    if ($pathinfo === '/css/04f3847_sweetalert_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '04f3847',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_04f3847_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/9ca1f63')) {
            // _assetic_9ca1f63
            if ($pathinfo === '/js/9ca1f63.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9ca1f63',);
            }

            if (0 === strpos($pathinfo, '/js/9ca1f63_')) {
                // _assetic_9ca1f63_0
                if ($pathinfo === '/js/9ca1f63_jquery-2.1.4.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_0',);
                }

                if (0 === strpos($pathinfo, '/js/9ca1f63_bootstrap')) {
                    // _assetic_9ca1f63_1
                    if ($pathinfo === '/js/9ca1f63_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/9ca1f63_bootstrap-')) {
                        if (0 === strpos($pathinfo, '/js/9ca1f63_bootstrap-datepicker.')) {
                            // _assetic_9ca1f63_2
                            if ($pathinfo === '/js/9ca1f63_bootstrap-datepicker.min_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_2',);
                            }

                            // _assetic_9ca1f63_3
                            if ($pathinfo === '/js/9ca1f63_bootstrap-datepicker.pl.min_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_3',);
                            }

                        }

                        // _assetic_9ca1f63_4
                        if ($pathinfo === '/js/9ca1f63_bootstrap-toggle.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_4',);
                        }

                    }

                }

                // _assetic_9ca1f63_5
                if ($pathinfo === '/js/9ca1f63_sweetalert.min_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_5',);
                }

                // _assetic_9ca1f63_6
                if ($pathinfo === '/js/9ca1f63_jquery.formatter.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_6',);
                }

                // _assetic_9ca1f63_7
                if ($pathinfo === '/js/9ca1f63_inputmask.min_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_7',);
                }

                // _assetic_9ca1f63_8
                if ($pathinfo === '/js/9ca1f63_jquery.inputmask.min_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_8',);
                }

                // _assetic_9ca1f63_9
                if ($pathinfo === '/js/9ca1f63_inputmask.numeric.extensions.min_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_9',);
                }

                // _assetic_9ca1f63_10
                if ($pathinfo === '/js/9ca1f63_moment-with-locales.min_11.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ca1f63',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_9ca1f63_10',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/948bb15')) {
            // _assetic_948bb15
            if ($pathinfo === '/images/948bb15.ico') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '948bb15',  'pos' => NULL,  '_format' => 'ico',  '_route' => '_assetic_948bb15',);
            }

            // _assetic_948bb15_0
            if ($pathinfo === '/images/948bb15_favicon_1.ico') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '948bb15',  'pos' => 0,  '_format' => 'ico',  '_route' => '_assetic_948bb15_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/a395062')) {
            // _assetic_a395062
            if ($pathinfo === '/css/a395062.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a395062',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a395062',);
            }

            if (0 === strpos($pathinfo, '/css/a395062_')) {
                // _assetic_a395062_0
                if ($pathinfo === '/css/a395062_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a395062',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a395062_0',);
                }

                // _assetic_a395062_1
                if ($pathinfo === '/css/a395062_style_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a395062',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a395062_1',);
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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/v1')) {
                if (0 === strpos($pathinfo, '/api/v1/admin/management')) {
                    // api_remove_device_type_templateremove_custom_field_template
                    if (0 === strpos($pathinfo, '/api/v1/admin/management/custom-field-templates') && preg_match('#^/api/v1/admin/management/custom\\-field\\-templates/(?P<customFieldTemplate>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_remove_device_type_templateremove_custom_field_template;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_remove_device_type_templateremove_custom_field_template')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::removeDeviceTypeTemplateAction',  '_format' => 'json',));
                    }
                    not_api_remove_device_type_templateremove_custom_field_template:

                    if (0 === strpos($pathinfo, '/api/v1/admin/management/device-type')) {
                        // api_remove_device_typeremove_device_type
                        if (preg_match('#^/api/v1/admin/management/device\\-type/(?P<deviceType>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_api_remove_device_typeremove_device_type;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_remove_device_typeremove_device_type')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::removeDeviceTypeAction',  '_format' => 'json',));
                        }
                        not_api_remove_device_typeremove_device_type:

                        // api_create_device_type_custom_field_templatecreate_device_type_custom_field
                        if (preg_match('#^/api/v1/admin/management/device\\-type/(?P<deviceType>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_api_create_device_type_custom_field_templatecreate_device_type_custom_field;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_create_device_type_custom_field_templatecreate_device_type_custom_field')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::createDeviceTypeCustomFieldTemplateAction',  '_format' => 'json',));
                        }
                        not_api_create_device_type_custom_field_templatecreate_device_type_custom_field:

                    }

                }

                // api_create_devicecreate_device
                if (0 === strpos($pathinfo, '/api/v1/users') && preg_match('#^/api/v1/users/(?P<client>[^/]++)/devices(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_create_devicecreate_device;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_create_devicecreate_device')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::createDeviceAction',  '_format' => 'json',));
                }
                not_api_create_devicecreate_device:

                // api_get_device_type_fieldsget_device_type_fields
                if (0 === strpos($pathinfo, '/api/v1/device-type') && preg_match('#^/api/v1/device\\-type/(?P<deviceType>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_device_type_fieldsget_device_type_fields;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_device_type_fieldsget_device_type_fields')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::getDeviceTypeFieldsAction',  '_format' => 'json',));
                }
                not_api_get_device_type_fieldsget_device_type_fields:

                // api_add_device_typeadd_device_type
                if (0 === strpos($pathinfo, '/api/v1/admin/management/device-type') && preg_match('#^/api/v1/admin/management/device\\-type(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_add_device_typeadd_device_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_add_device_typeadd_device_type')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::addDeviceTypeAction',  '_format' => 'json',));
                }
                not_api_add_device_typeadd_device_type:

                if (0 === strpos($pathinfo, '/api/v1/repairs')) {
                    // api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request
                    if (preg_match('#^/api/v1/repairs/(?P<id>\\d+)/total\\-pricing(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::addWorkerTotalRepairPricingRequestAction',  '_format' => 'json',));
                    }
                    not_api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request:

                    if (0 === strpos($pathinfo, '/api/v1/repairs/total-pricing')) {
                        // api_set_total_repair_pricing_responsetotal_repair_pricing_response
                        if (preg_match('#^/api/v1/repairs/total\\-pricing/(?P<pricing>[^/]++)/method/(?P<responseMethod>[^/]++)/status/(?P<pricingStatus>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_api_set_total_repair_pricing_responsetotal_repair_pricing_response;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_total_repair_pricing_responsetotal_repair_pricing_response')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setTotalRepairPricingResponseAction',  '_format' => 'json',));
                        }
                        not_api_set_total_repair_pricing_responsetotal_repair_pricing_response:

                        // api_accept_total_repair_pricing_using_emailtotal_repair_pricing_acceptation_using_email
                        if (preg_match('#^/api/v1/repairs/total\\-pricing/(?P<pricing>[^/]++)/email\\-acceptation\\-method/(?P<responseMethod>[^/]++)/(?P<hash>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_api_accept_total_repair_pricing_using_emailtotal_repair_pricing_acceptation_using_email;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_accept_total_repair_pricing_using_emailtotal_repair_pricing_acceptation_using_email')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::acceptTotalRepairPricingUsingEmailAction',  '_format' => 'json',));
                        }
                        not_api_accept_total_repair_pricing_using_emailtotal_repair_pricing_acceptation_using_email:

                    }

                }

                // api_set_notification_readread_notification
                if (0 === strpos($pathinfo, '/api/v1/notifications') && preg_match('#^/api/v1/notifications/(?P<id>\\d+)/read(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_set_notification_readread_notification;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_notification_readread_notification')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setNotificationReadAction',  '_format' => 'json',));
                }
                not_api_set_notification_readread_notification:

                if (0 === strpos($pathinfo, '/api/v1/repair')) {
                    // api_set_repair_cost_approvedrepair_approved
                    if (0 === strpos($pathinfo, '/api/v1/repair/approved') && preg_match('#^/api/v1/repair/approved/(?P<id>\\d+)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_set_repair_cost_approvedrepair_approved;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_repair_cost_approvedrepair_approved')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setRepairCostApprovedAction',  '_format' => 'json',));
                    }
                    not_api_set_repair_cost_approvedrepair_approved:

                    // api_set_repair_cost_not_approvedrepair_not_approved
                    if (0 === strpos($pathinfo, '/api/v1/repair/not-approved') && preg_match('#^/api/v1/repair/not\\-approved/(?P<id>\\d+)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_set_repair_cost_not_approvedrepair_not_approved;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_repair_cost_not_approvedrepair_not_approved')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setRepairCostNotApprovedAction',  '_format' => 'json',));
                    }
                    not_api_set_repair_cost_not_approvedrepair_not_approved:

                }

                // api_create_payment_methodcreate_payment_method
                if (0 === strpos($pathinfo, '/api/v1/payment-method') && preg_match('#^/api/v1/payment\\-method(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_create_payment_methodcreate_payment_method;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_create_payment_methodcreate_payment_method')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::createPaymentMethodAction',  '_format' => 'json',));
                }
                not_api_create_payment_methodcreate_payment_method:

                if (0 === strpos($pathinfo, '/api/v1/repair-cost-kind')) {
                    // api_create_repair_cost_kindcreate_repair_cost_kind
                    if (preg_match('#^/api/v1/repair\\-cost\\-kind(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_create_repair_cost_kindcreate_repair_cost_kind;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_create_repair_cost_kindcreate_repair_cost_kind')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::createRepairCostKindAction',  '_format' => 'json',));
                    }
                    not_api_create_repair_cost_kindcreate_repair_cost_kind:

                    // api_remove_repair_cost_kindremove_repair_cost_kind
                    if (preg_match('#^/api/v1/repair\\-cost\\-kind/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_remove_repair_cost_kindremove_repair_cost_kind;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_remove_repair_cost_kindremove_repair_cost_kind')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::removeRepairCostKindAction',  '_format' => 'json',));
                    }
                    not_api_remove_repair_cost_kindremove_repair_cost_kind:

                }

                // api_remove_payment_methodremove_payment_method
                if (0 === strpos($pathinfo, '/api/v1/payment-method') && preg_match('#^/api/v1/payment\\-method/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_remove_payment_methodremove_payment_method;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_remove_payment_methodremove_payment_method')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::removePaymentMethodAction',  '_format' => 'json',));
                }
                not_api_remove_payment_methodremove_payment_method:

                // api_set_repair_statusset_repair_status
                if (0 === strpos($pathinfo, '/api/v1/repair') && preg_match('#^/api/v1/repair/(?P<repair>[^/]++)/status/(?P<status>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_set_repair_statusset_repair_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_repair_statusset_repair_status')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setRepairStatusAction',  '_format' => 'json',));
                }
                not_api_set_repair_statusset_repair_status:

                if (0 === strpos($pathinfo, '/api/v1/localizations')) {
                    // api_update_repair_start_localizationedit_repair_start_localization
                    if (preg_match('#^/api/v1/localizations/(?P<localization>[^/]++)/repair/(?P<repair>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_update_repair_start_localizationedit_repair_start_localization;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_update_repair_start_localizationedit_repair_start_localization')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::updateRepairStartLocalizationAction',  '_format' => 'json',));
                    }
                    not_api_update_repair_start_localizationedit_repair_start_localization:

                    // api_update_repair_cost_localizationedit_repair_cost_localization
                    if (preg_match('#^/api/v1/localizations/(?P<localization>[^/]++)/repair\\-cost/(?P<repairCost>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_update_repair_cost_localizationedit_repair_cost_localization;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_update_repair_cost_localizationedit_repair_cost_localization')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::updateRepairCostLocalizationAction',  '_format' => 'json',));
                    }
                    not_api_update_repair_cost_localizationedit_repair_cost_localization:

                }

                if (0 === strpos($pathinfo, '/api/v1/repair')) {
                    // api_change_repairerchange-repairer
                    if (preg_match('#^/api/v1/repair/(?P<repair>[^/]++)/new\\-repairer/(?P<newRepairer>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_change_repairerchangerepairer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_change_repairerchange-repairer')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::changeRepairerAction',  '_format' => 'json',));
                    }
                    not_api_change_repairerchangerepairer:

                    // api_edit_repair_payment_methodedit_repair_payment_method
                    if (preg_match('#^/api/v1/repair/(?P<id>[^/]++)/payment\\-method(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_edit_repair_payment_methodedit_repair_payment_method;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_edit_repair_payment_methodedit_repair_payment_method')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::editRepairPaymentMethodAction',  '_format' => 'json',));
                    }
                    not_api_edit_repair_payment_methodedit_repair_payment_method:

                }

                if (0 === strpos($pathinfo, '/api/v1/worker-order')) {
                    // api_get_worker_order_historyget_worker_order
                    if (0 === strpos($pathinfo, '/api/v1/worker-order/history') && preg_match('#^/api/v1/worker\\-order/history/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_api_get_worker_order_historyget_worker_order;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_worker_order_historyget_worker_order')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::getWorkerOrderHistoryAction',  '_format' => 'json',));
                    }
                    not_api_get_worker_order_historyget_worker_order:

                    // api_set_worker_order_statusset_worker_order_status
                    if (preg_match('#^/api/v1/worker\\-order/(?P<workerOrder>[^/]++)/status/(?P<workerOrderStatus>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_set_worker_order_statusset_worker_order_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_set_worker_order_statusset_worker_order_status')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::setWorkerOrderStatusAction',  '_format' => 'json',));
                    }
                    not_api_set_worker_order_statusset_worker_order_status:

                    // api_update_worker_order_contentupdate_worker_order_content
                    if (preg_match('#^/api/v1/worker\\-order/(?P<workerOrder>[^/]++)/content(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_update_worker_order_contentupdate_worker_order_content;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_update_worker_order_contentupdate_worker_order_content')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::updateWorkerOrderContentAction',  '_format' => 'json',));
                    }
                    not_api_update_worker_order_contentupdate_worker_order_content:

                    // api_remove_worker_orderremove_worker_order
                    if (preg_match('#^/api/v1/worker\\-order/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_remove_worker_orderremove_worker_order;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_remove_worker_orderremove_worker_order')), array (  '_controller' => 'ApiBundle\\Controller\\RestApiController::removeWorkerOrderAction',  '_format' => 'json',));
                    }
                    not_api_remove_worker_orderremove_worker_order:

                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/management')) {
                    // admin_management
                    if ($pathinfo === '/admin/management') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminManagementAction',  '_route' => 'admin_management',);
                    }

                    // admin_management_localization_add
                    if ($pathinfo === '/admin/management/localizations/add') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addLocalizationAction',  '_route' => 'admin_management_localization_add',);
                    }

                    // admin_management_device_type_add
                    if ($pathinfo === '/admin/management/device-types/add') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addDeviceTypeAction',  '_route' => 'admin_management_device_type_add',);
                    }

                    // admin_management_localization_edit
                    if (0 === strpos($pathinfo, '/admin/management/localizations') && preg_match('#^/admin/management/localizations/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_management_localization_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editLocalizationAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/management/regulatory/paragraph')) {
                        // admin_management_regulatory_paragraph_edit
                        if (0 === strpos($pathinfo, '/admin/management/regulatory/paragraphs') && preg_match('#^/admin/management/regulatory/paragraphs/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_management_regulatory_paragraph_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editParagraphAction',));
                        }

                        // admin_management_regulatory_paragraph_add
                        if ($pathinfo === '/admin/management/regulatory/paragraph/add') {
                            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addParagraphAction',  '_route' => 'admin_management_regulatory_paragraph_add',);
                        }

                    }

                    // admin_management_add_repairer
                    if (0 === strpos($pathinfo, '/admin/management/localization') && preg_match('#^/admin/management/localization/(?P<id>\\d+)/add\\-repairer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_management_add_repairer')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::addRepairerAction',));
                    }

                    // admin_management_edit_repairer
                    if (0 === strpos($pathinfo, '/admin/management/repairer') && preg_match('#^/admin/management/repairer/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_management_edit_repairer')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editRepairerAction',));
                    }

                }

                // admin_report
                if ($pathinfo === '/admin/report') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::reportAction',  '_route' => 'admin_report',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // pokwitowanie_user_panel
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::repairsAction',  '_route' => 'pokwitowanie_user_panel',);
            }

            // pokwitowanie_user_panel_details
            if (0 === strpos($pathinfo, '/user/repairs') && preg_match('#^/user/repairs/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pokwitowanie_user_panel_details')), array (  '_controller' => 'AppBundle\\Controller\\UserController::repairDetailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pricing-a')) {
            // pricing_accepted_email
            if ($pathinfo === '/pricing-accepted') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::pricingAcceptedUsingEmailAction',  '_route' => 'pricing_accepted_email',);
            }

            // pricing_already_accepted
            if ($pathinfo === '/pricing-already-accepted') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::pricingAlreadyAcceptedAction',  '_route' => 'pricing_already_accepted',);
            }

        }

        if (0 === strpos($pathinfo, '/worker')) {
            if (0 === strpos($pathinfo, '/worker/repairs')) {
                // worker_panel_repairs
                if ($pathinfo === '/worker/repairs') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::repairsAction',  '_route' => 'worker_panel_repairs',);
                }

                // worker_panel_repair_details
                if (preg_match('#^/worker/repairs/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_repair_details')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::repairDetailsAction',));
                }

                // worker_panel_repair_pricing_edit
                if (0 === strpos($pathinfo, '/worker/repairs/pricing-edit') && preg_match('#^/worker/repairs/pricing\\-edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_repair_pricing_edit')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::editRepairCostAction',));
                }

            }

            if (0 === strpos($pathinfo, '/worker/pokwitowanie')) {
                // worker_panel_pokwitowanie_user_add
                if ($pathinfo === '/worker/pokwitowanie/add-user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::addUserAction',  '_route' => 'worker_panel_pokwitowanie_user_add',);
                }

                // worker_panel_pokwitowanie_add_device
                if (0 === strpos($pathinfo, '/worker/pokwitowanie/users') && preg_match('#^/worker/pokwitowanie/users/(?P<id>\\d+)/devices$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_pokwitowanie_add_device')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::addDeviceAction',));
                }

                // worker_panel_pokwitowanie_add_repair
                if (0 === strpos($pathinfo, '/worker/pokwitowanie/devices') && preg_match('#^/worker/pokwitowanie/devices/(?P<device>[^/]++)/repair$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_pokwitowanie_add_repair')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::addRepairAction',));
                }

                // worker_panel_pokwitowanie_print
                if (preg_match('#^/worker/pokwitowanie/(?P<id>\\d+)/print$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_pokwitowanie_print')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::pokwitowanieAction',));
                }

                // worker_panel_pokwitowanie-example_print
                if (0 === strpos($pathinfo, '/worker/pokwitowanie-example') && preg_match('#^/worker/pokwitowanie\\-example/(?P<id>\\d+)/print$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_pokwitowanie-example_print')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::pokwitowanieExampleAction',));
                }

            }

            // worker_panel_opinions
            if ($pathinfo === '/worker/opinions') {
                return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::opinionsAction',  '_route' => 'worker_panel_opinions',);
            }

            if (0 === strpos($pathinfo, '/worker/user')) {
                // worker_panel_users
                if ($pathinfo === '/worker/users') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::usersAction',  '_route' => 'worker_panel_users',);
                }

                // worker_panel_user_details
                if (preg_match('#^/worker/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_user_details')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::userDetailsAction',));
                }

            }

            // worker_orders
            if ($pathinfo === '/worker/orders') {
                return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::workerOrdersAction',  '_route' => 'worker_orders',);
            }

            if (0 === strpos($pathinfo, '/worker/devices')) {
                // worker_panel_devices
                if ($pathinfo === '/worker/devices') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WorkerController::devicesAction',  '_route' => 'worker_panel_devices',);
                }

                // worker_panel_device_details
                if (preg_match('#^/worker/devices/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'worker_panel_device_details')), array (  '_controller' => 'AppBundle\\Controller\\WorkerController::deviceDetailsAction',));
                }

            }

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fos_user_profile_edit
        if ($pathinfo === '/profile/edit') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_profile_edit;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
        }
        not_fos_user_profile_edit:

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

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/login',  'permanent' => true,  '_route' => 'root',);
        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // fos_user_profile_show
        if ($pathinfo === '/user') {
            return array('_route' => 'fos_user_profile_show');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
