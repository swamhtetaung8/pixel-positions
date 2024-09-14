@props(['jobTitle', 'schedule', 'jobOwnerName', 'salary', 'imageUrl'])

<div
    class="bg-white/10 rounded-lg p-5 flex gap-x-8 group border border-transparent transition-colors duration-300 cursor-pointer hover:border-blue-500">
    <div class="w-[100px]">
        <img src="{{ $imageUrl }}" width="100" height="100" class="rounded-lg" alt="">
    </div>
    <div class="flex justify-between w-full">
        <div class="flex flex-col">
            <p class="text-gray-300 self-start">{{ $jobOwnerName }}</p>
            <p class="text-2xl font-semibold mb-2 group-hover:text-blue-500 transition-colors duration-300">{{ $jobTitle }}</p>
            <p class="text-gray-300 self-baseline">Starting from ${{ $salary }}</p>
        </div>
        <div class="flex flex-col justify-between">
            <div class="self-end space-x-1">
                <x-jobs.job-tag background='transparent'>{{ $schedule }}</x-jobs.job-tag>
            </div>
            <div class="space-x-1">
                <x-jobs.job-tag>Frontend</x-jobs.job-tag>
                <x-jobs.job-tag>Backend</x-jobs.job-tag>
                <x-jobs.job-tag>API</x-jobs.job-tag>
            </div>
        </div>
    </div>
</div>
