<?php

namespace ContainerYgmuvdd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BNkxjS_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bNkxjS.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bNkxjS.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CrudController::index' => ['privates', '.service_locator.rwbmSmX', 'get_ServiceLocator_RwbmSmXService', true],
            'App\\Controller\\CrudController::update_user_info' => ['privates', '.service_locator.rwbmSmX', 'get_ServiceLocator_RwbmSmXService', true],
            'App\\Controller\\DashboardController::add_user_page' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\ProductController::set_product_rating' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ReviewController::index' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CrudController:index' => ['privates', '.service_locator.rwbmSmX', 'get_ServiceLocator_RwbmSmXService', true],
            'App\\Controller\\CrudController:update_user_info' => ['privates', '.service_locator.rwbmSmX', 'get_ServiceLocator_RwbmSmXService', true],
            'App\\Controller\\DashboardController:add_user_page' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\ProductController:set_product_rating' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ReviewController:index' => ['privates', '.service_locator.wegHTYM', 'get_ServiceLocator_WegHTYMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CrudController::index' => '?',
            'App\\Controller\\CrudController::update_user_info' => '?',
            'App\\Controller\\DashboardController::add_user_page' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::set_product_rating' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\ReviewController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CrudController:index' => '?',
            'App\\Controller\\CrudController:update_user_info' => '?',
            'App\\Controller\\DashboardController:add_user_page' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:set_product_rating' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\ReviewController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
