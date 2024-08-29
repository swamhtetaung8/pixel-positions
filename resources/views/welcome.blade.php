<x-layout>
    <x-section-wrapper class="my-8">
        <x-header-text>Top Jobs</x-header-text>
        <div class="grid lg:grid-cols-3 gap-x-8">
            <x-jobs.job-card/>
            <x-jobs.job-card/>
            <x-jobs.job-card/>
        </div>
    </x-section-wrapper>
    <x-section-wrapper class="my-8">
        <x-header-text>Tags</x-header-text>
        <div>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
            <x-jobs.job-tag>Tag</x-jobs.job-tag>
        </div>
    </x-section-wrapper>
    <x-section-wrapper class="my-8">
        <x-header-text>Recent Jobs</x-header-text>
    </x-section-wrapper>
</x-layout>
