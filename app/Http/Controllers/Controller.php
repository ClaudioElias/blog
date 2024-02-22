<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

<<<<<<< HEAD

/**
 * @OA\Info(title="My API", version="0.1")
 * @OA\Schemes(format="http")
 * @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="Authorization",
 *      type="http",
 *      scheme="Bearer",
 *      bearerFormat="JWT",
 * ),
 * @OA\Tag(
 *     name="Auth",
 *     description="Auth endpoints",
 * )
 * @OA\Tag(
 *     name="Articles",
 *     description="Articles endpoints",
 * )
 */
=======
>>>>>>> 590ddf35bbda3ade42f4bd51bf7322d09291a5f5
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
