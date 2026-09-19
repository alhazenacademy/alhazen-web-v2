<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style type="text/tailwindcss">
@custom-variant dark (&:where(.dark, .dark *));
</style>

<div x-data="{ isDark: document.documentElement.classList.contains('dark') }" x-init="new MutationObserver(() => { isDark = document.documentElement.classList.contains('dark'); }).observe(document.documentElement, { attributes: true, attributeFilter: ['class'] })" class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
    @foreach ($this->getDaysData() as $day)
        <div wire:click="selectDay({{ $day['id'] }})"
            :style="isDark ? 'background-color: #09080B; border-color: #1f2937;' : 'background-color: #FBFAFB; border-color: #e5e7eb;'"
            class="group relative flex cursor-pointer flex-col overflow-hidden rounded-xl border p-6 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:border-emerald-500 hover:shadow-lg">

            <div class="mb-4 flex items-center justify-between">
                <h3 :style="isDark ? 'color: #ffffff;' : 'color: #030712;'">{{ $day['name'] }}</h3>
                <span :style="isDark ? 'background-color: rgba(52,211,153,0.1); color: #34d399;' : 'background-color: #ecfdf5; color: #047857;'" class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium ring-1 ring-inset">
                    {{ $day['active_count'] }} Aktif
                </span>
            </div>

            <p :style="isDark ? 'color: #9ca3af;' : 'color: #6b7280;'" class="mb-4 text-xs">{{ $day['total_count'] }} total slot</p>

            <div class="mb-6 flex min-h-[40px] flex-wrap gap-1.5">
                @forelse ($day['times'] as $time)
                    <span :style="isDark ? 'background-color: #1f2937; color: #d1d5db;' : 'background-color: #e5e7eb; color: #1f2937;'" class="inline-flex items-center rounded px-2 py-0.5 font-mono text-xs font-medium">
                        {{ $time }}
                    </span>
                @empty
                    <span class="text-xs italic text-gray-500">Kosong</span>
                @endforelse
            </div>

            <div :style="isDark ? 'border-color: #1f2937;' : 'border-color: #e5e7eb;'" class="mt-auto flex items-center justify-between border-t pt-4 text-sm font-semibold text-emerald-600">
                <span>Kelola Jam</span>
                <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.69L10.22 5.28a.75.75 0 111.06-1.06l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06l2.52-2.52H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    @endforeach
</div>
