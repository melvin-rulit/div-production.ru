<?php

namespace App\Repositories;

use App\Models\Application;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;

class ApplicationRepository implements ApplicationRepositoryInterface
{

    public function all()
    {
        return Application::all();
    }

    public function getByStatus($status)
    {
        return Application::where('status', 'like',  '%' .$status. '%')->get();
    }

}
