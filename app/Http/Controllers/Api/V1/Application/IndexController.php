<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Resources\ApplicationResource;
use App\Http\Controllers\Api\V1\BaseController;

class IndexController extends BaseController
{
    public function __invoke(Request $request): array
    {
        $status = $request->query('query'); // Получаем статус из запроса

        $applications = $status ? Application::byStatus($status)->get() : Application::all(); // Если статус задан, используем scopeByStatus для поиска

        return ApplicationResource::collection($applications)->resolve();

    }
}
