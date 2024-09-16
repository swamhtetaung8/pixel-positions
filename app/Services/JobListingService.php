<?php

namespace App\Services;

use App\Repositories\JobListingRepositoryInterface;

class JobListingService
{
    public function __construct(
        protected JobListingRepositoryInterface $jobListingRepository
    ) {}

    public function all(): array
    {
        // Fetch jobs with feature flag turned off (featured = "0")
        $unfeaturedJobListings = $this->jobListingRepository->all(
            perPage: 25,
            filter: ['featured' => "0"],
            pageName: 'unfeatured_page'
        );

        // Fetch jobs with feature flag turned on (featured = "1")
        $featuredJobListings = $this->jobListingRepository->all(
            filter: ['featured' => "1"],
            pageName: 'featured_page'
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
