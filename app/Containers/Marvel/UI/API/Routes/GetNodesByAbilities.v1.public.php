<?php

/**
 * @apiGroup           Marvel
 * @apiName            GetNodesByAbilities
 *
 * @api                {POST} /v1/nodes Get Nodes By Abilities
 * @apiDescription     Get all nodes related to abilities
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->post('nodes', [
    'uses'  => 'Controller@GetNodesByAbilities',
    'middleware' => [
        'auth:api',
        'cors'
    ],
]);
