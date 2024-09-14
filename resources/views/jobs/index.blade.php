<x-layout>
    <x-section-wrapper class="my-8">
        <x-header-text>Top Jobs</x-header-text>
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $featuredJob)
                <x-jobs.job-card
                    :jobTitle="$featuredJob->title"
                    :schedule="$featuredJob->schedule"
                    :jobOwnerName="$featuredJob->jobOwner->name"
                    :salary="$featuredJob->salary"
                    :imageUrl="$featuredJob->image_url"
                />
            @endforeach
        </div>
    </x-section-wrapper>
    <x-section-wrapper class="my-8">
        <x-header-text>Tags</x-header-text>
        <div class="space-x-2">
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
            <x-jobs.job-tag size='base'>Tag</x-jobs.job-tag>
        </div>
    </x-section-wrapper>
    <x-section-wrapper class="my-8">
        <x-header-text>Recent Jobs</x-header-text>
        <div class="space-y-8">
            @foreach ($unfeaturedJobs as $unfeaturedJob)
                <x-jobs.job-card-wide
                    :jobTitle="$unfeaturedJob->title"
                    :schedule="$unfeaturedJob->schedule"
                    :jobOwnerName="$unfeaturedJob->jobOwner->name"
                    :salary="$unfeaturedJob->salary"
                    :imageUrl="$unfeaturedJob->image_url"
                />
            @endforeach
        </div>
    </x-section-wrapper>
</x-layout>
