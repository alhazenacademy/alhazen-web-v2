<x-layout title="Membutuhkan PIN - Quiz Alhazen Academy"
    description="Halaman ini membutuhkan PIN tutor untuk membuat link quiz/ujian online."
    wa-message="Halo MinZen, saya butuh bantuan terkait Quiz/Ujian Online Alhazen Academy."
    :sales-phone="$salesPhone">

    <x-navbar variant="kids" />

    <main class="max-w-md mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-center text-primary mb-2">Membutuhkan PIN</h1>
            <p class="text-sm text-gray-500 text-center mb-6">Masukkan PIN tutor untuk melanjutkan membuat link quiz/ujian.</p>

            @if ($errors->any())
                <div class="mb-4 p-3 rounded-xl bg-red-50 text-red-600 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('tools.quiz.pin.store') }}">
                @csrf
                <label for="pin" class="block text-sm font-bold mb-2">PIN Tutor</label>
                <input type="password" name="pin" id="pin" required autofocus
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 text-center tracking-widest"
                    placeholder="••••••">
                <button type="submit"
                    class="w-full mt-4 py-3 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all cursor-pointer">
                    Masuk
                </button>
            </form>
        </div>
    </main>

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

</x-layout>
