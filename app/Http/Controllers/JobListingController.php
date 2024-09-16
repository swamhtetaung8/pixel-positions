<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobListingRequest;
use App\Http\Requests\UpdateJobListingRequest;
use App\Models\JobListing;
use App\Services\JobListingService;

class JobListingController extends Controller
{
    public function __construct(
        protected JobListingService $jobListingsService
    ) {}
    /**
     * Display a listing of the jobs (featured + unfeatured).
     */
    public function index()
    {
        $allJobs = $this->jobListingsService->all();

        return view('jobs.index', [
            'unfeaturedJobs' => $allJobs['unfeaturedJobListings'],
            'featuredJobs' => $allJobs['featuredJobListings']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobListingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $jobListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobListing $jobListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobListingRequest $request, JobListing $jobListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobListing $jobListing)
    {
        //
    }
}
