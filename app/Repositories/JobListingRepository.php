<?php

namespace App\Repositories;

use App\Models\JobListing;
use App\Repositories\JobListingRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class JobListingRepository implements JobListingRepositoryInterface
{
    /**
     * Summary of all the jobs with their corresponding job owners
     * @return array
     */
    public function all(array $filter = [], int $perPage = 9, string $pageName = 'page'): LengthAwarePaginator
    {
        return JobListing::with('jobOwner')
            ->when(!empty($filter), function ($query) use ($filter) {
                foreach ($filter as $key => $value) {
                    $query->where($key, $value);
                }
            })
            ->paginate($perPage, pageName: $pageName);
    }

    public function create(array $data) {}

    public function update(array $data, $id) {}

    public function delete($id) {}

    public function find($id) {}
}