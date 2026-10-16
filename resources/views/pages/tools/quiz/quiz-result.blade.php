<x-layout title="Jawaban Terkirim - Quiz Alhazen Academy"
    description="Jawaban quiz/ujian online kamu sudah terkirim."
    wa-message="Halo MinZen, saya butuh bantuan terkait Quiz/Ujian Online Alhazen Academy."
    :sales-phone="$salesPhone">

    <x-navbar variant="kids" />

    <main class="max-w-md mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-4xl text-primary mx-auto mb-4">
                &#10003;
            </div>
            <h1 class="text-2xl font-bold mb-2">Jawaban Terkirim!</h1>
            @if ($submittedBefore)
                <p class="text-sm text-gray-500 mb-2">Kamu sudah mengumpulkan jawaban untuk "{{ $title }}" sebelumnya. Data yang tersimpan adalah pengumpulan pertamamu.</p>
            @else
                <p class="text-sm text-gray-500 mb-2">Terima kasih sudah mengerjakan "{{ $title }}".</p>
            @endif
            <p class="text-sm text-gray-500">Nilai akan diumumkan oleh tutor.</p>
            <a href="{{ route('home') }}"
                class="inline-block mt-6 px-8 py-3 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20">
                Kembali ke Beranda
            </a>
        </div>
    </main>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

</x-layout>
