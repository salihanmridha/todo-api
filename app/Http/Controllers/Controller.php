<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="TODO API OpenApi Documentation",
 *      description="TODO API application swagger/openapi documentation",
 *      @OA\Contact(
 *          email="salihanmridha@gmail.com"
 *      ),
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST_COMMON,
 *      description="TODO API Server For Common"
 * )
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST_COMMON_IP,
 *      description="TODO API Server For Common IP"
 * )
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="TODO API Server"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="sanctum",
 *     type="http",
 *     scheme="bearer",
 * )
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
