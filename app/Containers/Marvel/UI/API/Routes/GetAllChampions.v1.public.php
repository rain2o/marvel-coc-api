<?php

/**
 * @apiGroup           Marvel
 * @apiName            GetAllChampions
 *
 * @api                {GET} /v1/champions Get All Champions
 * @apiDescription     Gets all available Champions
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "name": "Unstoppable Colossus",
    "class": "Mystic",
}
 */

$router->get('champions', [
    'uses'  => 'Controller@GetAllChampions',
    'middleware' => [
        'auth:api',
        'cors'
    ],
]);
