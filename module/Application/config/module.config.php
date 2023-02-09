<?php

declare(strict_types=1);

namespace Application;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'user' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/user',
                    'defaults' => [
                        'controller' => Controller\UsersController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'login' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'login',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\UsersController::class => InvokableFactory::class,
            Controller\AuthController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/auth' => __DIR__ . '/../view/layout/auth.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'application/users/index' => __DIR__ . '/../view/application/users/index.phtml',
            // 'application/login/index' => __DIR__ . '/../view/application/login/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'layout' => 'layout/layout',
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    // 'view_manager' => array(
    //     'template_map' => array(
    //         'layout/login'           => __DIR__ . '/../view/layout/login.phtml',
    //         'layout/core'           => __DIR__ . '/../view/layout/core.phtml',
    //         'error/404'               => __DIR__ . '/../view/error/404.phtml',
    //         'error/index'             => __DIR__ . '/../view/error/index.phtml',
    //     ),
    //     'layout' => 'layout/login',
    //     'template_path_stack' => array(
    //         __DIR__ . '/../view'
    //     ),
    // )
];
