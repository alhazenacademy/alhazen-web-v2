<x-layout wa-message="Halo, saya mau konsultasi program belajar di Alhazen." :sales-phone="$salesPhone">
    <x-navbar variant="kids" />
    <x-trial-class.form :programs="$programs" :times="$times" :sources="$sources" :sales-phone="$salesPhone" :holidays="$holidays" />
</x-layout>
