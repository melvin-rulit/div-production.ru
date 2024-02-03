<?php

namespace App\Services;

use App\Repositories\ApplicationRepository;
use App\Services\Interfaces\ApplicationServiceInterface;

class ApplicationService implements ApplicationServiceInterface
{
    protected $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    public function getApplicationData($status)
    {
        return $status ? $this->applicationRepository->getByStatus($status) : $this->applicationRepository->all();
    }
}
