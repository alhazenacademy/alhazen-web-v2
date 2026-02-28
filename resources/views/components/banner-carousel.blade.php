@props([
    'banners' => [],
    'interval' => 4000,
])

@php
    $items = collect($banners);
@endphp

@if ($items->count() > 0)
<section id="banners" class="relative overflow-hidden pt-5" aria-labelledby="hero-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            x-data="{
                active: 0,
                total: {{ $items->count() }},
                timer: null,
                start() {
                    this.timer = setInterval(() => {
                        this.active = (this.active + 1) % this.total
                    }, {{ $interval }})
                },
                stop() {
                    if (this.timer) clearInterval(this.timer)
                }
            }"
            x-init="start()"
            @mouseenter="stop()"
            @mouseleave="start()"
            class="relative w-full overflow-hidden rounded-[28px]"
        >

            {{-- SLIDE WRAPPER --}}
            <div class="relative w-full aspect-[10/3]">

                @foreach ($items as $i => $img)
                    <div x-show="active === {{ $i }}" x-transition.opacity.duration.700ms class="absolute inset-0" >
                        <img src="{{ $img }}" alt="Banner {{ $i + 1 }}" class="w-full h-full object-cover" loading="{{ $i === 0 ? 'eager' : 'lazy' }}" >
                    </div>
                @endforeach

            </div>

            {{-- DOT INDICATOR --}}
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                @foreach ($items as $i => $img)
                    <button
                        @click="active = {{ $i }}"
                        class="w-3 h-3 rounded-full transition-all"
                        :class="active === {{ $i }} ? 'bg-white scale-110' : 'bg-white/50'"
                    ></button>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endif
