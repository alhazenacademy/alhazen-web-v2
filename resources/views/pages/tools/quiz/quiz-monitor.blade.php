<x-layout title="Hasil Quiz - Alhazen Academy"
    description="Rekap jawaban siswa quiz/ujian online."
    wa-message="Halo MinZen, saya butuh bantuan terkait Quiz/Ujian Online Alhazen Academy."
    :sales-phone="$salesPhone">

    <x-navbar variant="kids" />

    <main class="max-w-5xl mx-auto px-4 py-10" x-data="monitorApp()" x-init="init()">
        <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-center text-primary mb-2">{{ $session->title }}</h1>
        <p class="text-sm text-gray-500 text-center mb-6">
            Link ujian: <a href="{{ $quizUrl }}" class="underline break-all">{{ $quizUrl }}</a>
        </p>

        @if (session('quiz_notice'))
            <div class="mb-6 p-4 rounded-2xl bg-green-50 border border-green-200 text-green-700 text-sm font-bold">
                {{ session('quiz_notice') }}
            </div>
        @endif

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-6">
            <div class="bg-white rounded-2xl shadow p-5 text-center border-t-4 border-gray-300">
                <p class="text-3xl font-bold">{{ $stats['total'] }}</p>
                <p class="text-[11px] font-bold uppercase tracking-wider text-gray-500 mt-1">Pengumpul</p>
            </div>
            <div class="bg-green-50 rounded-2xl shadow p-5 text-center border border-green-100 border-t-4 border-t-green-500">
                <p class="text-3xl font-bold text-green-700">{{ $stats['synced'] }}</p>
                <p class="text-[11px] font-bold uppercase tracking-wider text-green-600 mt-1">Terkirim</p>
            </div>
            <div class="bg-amber-50 rounded-2xl shadow p-5 text-center border border-amber-100 border-t-4 border-t-amber-500">
                <p class="text-3xl font-bold text-amber-700">{{ $stats['pending'] }}</p>
                <p class="text-[11px] font-bold uppercase tracking-wider text-amber-600 mt-1">Belum dikirim</p>
            </div>
            <div class="bg-red-50 rounded-2xl shadow p-5 text-center border border-red-100 border-t-4 border-t-red-500">
                <p class="text-3xl font-bold text-red-700">{{ $stats['failed'] }}</p>
                <p class="text-[11px] font-bold uppercase tracking-wider text-red-600 mt-1">Gagal</p>
            </div>
        </div>

        <div class="flex justify-end gap-2 mb-4">
            @if (blank($session->sheets_webhook_url))
                <p class="text-xs text-gray-500 self-center">Sesi ini belum terhubung ke Google Sheets — gunakan Export Excel di bawah.</p>
            @elseif ($stats['pending'] + $stats['failed'] > 0)
                <form method="POST" action="{{ route('tools.quiz.resync_all', $session->slug) }}">
                    @csrf
                    <button type="submit" class="px-5 py-2.5 bg-amber-500 text-white rounded-xl font-bold text-sm shadow-lg hover:shadow-xl transition-all cursor-pointer">
                        Kirim semua yang belum terkirim
                    </button>
                </form>
            @endif
            <a href="{{ route('tools.quiz.export', $session->slug) }}"
                class="px-5 py-2.5 bg-primary text-white rounded-xl font-bold text-sm shadow-lg shadow-primary/20 hover:shadow-xl transition-all">
                Export Excel
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm min-w-[680px]">
                    <thead>
                        <tr class="bg-gray-50 text-left text-[11px] font-bold uppercase tracking-wider text-gray-500">
                            <th class="px-5 py-3.5">Siswa</th>
                            <th class="px-5 py-3.5">Kelas</th>
                            <th class="px-5 py-3.5">Dikumpulkan</th>
                            <th class="px-5 py-3.5">Sheets</th>
                            <th class="px-5 py-3.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($answers as $answer)
                            <tr class="hover:bg-primary/[0.03] transition-colors">
                                <td class="px-5 py-3.5">
                                    <div class="flex items-center gap-3">
                                        <span class="w-9 h-9 shrink-0 rounded-full bg-primary/10 text-primary font-bold flex items-center justify-center">
                                            {{ strtoupper(mb_substr($answer->nama, 0, 1)) }}
                                        </span>
                                        <span>
                                            <span class="block font-bold">{{ $answer->nama }}</span>
                                            <span class="block text-xs text-gray-400">{{ $answer->instansi }}</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-5 py-3.5 whitespace-nowrap">{{ $answer->kelas }}</td>
                                <td class="px-5 py-3.5 whitespace-nowrap text-gray-500">{{ $answer->submitted_at->format('d M Y H:i') }}</td>
                                <td class="px-5 py-3.5">
                                    @if ($answer->sheets_status === 'synced')
                                        <span class="inline-block text-xs font-bold text-green-700 bg-green-100 px-3 py-1 rounded-full">Terkirim</span>
                                    @elseif ($answer->sheets_status === 'failed')
                                        <span class="inline-block text-xs font-bold text-red-700 bg-red-100 px-3 py-1 rounded-full" title="{{ $answer->sheets_error }}">Gagal</span>
                                    @else
                                        <span class="inline-block text-xs font-bold text-amber-700 bg-amber-100 px-3 py-1 rounded-full">Belum dikirim</span>
                                    @endif
                                </td>
                                <td class="px-5 py-3.5">
                                    <div class="flex justify-end gap-2">
                                        @if ($answer->sheets_status !== 'synced' && filled($session->sheets_webhook_url))
                                            <form method="POST" action="{{ route('tools.quiz.resync', $answer) }}">
                                                @csrf
                                                <button type="submit" class="text-xs font-bold text-primary bg-primary/10 hover:bg-primary/20 transition-colors px-3 py-1.5 rounded-full cursor-pointer">{{ $answer->sheets_status === 'pending' ? 'Kirim' : 'Kirim ulang' }}</button>
                                            </form>
                                        @endif
                                        <form method="POST" action="{{ route('tools.quiz.reset', $answer) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" data-nama="{{ $answer->nama }}" data-action="{{ route('tools.quiz.reset', $answer) }}" @click="askReset($el.dataset.nama, $el.dataset.action)" class="text-xs font-bold text-red-600 bg-red-50 hover:bg-red-100 transition-colors px-3 py-1.5 rounded-full cursor-pointer">Reset</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-5 py-12 text-center">
                                    <p class="font-bold text-gray-500">Belum ada jawaban masuk.</p>
                                    <p class="text-xs text-gray-400 mt-1">Bagikan link ujian ke siswa untuk mulai mengumpulkan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            {{ $answers->links() }}
        </div>

        <div x-show="resetOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/50" @click="resetOpen = false"></div>
            <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-md overflow-hidden">
                <div class="bg-red-50 px-6 pt-6 pb-4 text-center">
                    <span class="inline-flex w-14 h-14 rounded-full bg-red-500 text-white items-center justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </span>
                    <h3 class="font-bold text-lg">Reset jawaban?</h3>
                </div>
                <div class="p-6 pt-4 text-center">
                    <p class="text-sm text-gray-600 mb-4">Hapus jawaban <span class="font-bold" x-text="resetName"></span>? Siswa bisa mengumpulkan ulang.</p>
                    <form :action="resetAction" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex gap-2">
                            <button type="button" @click="resetOpen = false"
                                class="flex-1 py-3 border border-gray-200 rounded-xl font-bold text-sm cursor-pointer">Batal</button>
                            <button type="submit"
                                class="flex-1 py-3 bg-red-500 text-white rounded-xl font-bold text-sm shadow-lg cursor-pointer">Ya, hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

    <script>
        function monitorApp() {
            return {
                resetOpen: false,
                resetName: '',
                resetAction: '',
                init() {},
                askReset(nama, action) {
                    this.resetName = nama;
                    this.resetAction = action;
                    this.resetOpen = true;
                },
            };
        }
    </script>

</x-layout>
