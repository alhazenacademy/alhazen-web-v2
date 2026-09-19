<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div style="background-color: #09080B;" class="mb-6 rounded-xl border border-gray-800 p-6 shadow-sm">
    <h2 class="text-xl font-bold tracking-tight text-white">
        Kelola Jam Trial Class — Hari {{ $this->getDayName() }}
    </h2>
    <p class="mt-1 text-sm text-gray-400">
        Atur status aktif/nonaktif, urutan, atau tambah jam baru khusus untuk hari {{ $this->getDayName() }}.
    </p>
</div>
