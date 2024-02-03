<?php

namespace App\Http\Controllers\Api\V1\Application;

use App\Models\Application;
use App\DTO\ApplicationUpdateForm;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Application\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Application $application)
    {
        $data = ApplicationUpdateForm::fromRequest($request);

        $data->setStatus('Resolved');

        $result = $application->update($data->toArray());

        return $this->sendResponse('Заявка была успешно обновлена', $result);
    }
}
