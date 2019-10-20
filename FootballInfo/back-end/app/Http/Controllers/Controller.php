<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @SWG\Swagger(
     *     @SWG\Info(
     *         version="1.0.0",
     *         title="Document test API Abelon",
     *         description="",
     *         termsOfService="",
     *         @SWG\Contact(
     *             email=""
     *         ),
     *         @SWG\License(
     *             name="Saver",
     *             url="https://www.saver.jp/"
     *         )
     *     )
     * )
    */
    protected function doResponse($success = false, $data = null, $error = null)
    {
        return response()->json([
                'success' => $success,
                'data' => $data,
                'error' => $error
        ]);
    }
}
