<?php


namespace App\Repositories\Interfaces;


interface ApplicationRepositoryInterface
{
    public function all();

    public function getByStatus($status);
}
