<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Zakat Fintech API Documentation",
 *      description="A description of Zakat Fintech API",
 *      @OA\Contact(
 *          email="firdausishaddin@gmail.com"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description=L5_SWAGGER_CONST_ENV
 * )
 *
 *
 * @OA\Tag(
 *     name="Services",
 *     description="API Endpoints of Services"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
