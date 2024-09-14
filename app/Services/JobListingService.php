<?php

namespace App\Services;

use App\Repositories\JobListingRepositoryInterface;

class JobListingService
{
    public function __construct(
        protected JobListingRepositoryInterface $jobListingRepository
    ) {}

    public function all(int $unfeaturedPage = 1, int $featuredPage = 1): array
    {
        // Fetch jobs with feature flag turned off (featured = "0")
        $unfeaturedJobListings = $this->jobListingRepository->all(
            perPage: 25,
            page: $unfeaturedPage,
            filter: ['featured' => "0"]
        );

        // Fetch jobs with feature flag turned on (featured = "1")
        $featuredJobListings = $this->jobListingRepository->all(
            page: $featuredPage,
            filter: ['featured' => "1"]
        );

        return [
            'unfeaturedJobListings' => $unfeaturedJobListings,
            'featuredJobListings' => $featuredJobListings,
        ];
    }

    public function create(array $data)
    {
        return $this->jobListingRepository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->jobListingRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->jobListingRepository->delete($id);
    }

    public function find($id)
    {
        return $this->jobListingRepository->find($id);
    }
}
