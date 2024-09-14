@props(['jobTitle', 'schedule', 'jobOwnerName', 'salary', 'imageUrl'])

<div
    class="bg-white/10 rounded-lg p-5 flex flex-col items-center gap-y-8 group border border-transparent transition-colors duration-300 cursor-pointer hover:border-blue-500">
    <div class="flex justify-between self-stretch">
        <p class="text-gray-300 self-start">{{ Str::of($jobOwnerName)->limit(20) }}</p>
        <div class="self-end space-x-1 flex">
            <x-jobs.job-tag background='transparent'>{{ $schedule }}</x-jobs.job-tag>
        </div>
    </div>
    <div class="text-center">
        <p class="text-2xl font-semibold mb-2 group-hover:text-blue-500 transition-colors duration-300">
            {{ $jobTitle }}
        </p>
        <span class="text-gray-300">Starting from ${{ $salary }}</span>
    </div>
    <div class="self-stretch flex justify-between items-center mt-auto">
        <div class="space-x-1">
            <x-jobs.job-tag>Frontend</x-jobs.job-tag>
            <x-jobs.job-tag>Backend</x-jobs.job-tag>
            <x-jobs.job-tag>API</x-jobs.job-tag>
        </div>
        <img src="{{ $imageUrl }}" class="w-8 h-8 rounded-lg" alt="">
    </div>
</div>
