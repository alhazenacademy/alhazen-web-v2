<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style type="text/tailwindcss">
@custom-variant dark (&:where(.dark, .dark *));
</style>

<div x-data="{ isDark: document.documentElement.classList.contains('dark') }" x-init="new MutationObserver(() => { isDark = document.documentElement.classList.contains('dark'); }).observe(document.documentElement, { attributes: true, attributeFilter: ['class'] })" :style="isDark ? 'background-color: #09080B; border-color: #1f2937;' : 'background-color: #FBFAFB; border-color: #e5e7eb;'" class="mb-6 rounded-xl border p-6 shadow-sm">
    <h2 :style="isDark ? 'color: #ffffff;' : 'color: #030712;'" class="text-xl font-bold tracking-tight">
        Kelola Jam Trial Class — Hari {{ $this->getDayName() }}
    </h2>
    <p :style="isDark ? 'color: #9ca3af;' : 'color: #6b7280;'" class="mt-1 text-sm">
        Atur status aktif/nonaktif, urutan, atau tambah jam baru khusus untuk hari {{ $this->getDayName() }}.
    </p>
</div>
