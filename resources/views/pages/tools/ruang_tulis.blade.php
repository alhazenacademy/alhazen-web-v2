<x-layout title="Ruang Tulis by Alhazen - Editor Markdown Online Gratis"
    description="Tool editor Markdown gratis dengan live preview, syntax highlighting, dan dukungan diagram Mermaid. Cocok untuk catatan coding dan dokumentasi."
    wa-message="Halo MinZen, Saya Mendapatkan Informasi dari Website Alhazen Academy - Ruang Tulis."
    :sales-phone="$salesPhone">

    <x-navbar variant="kids" />

    <x-tools.ruang-tulis-editor :starter-text="$starterText" />

    <x-footer :address="$address" :socials="$socials" :contact="['phone' => $whatsapp, 'email' => $email, 'site' => $website]" :program-links="$programLinks" />

    {{-- CDN Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dompurify/dist/purify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/github.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mermaid@11/dist/mermaid.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>

</x-layout>
