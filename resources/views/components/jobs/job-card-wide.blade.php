<div
    class="bg-white/10 rounded-lg p-5 flex gap-x-8 group border border-transparent transition-colors duration-300 cursor-pointer hover:border-blue-500">
    <div class="w-[92px]">
        <img src="https://picsum.photos/seed/${{ rand(0, 10000) }}/92" class="rounded-lg" alt="">
    </div>
    <div class="flex justify-between w-full">
        <div class="flex flex-col">
            <p class="text-gray-300 self-start">Gov Exec</p>
            <p class="text-2xl font-semibold mb-2 group-hover:text-blue-500 transition-colors duration-300">Full stack
                Laravel Developer</p>
            <p class="text-gray-300 self-baseline mt-6">Full Time - From $60,000</p>
        </div>
        <div class="flex flex-col justify-between">
            <div class="self-end space-x-1">
                <x-jobs.job-tag background='transparent'>Remote</x-jobs.job-tag>
                <x-jobs.job-tag background='transparent'>22h</x-jobs.job-tag>
            </div>
            <div class="space-x-1">
                <x-jobs.job-tag>Frontend</x-jobs.job-tag>
                <x-jobs.job-tag>Backend</x-jobs.job-tag>
                <x-jobs.job-tag>API</x-jobs.job-tag>
            </div>
        </div>
    </div>
</div>
