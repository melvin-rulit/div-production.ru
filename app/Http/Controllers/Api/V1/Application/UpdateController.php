<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Application\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Application $application)
    {
        $validateApplication = $request->validated();

        $validateApplication['status'] = 'Resolved';
        $application->update($validateApplication);

        return $this->sendResponse('Заявка была успешно обновлена', $validateApplication);
    }
}
