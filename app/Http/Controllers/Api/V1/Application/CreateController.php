<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Application\CreateRequest;

{
    class CreateController extends BaseController
    {
        public function __invoke(CreateRequest $request)
        {
            $validateApplication = $request->validated();

            $result = Application::create($validateApplication);

            return $this->sendResponse('Заявка была успешно создана', ApplicationResource::make($result));
        }
    }
}

