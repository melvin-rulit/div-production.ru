<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use Illuminate\Http\JsonResponse;
use App\DTO\ApplicationCreateForm;
use App\Http\Resources\ApplicationResource;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Application\CreateRequest;

{
    class CreateController extends BaseController
    {

        public function __invoke(CreateRequest $request): JsonResponse
        {
            $data = ApplicationCreateForm::fromRequest($request)->toArray();

            $result = Application::create($data);

            return $this->sendResponse('Заявка была успешно создана', ApplicationResource::make($result));
        }
    }
}

