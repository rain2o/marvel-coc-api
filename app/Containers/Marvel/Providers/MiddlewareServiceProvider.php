<?php

namespace App\Containers\Marvel\Providers;

use App\Ship\Parents\Providers\MiddlewareProvider;

/**
 * Class MiddlewareServiceProvider
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class MiddlewareServiceProvider extends MiddlewareProvider
{
    /**
     * Register Middleware's
     *
     * @var  array
     */
    protected $middlewares = [
        // ..
    ];

    /**
     * Register Container Middleware Groups
     *
     * @var  array
     */
    protected $middlewareGroups = [
        'web' => [

        ],
        'api' => [
            'cors' => \Barryvdh\Cors\HandleCors::class,
        ],
    ];

    protected $routeMiddleware = [
        // Laravel default route middleware's:
        'can'      => \Illuminate\Auth\Middleware\Authorize::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cors' => \Barryvdh\Cors\HandleCors::class,
    ];

}
