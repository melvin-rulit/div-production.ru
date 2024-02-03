<?php

namespace App\Http\Controllers\Api\V1\Application;


use Illuminate\Http\Request;
use App\Services\ApplicationService;
use App\Http\Resources\ApplicationResource;
use App\Http\Controllers\Api\V1\BaseController;

class IndexController extends BaseController
{
    protected $applicationService;

    public function __construct(ApplicationService $applicationService)
    {
        $this->applicationService = $applicationService;
    }

    public function __invoke(Request $request): array
    {
        $status = $request->query('query'); // Получаем статус из запроса

        $applications = $this->applicationService->getApplicationData($status); // Если нет в запросе статуса, то возвращаем всю коллекцию

        return ApplicationResource::collection($applications)->resolve();

    }

}
