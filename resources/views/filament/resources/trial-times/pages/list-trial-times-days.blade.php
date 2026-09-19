<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
    @foreach ($this->getDaysData() as $day)
        <div wire:click="selectDay({{ $day['id'] }})"
            style="background-color: #09080B;"
            class="group relative flex cursor-pointer flex-col overflow-hidden rounded-xl border border-gray-800 p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:border-emerald-500 hover:shadow-md">
            
            <div class="mb-4 flex items-center justify-between">
                <h3 class="text-lg font-bold text-white">{{ $day['name'] }}</h3>
                <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-400 ring-1 ring-inset ring-emerald-400/20">
                    {{ $day['active_count'] }} Aktif
                </span>
            </div>

            <p class="mb-4 text-xs text-gray-400">{{ $day['total_count'] }} total slot</p>

            <div class="mb-6 flex min-h-[40px] flex-wrap gap-1.5">
                @forelse ($day['times'] as $time)
                    <span class="inline-flex items-center rounded bg-gray-800 px-2 py-0.5 font-mono text-xs font-medium text-gray-300">
                        {{ $time }}
                    </span>
                @empty
                    <span class="text-xs italic text-gray-600">Kosong</span>
                @endforelse
            </div>

            <div class="mt-auto flex items-center justify-between border-t border-gray-800 pt-4 text-sm font-semibold text-emerald-400">
                <span>Kelola Jam</span>
                <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.69L10.22 5.28a.75.75 0 111.06-1.06l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06l2.52-2.52H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    @endforeach
</div>
