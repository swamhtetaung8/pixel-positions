<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface JobListingRepositoryInterface
{
    public function all(int $page = 1, array $filter = [], int $perPage = 15): LengthAwarePaginator;

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);
}
