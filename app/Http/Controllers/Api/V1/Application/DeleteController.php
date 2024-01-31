<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Api\V1\BaseController;

class DeleteController extends BaseController
{
    public function __invoke(Application $application): JsonResponse
    {
        $application->delete();

        return $this->sendResponse('Заявка была успешно удалена');
    }
}
