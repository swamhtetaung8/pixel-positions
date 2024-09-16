<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface JobListingRepositoryInterface
{
    public function all(array $filter = [], int $perPage = 15, string $pageName = page): LengthAwarePaginator;

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);
}
