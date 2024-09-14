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
    public function all(int $page = 1, array $filter = [], int $perPage = 15): LengthAwarePaginator
    {
        return JobListing::with('jobOwner')
            ->when(!empty($filter), function ($query) use ($filter) {
                foreach ($filter as $key => $value) {
                    $query->where($key, $value);
                }
            })
            ->paginate($perPage, ['*'], 'page', $page);
    }

    public function create(array $data) {}

    public function update(array $data, $id) {}

    public function delete($id) {}

    public function find($id) {}
}
