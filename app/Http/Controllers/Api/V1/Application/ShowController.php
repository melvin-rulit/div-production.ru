<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ApplicationResource;
use App\Http\Controllers\Api\V1\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Application $application): array
    {
        return ApplicationResource::make($application)->resolve();
    }
}
