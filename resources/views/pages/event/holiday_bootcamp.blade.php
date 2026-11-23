@php
    $salesPhone = $salesPhone ?? optional(\App\Models\SalesNumber::active()->inRandomOrder()->first())->phone_number;
    $waText = urlencode('Halo MinZen, Saya Mau Tanya Info & Pendaftaran Alhazen Holiday Bootcamp 2026.');
    $waUrl = 'https://wa.me/' . ($salesPhone ?: '6281234567890') . '?text=' . $waText;

    // Data footer (Alhazen design) — aman jika tidak dikirim dari route
    $socials = collect($socials ?? []);
    $contact = $contact ?? ['phone' => '', 'email' => '', 'site' => 'alhazenacademy.com'];
    $address = $address ?? '';
    $programLinks = $programLinks ?? [];
@endphp
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alhazen Holiday Bootcamp 2026 — Liburan Seru Bikin Karya Digital & Portofolio</title>
    <meta name="description" content="Program liburan sekolah 8 hari intensif online via Zoom untuk jenjang SD–SMA. Bikin karya 3D di Roblox Studio, animasi Scratch, dan pemrograman Python bareng mentor Alhazen!">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Alhazen Holiday Bootcamp 2026 — Liburan Seru Bikin Karya Digital & Portofolio">
    <meta property="og:description" content="Program liburan sekolah 8 hari intensif online via Zoom untuk SD–SMA. Bikin karya 3D di Roblox Studio, animasi Scratch, dan pemrograman Python bareng mentor Alhazen!">
    {{-- og:image tetap JPEG: crawler WhatsApp/Facebook tidak konsisten mendukung WebP,
         dan gambar ini hanya diambil crawler (tidak ikut load halaman). --}}
    <meta property="og:image" content="{{ asset('assets/custom/holiday_bootcamp/poster.jpeg') }}">
    <link rel="icon" href="{{ asset('assets/logo-new.webp') }}" type="image/x-icon">

    {{-- Aset halaman ini di-inline penuh (CSS + JS internal di blok style/script
         dengan marker data-hb). Tanpa <link>/<script> eksternal.
         Sumber compile tersimpan di .ai/brief/holiday_bootcamp/ untuk referensi. --}}

    <style data-hb="css">
        @verbatim
        /*! tailwindcss v4.1.14 | MIT License | https://tailwindcss.com */@layer properties{@supports ((-webkit-hyphens:none) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0;--tw-scale-x:1;--tw-scale-y:1;--tw-scale-z:1;--tw-space-y-reverse:0;--tw-border-style:solid;--tw-gradient-position:initial;--tw-gradient-from:#0000;--tw-gradient-via:#0000;--tw-gradient-to:#0000;--tw-gradient-stops:initial;--tw-gradient-via-stops:initial;--tw-gradient-from-position:0%;--tw-gradient-via-position:50%;--tw-gradient-to-position:100%;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-backdrop-blur:initial;--tw-backdrop-brightness:initial;--tw-backdrop-contrast:initial;--tw-backdrop-grayscale:initial;--tw-backdrop-hue-rotate:initial;--tw-backdrop-invert:initial;--tw-backdrop-opacity:initial;--tw-backdrop-saturate:initial;--tw-backdrop-sepia:initial;--tw-duration:initial;--tw-ease:initial}}}@layer theme{:root,:host{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-orange-50:oklch(98% .016 73.684);--color-orange-100:oklch(95.4% .038 75.164);--color-orange-200:oklch(90.1% .076 70.697);--color-orange-500:oklch(70.5% .213 47.604);--color-amber-50:oklch(98.7% .022 95.277);--color-amber-100:oklch(96.2% .059 95.617);--color-amber-200:oklch(92.4% .12 95.746);--color-amber-500:oklch(76.9% .188 70.08);--color-amber-600:oklch(66.6% .179 58.318);--color-amber-800:oklch(47.3% .137 46.201);--color-amber-900:oklch(41.4% .112 45.904);--color-emerald-50:oklch(97.9% .021 166.113);--color-emerald-100:oklch(95% .052 163.051);--color-sky-50:oklch(97.7% .013 236.62);--color-sky-100:oklch(95.1% .026 236.824);--color-sky-200:oklch(90.1% .058 230.902);--color-purple-50:oklch(97.7% .014 308.299);--color-purple-100:oklch(94.6% .033 307.174);--color-purple-500:oklch(62.7% .265 303.9);--color-purple-700:oklch(49.6% .265 301.924);--color-slate-400:oklch(70.4% .04 256.788);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--tracking-tight:-.025em;--tracking-wide:.025em;--tracking-wider:.05em;--leading-tight:1.25;--leading-relaxed:1.625;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--drop-shadow-md:0 3px 3px #0000001f;--ease-in-out:cubic-bezier(.4,0,.2,1);--blur-md:12px;--blur-2xl:40px;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono);--color-main:#00af91;--color-canvas:#fbf4ee;--color-accent:#ffbd01;--color-accent-dark:#d99f00;--color-scratch:#fb4f27;--color-roblox:#ffbd01;--color-python:#2d6dd8;--color-ink:#1e293b;--color-muted:#475569;--font-heading:"Fredoka",cursive,sans-serif}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::-moz-placeholder{opacity:1}::placeholder{opacity:1}@supports (not (-webkit-appearance:-apple-pay-button)) or (contain-intrinsic-size:1px){::-moz-placeholder{color:currentColor}::placeholder{color:currentColor}@supports (color:color-mix(in lab,red,red)){::-moz-placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}::placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}}}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}::-webkit-calendar-picker-indicator{line-height:1}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.pointer-events-none{pointer-events:none}.collapse{visibility:collapse}.absolute{position:absolute}.fixed{position:fixed}.relative{position:relative}.sticky{position:sticky}.inset-0{inset:calc(var(--spacing)*0)}.-top-4{top:calc(var(--spacing)*-4)}.-top-6{top:calc(var(--spacing)*-6)}.-top-8{top:calc(var(--spacing)*-8)}.top-0{top:calc(var(--spacing)*0)}.-right-2{right:calc(var(--spacing)*-2)}.-right-6{right:calc(var(--spacing)*-6)}.-right-8{right:calc(var(--spacing)*-8)}.right-6{right:calc(var(--spacing)*6)}.-bottom-2{bottom:calc(var(--spacing)*-2)}.-bottom-5{bottom:calc(var(--spacing)*-5)}.-bottom-6{bottom:calc(var(--spacing)*-6)}.bottom-0{bottom:calc(var(--spacing)*0)}.bottom-6{bottom:calc(var(--spacing)*6)}.-left-2{left:calc(var(--spacing)*-2)}.-left-6{left:calc(var(--spacing)*-6)}.left-0{left:calc(var(--spacing)*0)}.left-1\/2{left:50%}.z-10{z-index:10}.z-20{z-index:20}.z-50{z-index:50}.order-1{order:1}.order-2{order:2}.m-auto{margin:auto}.mx-auto{margin-inline:auto}.my-4{margin-block:calc(var(--spacing)*4)}.-mt-6{margin-top:calc(var(--spacing)*-6)}.mt-0\.5{margin-top:calc(var(--spacing)*.5)}.mt-1{margin-top:calc(var(--spacing)*1)}.mt-3{margin-top:calc(var(--spacing)*3)}.mt-5{margin-top:calc(var(--spacing)*5)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-8{margin-top:calc(var(--spacing)*8)}.mt-10{margin-top:calc(var(--spacing)*10)}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-3{margin-bottom:calc(var(--spacing)*3)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-5{margin-bottom:calc(var(--spacing)*5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-8{margin-bottom:calc(var(--spacing)*8)}.mb-10{margin-bottom:calc(var(--spacing)*10)}.mb-14{margin-bottom:calc(var(--spacing)*14)}.mb-16{margin-bottom:calc(var(--spacing)*16)}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.h-6{height:calc(var(--spacing)*6)}.h-8{height:calc(var(--spacing)*8)}.h-10{height:calc(var(--spacing)*10)}.h-12{height:calc(var(--spacing)*12)}.h-14{height:calc(var(--spacing)*14)}.h-15{height:calc(var(--spacing)*15)}.h-20{height:calc(var(--spacing)*20)}.h-24{height:calc(var(--spacing)*24)}.h-40{height:calc(var(--spacing)*40)}.h-48{height:calc(var(--spacing)*48)}.h-64{height:calc(var(--spacing)*64)}.h-auto{height:auto}.h-full{height:100%}.h-px{height:1px}.w-6{width:calc(var(--spacing)*6)}.w-8{width:calc(var(--spacing)*8)}.w-10{width:calc(var(--spacing)*10)}.w-12{width:calc(var(--spacing)*12)}.w-14{width:calc(var(--spacing)*14)}.w-24{width:calc(var(--spacing)*24)}.w-35{width:calc(var(--spacing)*35)}.w-40{width:calc(var(--spacing)*40)}.w-48{width:calc(var(--spacing)*48)}.w-64{width:calc(var(--spacing)*64)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:var(--container-2xl)}.max-w-3xl{max-width:var(--container-3xl)}.max-w-4xl{max-width:var(--container-4xl)}.max-w-7xl{max-width:var(--container-7xl)}.max-w-md{max-width:var(--container-md)}.max-w-sm{max-width:var(--container-sm)}.max-w-xl{max-width:var(--container-xl)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.-translate-x-1\/2{--tw-translate-x: -50% ;translate:var(--tw-translate-x)var(--tw-translate-y)}.scale-110{--tw-scale-x:110%;--tw-scale-y:110%;--tw-scale-z:110%;scale:var(--tw-scale-x)var(--tw-scale-y)}.rotate-3{rotate:3deg}.rotate-180{rotate:180deg}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.items-start{align-items:flex-start}.items-stretch{align-items:stretch}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.gap-1\.5{gap:calc(var(--spacing)*1.5)}.gap-2{gap:calc(var(--spacing)*2)}.gap-2\.5{gap:calc(var(--spacing)*2.5)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.gap-6{gap:calc(var(--spacing)*6)}.gap-8{gap:calc(var(--spacing)*8)}.gap-12{gap:calc(var(--spacing)*12)}:where(.space-y-2>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-3>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-4>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*4)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*4)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}.gap-y-10{row-gap:calc(var(--spacing)*10)}.overflow-hidden{overflow:hidden}.scroll-smooth{scroll-behavior:smooth}.rounded{border-radius:.25rem}.rounded-2xl{border-radius:var(--radius-2xl)}.rounded-3xl{border-radius:var(--radius-3xl)}.rounded-\[28px\]{border-radius:28px}.rounded-full{border-radius:3.40282e38px}.rounded-xl{border-radius:var(--radius-xl)}.rounded-t-\[56px\]{border-top-left-radius:56px;border-top-right-radius:56px}.border{border-style:var(--tw-border-style);border-width:1px}.border-2{border-style:var(--tw-border-style);border-width:2px}.border-4{border-style:var(--tw-border-style);border-width:4px}.border-t{border-top-style:var(--tw-border-style);border-top-width:1px}.border-b-2{border-bottom-style:var(--tw-border-style);border-bottom-width:2px}.border-\[\#E2E8F0\]{border-color:#e2e8f0}.border-accent{border-color:var(--color-accent)}.border-accent\/40{border-color:#ffbd0166}@supports (color:color-mix(in lab,red,red)){.border-accent\/40{border-color:color-mix(in oklab,var(--color-accent)40%,transparent)}}.border-accent\/60{border-color:#ffbd0199}@supports (color:color-mix(in lab,red,red)){.border-accent\/60{border-color:color-mix(in oklab,var(--color-accent)60%,transparent)}}.border-amber-100{border-color:var(--color-amber-100)}.border-amber-200{border-color:var(--color-amber-200)}.border-emerald-100{border-color:var(--color-emerald-100)}.border-main{border-color:var(--color-main)}.border-main\/30{border-color:#00af914d}@supports (color:color-mix(in lab,red,red)){.border-main\/30{border-color:color-mix(in oklab,var(--color-main)30%,transparent)}}.border-main\/40{border-color:#00af9166}@supports (color:color-mix(in lab,red,red)){.border-main\/40{border-color:color-mix(in oklab,var(--color-main)40%,transparent)}}.border-orange-100{border-color:var(--color-orange-100)}.border-python\/40{border-color:#2d6dd866}@supports (color:color-mix(in lab,red,red)){.border-python\/40{border-color:color-mix(in oklab,var(--color-python)40%,transparent)}}.border-python\/50{border-color:#2d6dd880}@supports (color:color-mix(in lab,red,red)){.border-python\/50{border-color:color-mix(in oklab,var(--color-python)50%,transparent)}}.border-roblox{border-color:var(--color-roblox)}.border-scratch{border-color:var(--color-scratch)}.border-scratch\/50{border-color:#fb4f2780}@supports (color:color-mix(in lab,red,red)){.border-scratch\/50{border-color:color-mix(in oklab,var(--color-scratch)50%,transparent)}}.border-sky-100{border-color:var(--color-sky-100)}.border-white{border-color:var(--color-white)}.border-white\/20{border-color:#fff3}@supports (color:color-mix(in lab,red,red)){.border-white\/20{border-color:color-mix(in oklab,var(--color-white)20%,transparent)}}.bg-\[\#25D366\]{background-color:#25d366}.bg-\[\#E2E8F0\]{background-color:#e2e8f0}.bg-\[\#FBF4EE\]\/90{background-color:#fbf4eee6}.bg-accent{background-color:var(--color-accent)}.bg-accent\/15{background-color:#ffbd0126}@supports (color:color-mix(in lab,red,red)){.bg-accent\/15{background-color:color-mix(in oklab,var(--color-accent)15%,transparent)}}.bg-accent\/20{background-color:#ffbd0133}@supports (color:color-mix(in lab,red,red)){.bg-accent\/20{background-color:color-mix(in oklab,var(--color-accent)20%,transparent)}}.bg-accent\/30{background-color:#ffbd014d}@supports (color:color-mix(in lab,red,red)){.bg-accent\/30{background-color:color-mix(in oklab,var(--color-accent)30%,transparent)}}.bg-amber-100{background-color:var(--color-amber-100)}.bg-amber-100\/70{background-color:#fef3c6b3}@supports (color:color-mix(in lab,red,red)){.bg-amber-100\/70{background-color:color-mix(in oklab,var(--color-amber-100)70%,transparent)}}.bg-canvas{background-color:var(--color-canvas)}.bg-emerald-100{background-color:var(--color-emerald-100)}.bg-main{background-color:var(--color-main)}.bg-main\/5{background-color:#00af910d}@supports (color:color-mix(in lab,red,red)){.bg-main\/5{background-color:color-mix(in oklab,var(--color-main)5%,transparent)}}.bg-main\/10{background-color:#00af911a}@supports (color:color-mix(in lab,red,red)){.bg-main\/10{background-color:color-mix(in oklab,var(--color-main)10%,transparent)}}.bg-main\/15{background-color:#00af9126}@supports (color:color-mix(in lab,red,red)){.bg-main\/15{background-color:color-mix(in oklab,var(--color-main)15%,transparent)}}.bg-main\/20{background-color:#00af9133}@supports (color:color-mix(in lab,red,red)){.bg-main\/20{background-color:color-mix(in oklab,var(--color-main)20%,transparent)}}.bg-orange-50\/60{background-color:#fff7ed99}@supports (color:color-mix(in lab,red,red)){.bg-orange-50\/60{background-color:color-mix(in oklab,var(--color-orange-50)60%,transparent)}}.bg-orange-100{background-color:var(--color-orange-100)}.bg-purple-100{background-color:var(--color-purple-100)}.bg-python{background-color:var(--color-python)}.bg-python\/10{background-color:#2d6dd81a}@supports (color:color-mix(in lab,red,red)){.bg-python\/10{background-color:color-mix(in oklab,var(--color-python)10%,transparent)}}.bg-python\/15{background-color:#2d6dd826}@supports (color:color-mix(in lab,red,red)){.bg-python\/15{background-color:color-mix(in oklab,var(--color-python)15%,transparent)}}.bg-roblox{background-color:var(--color-roblox)}.bg-scratch{background-color:var(--color-scratch)}.bg-scratch\/15{background-color:#fb4f2726}@supports (color:color-mix(in lab,red,red)){.bg-scratch\/15{background-color:color-mix(in oklab,var(--color-scratch)15%,transparent)}}.bg-sky-50\/60{background-color:#f0f9ff99}@supports (color:color-mix(in lab,red,red)){.bg-sky-50\/60{background-color:color-mix(in oklab,var(--color-sky-50)60%,transparent)}}.bg-sky-100{background-color:var(--color-sky-100)}.bg-white{background-color:var(--color-white)}.bg-white\/10{background-color:#ffffff1a}@supports (color:color-mix(in lab,red,red)){.bg-white\/10{background-color:color-mix(in oklab,var(--color-white)10%,transparent)}}.bg-white\/20{background-color:#fff3}@supports (color:color-mix(in lab,red,red)){.bg-white\/20{background-color:color-mix(in oklab,var(--color-white)20%,transparent)}}.bg-gradient-to-b{--tw-gradient-position:to bottom in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.bg-gradient-to-br{--tw-gradient-position:to bottom right in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.bg-gradient-to-r{--tw-gradient-position:to right in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.from-amber-50{--tw-gradient-from:var(--color-amber-50);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.from-emerald-50\/60{--tw-gradient-from:#ecfdf599}@supports (color:color-mix(in lab,red,red)){.from-emerald-50\/60{--tw-gradient-from:color-mix(in oklab,var(--color-emerald-50)60%,transparent)}}.from-emerald-50\/60{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.from-main{--tw-gradient-from:var(--color-main);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.from-orange-50{--tw-gradient-from:var(--color-orange-50);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.from-sky-50{--tw-gradient-from:var(--color-sky-50);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.from-white{--tw-gradient-from:var(--color-white);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-\[\#008A72\]{--tw-gradient-to:#008a72;--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-\[\#FAF6F0\]{--tw-gradient-to:#faf6f0;--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-amber-50\/40{--tw-gradient-to:#fffbeb66}@supports (color:color-mix(in lab,red,red)){.to-amber-50\/40{--tw-gradient-to:color-mix(in oklab,var(--color-amber-50)40%,transparent)}}.to-amber-50\/40{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-amber-200\/60{--tw-gradient-to:#fee68599}@supports (color:color-mix(in lab,red,red)){.to-amber-200\/60{--tw-gradient-to:color-mix(in oklab,var(--color-amber-200)60%,transparent)}}.to-amber-200\/60{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-orange-200\/60{--tw-gradient-to:#ffd7a899}@supports (color:color-mix(in lab,red,red)){.to-orange-200\/60{--tw-gradient-to:color-mix(in oklab,var(--color-orange-200)60%,transparent)}}.to-orange-200\/60{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-sky-200\/60{--tw-gradient-to:#b8e6fe99}@supports (color:color-mix(in lab,red,red)){.to-sky-200\/60{--tw-gradient-to:color-mix(in oklab,var(--color-sky-200)60%,transparent)}}.to-sky-200\/60{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.to-white{--tw-gradient-to:var(--color-white);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.object-contain{-o-object-fit:contain;object-fit:contain}.object-cover{-o-object-fit:cover;object-fit:cover}.object-bottom{-o-object-position:bottom;object-position:bottom}.p-2{padding:calc(var(--spacing)*2)}.p-3{padding:calc(var(--spacing)*3)}.p-4{padding:calc(var(--spacing)*4)}.p-5{padding:calc(var(--spacing)*5)}.p-6{padding:calc(var(--spacing)*6)}.p-7{padding:calc(var(--spacing)*7)}.p-8{padding:calc(var(--spacing)*8)}.px-2{padding-inline:calc(var(--spacing)*2)}.px-3{padding-inline:calc(var(--spacing)*3)}.px-3\.5{padding-inline:calc(var(--spacing)*3.5)}.px-4{padding-inline:calc(var(--spacing)*4)}.px-5{padding-inline:calc(var(--spacing)*5)}.px-6{padding-inline:calc(var(--spacing)*6)}.px-7{padding-inline:calc(var(--spacing)*7)}.px-8{padding-inline:calc(var(--spacing)*8)}.py-0\.5{padding-block:calc(var(--spacing)*.5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.py-2\.5{padding-block:calc(var(--spacing)*2.5)}.py-3{padding-block:calc(var(--spacing)*3)}.py-3\.5{padding-block:calc(var(--spacing)*3.5)}.py-4{padding-block:calc(var(--spacing)*4)}.py-6{padding-block:calc(var(--spacing)*6)}.py-8{padding-block:calc(var(--spacing)*8)}.py-10{padding-block:calc(var(--spacing)*10)}.py-12{padding-block:calc(var(--spacing)*12)}.py-16{padding-block:calc(var(--spacing)*16)}.py-20{padding-block:calc(var(--spacing)*20)}.pt-2{padding-top:calc(var(--spacing)*2)}.pt-4{padding-top:calc(var(--spacing)*4)}.pt-10{padding-top:calc(var(--spacing)*10)}.pb-6{padding-bottom:calc(var(--spacing)*6)}.pb-20{padding-bottom:calc(var(--spacing)*20)}.text-center{text-align:center}.text-justify{text-align:justify}.text-left{text-align:left}.font-heading{font-family:var(--font-heading)}.text-2xl{font-size:var(--text-2xl);line-height:var(--tw-leading,var(--text-2xl--line-height))}.text-3xl{font-size:var(--text-3xl);line-height:var(--tw-leading,var(--text-3xl--line-height))}.text-4xl{font-size:var(--text-4xl);line-height:var(--tw-leading,var(--text-4xl--line-height))}.text-5xl{font-size:var(--text-5xl);line-height:var(--tw-leading,var(--text-5xl--line-height))}.text-base{font-size:var(--text-base);line-height:var(--tw-leading,var(--text-base--line-height))}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xl{font-size:var(--text-xl);line-height:var(--tw-leading,var(--text-xl--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[10px\]{font-size:10px}.text-\[22px\]{font-size:22px}.leading-\[1\.15\]{--tw-leading:1.15;line-height:1.15}.leading-relaxed{--tw-leading:var(--leading-relaxed);line-height:var(--leading-relaxed)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-bold{--tw-font-weight:var(--font-weight-bold);font-weight:var(--font-weight-bold)}.font-extrabold{--tw-font-weight:var(--font-weight-extrabold);font-weight:var(--font-weight-extrabold)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-normal{--tw-font-weight:var(--font-weight-normal);font-weight:var(--font-weight-normal)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.tracking-tight{--tw-tracking:var(--tracking-tight);letter-spacing:var(--tracking-tight)}.tracking-wide{--tw-tracking:var(--tracking-wide);letter-spacing:var(--tracking-wide)}.tracking-wider{--tw-tracking:var(--tracking-wider);letter-spacing:var(--tracking-wider)}.whitespace-nowrap{white-space:nowrap}.text-accent{color:var(--color-accent)}.text-accent-dark{color:var(--color-accent-dark)}.text-amber-500{color:var(--color-amber-500)}.text-amber-600{color:var(--color-amber-600)}.text-amber-800{color:var(--color-amber-800)}.text-amber-900{color:var(--color-amber-900)}.text-ink{color:var(--color-ink)}.text-main{color:var(--color-main)}.text-muted{color:var(--color-muted)}.text-orange-500{color:var(--color-orange-500)}.text-purple-700{color:var(--color-purple-700)}.text-python{color:var(--color-python)}.text-scratch{color:var(--color-scratch)}.text-slate-400{color:var(--color-slate-400)}.text-white{color:var(--color-white)}.text-white\/80{color:#fffc}@supports (color:color-mix(in lab,red,red)){.text-white\/80{color:color-mix(in oklab,var(--color-white)80%,transparent)}}.text-white\/90{color:#ffffffe6}@supports (color:color-mix(in lab,red,red)){.text-white\/90{color:color-mix(in oklab,var(--color-white)90%,transparent)}}.uppercase{text-transform:uppercase}.italic{font-style:italic}.line-through{text-decoration-line:line-through}.underline{text-decoration-line:underline}.decoration-accent{text-decoration-color:var(--color-accent)}.decoration-wavy{text-decoration-style:wavy}.decoration-2{text-decoration-thickness:2px}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-95{opacity:.95}.shadow{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a),0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-2xl{--tw-shadow:0 25px 50px -12px var(--tw-shadow-color,#00000040);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[0_20px_50px_rgba\(0\,175\,145\,\.25\)\]{--tw-shadow:0 20px 50px var(--tw-shadow-color,#00af9140);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px var(--tw-shadow-color,#0000001a),0 4px 6px -4px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px var(--tw-shadow-color,#0000001a),0 2px 4px -2px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a),0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px var(--tw-shadow-color,#0000001a),0 8px 10px -6px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.ring-1{--tw-ring-shadow:var(--tw-ring-inset,)0 0 0 calc(1px + var(--tw-ring-offset-width))var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-black\/10{--tw-shadow-color:#0000001a}@supports (color:color-mix(in lab,red,red)){.shadow-black\/10{--tw-shadow-color:color-mix(in oklab,color-mix(in oklab,var(--color-black)10%,transparent)var(--tw-shadow-alpha),transparent)}}.ring-white\/10{--tw-ring-color:#ffffff1a}@supports (color:color-mix(in lab,red,red)){.ring-white\/10{--tw-ring-color:color-mix(in oklab,var(--color-white)10%,transparent)}}.blur-2xl{--tw-blur:blur(var(--blur-2xl));filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.drop-shadow-md{--tw-drop-shadow-size:drop-shadow(0 3px 3px var(--tw-drop-shadow-color,#0000001f));--tw-drop-shadow:drop-shadow(var(--drop-shadow-md));filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.backdrop-blur-md{--tw-backdrop-blur:blur(var(--blur-md));-webkit-backdrop-filter:var(--tw-backdrop-blur,)var(--tw-backdrop-brightness,)var(--tw-backdrop-contrast,)var(--tw-backdrop-grayscale,)var(--tw-backdrop-hue-rotate,)var(--tw-backdrop-invert,)var(--tw-backdrop-opacity,)var(--tw-backdrop-saturate,)var(--tw-backdrop-sepia,);backdrop-filter:var(--tw-backdrop-blur,)var(--tw-backdrop-brightness,)var(--tw-backdrop-contrast,)var(--tw-backdrop-grayscale,)var(--tw-backdrop-hue-rotate,)var(--tw-backdrop-invert,)var(--tw-backdrop-opacity,)var(--tw-backdrop-saturate,)var(--tw-backdrop-sepia,)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to,opacity,box-shadow,transform,translate,scale,rotate,filter,backdrop-filter,display,content-visibility,overlay,pointer-events;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-colors{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-transform{transition-property:transform,translate,scale,rotate;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.duration-200{--tw-duration:.2s;transition-duration:.2s}.ease-in-out{--tw-ease:var(--ease-in-out);transition-timing-function:var(--ease-in-out)}.will-change-transform{will-change:transform}.select-none{-webkit-user-select:none;-moz-user-select:none;user-select:none}@media (hover:hover){.hover\:scale-105:hover{--tw-scale-x:105%;--tw-scale-y:105%;--tw-scale-z:105%;scale:var(--tw-scale-x)var(--tw-scale-y)}.hover\:scale-\[1\.05\]:hover{scale:1.05}.hover\:border-accent:hover{border-color:var(--color-accent)}.hover\:border-accent\/80:hover{border-color:#ffbd01cc}@supports (color:color-mix(in lab,red,red)){.hover\:border-accent\/80:hover{border-color:color-mix(in oklab,var(--color-accent)80%,transparent)}}.hover\:border-main:hover{border-color:var(--color-main)}.hover\:border-main\/80:hover{border-color:#00af91cc}@supports (color:color-mix(in lab,red,red)){.hover\:border-main\/80:hover{border-color:color-mix(in oklab,var(--color-main)80%,transparent)}}.hover\:border-purple-500\/80:hover{border-color:#ac4bffcc}@supports (color:color-mix(in lab,red,red)){.hover\:border-purple-500\/80:hover{border-color:color-mix(in oklab,var(--color-purple-500)80%,transparent)}}.hover\:border-python:hover{border-color:var(--color-python)}.hover\:border-python\/80:hover{border-color:#2d6dd8cc}@supports (color:color-mix(in lab,red,red)){.hover\:border-python\/80:hover{border-color:color-mix(in oklab,var(--color-python)80%,transparent)}}.hover\:border-scratch:hover{border-color:var(--color-scratch)}.hover\:border-scratch\/80:hover{border-color:#fb4f27cc}@supports (color:color-mix(in lab,red,red)){.hover\:border-scratch\/80:hover{border-color:color-mix(in oklab,var(--color-scratch)80%,transparent)}}.hover\:bg-white\/20:hover{background-color:#fff3}@supports (color:color-mix(in lab,red,red)){.hover\:bg-white\/20:hover{background-color:color-mix(in oklab,var(--color-white)20%,transparent)}}.hover\:bg-gradient-to-br:hover{--tw-gradient-position:to bottom right in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.hover\:from-white:hover{--tw-gradient-from:var(--color-white);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:to-accent\/10:hover{--tw-gradient-to:#ffbd011a}@supports (color:color-mix(in lab,red,red)){.hover\:to-accent\/10:hover{--tw-gradient-to:color-mix(in oklab,var(--color-accent)10%,transparent)}}.hover\:to-accent\/10:hover{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:to-main\/10:hover{--tw-gradient-to:#00af911a}@supports (color:color-mix(in lab,red,red)){.hover\:to-main\/10:hover{--tw-gradient-to:color-mix(in oklab,var(--color-main)10%,transparent)}}.hover\:to-main\/10:hover{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:to-purple-50:hover{--tw-gradient-to:var(--color-purple-50);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:to-python\/10:hover{--tw-gradient-to:#2d6dd81a}@supports (color:color-mix(in lab,red,red)){.hover\:to-python\/10:hover{--tw-gradient-to:color-mix(in oklab,var(--color-python)10%,transparent)}}.hover\:to-python\/10:hover{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:to-scratch\/10:hover{--tw-gradient-to:#fb4f271a}@supports (color:color-mix(in lab,red,red)){.hover\:to-scratch\/10:hover{--tw-gradient-to:color-mix(in oklab,var(--color-scratch)10%,transparent)}}.hover\:to-scratch\/10:hover{--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.hover\:text-main:hover{color:var(--color-main)}.hover\:text-white:hover{color:var(--color-white)}.hover\:underline:hover{text-decoration-line:underline}.hover\:ring-2:hover{--tw-ring-shadow:var(--tw-ring-inset,)0 0 0 calc(2px + var(--tw-ring-offset-width))var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.hover\:ring-white\/20:hover{--tw-ring-color:#fff3}@supports (color:color-mix(in lab,red,red)){.hover\:ring-white\/20:hover{--tw-ring-color:color-mix(in oklab,var(--color-white)20%,transparent)}}}.focus\:border-python:focus{border-color:var(--color-python)}.focus\:border-roblox:focus{border-color:var(--color-roblox)}.focus\:border-scratch:focus{border-color:var(--color-scratch)}.focus\:outline-none:focus{--tw-outline-style:none;outline-style:none}.focus-visible\:ring-2:focus-visible{--tw-ring-shadow:var(--tw-ring-inset,)0 0 0 calc(2px + var(--tw-ring-offset-width))var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.focus-visible\:ring-white\/60:focus-visible{--tw-ring-color:#fff9}@supports (color:color-mix(in lab,red,red)){.focus-visible\:ring-white\/60:focus-visible{--tw-ring-color:color-mix(in oklab,var(--color-white)60%,transparent)}}.active\:scale-95:active{--tw-scale-x:95%;--tw-scale-y:95%;--tw-scale-z:95%;scale:var(--tw-scale-x)var(--tw-scale-y)}@media (min-width:40rem){.sm\:-right-1{right:calc(var(--spacing)*-1)}.sm\:-left-2{left:calc(var(--spacing)*-2)}.sm\:order-1{order:1}.sm\:order-2{order:2}.sm\:order-3{order:3}.sm\:mt-8{margin-top:calc(var(--spacing)*8)}.sm\:flex{display:flex}.sm\:inline{display:inline}.sm\:h-11{height:calc(var(--spacing)*11)}.sm\:h-44{height:calc(var(--spacing)*44)}.sm\:h-56{height:calc(var(--spacing)*56)}.sm\:h-80{height:calc(var(--spacing)*80)}.sm\:w-16{width:calc(var(--spacing)*16)}.sm\:w-44{width:calc(var(--spacing)*44)}.sm\:w-56{width:calc(var(--spacing)*56)}.sm\:w-80{width:calc(var(--spacing)*80)}.sm\:w-auto{width:auto}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.sm\:flex-row{flex-direction:row}.sm\:gap-6{gap:calc(var(--spacing)*6)}.sm\:gap-8{gap:calc(var(--spacing)*8)}.sm\:p-4{padding:calc(var(--spacing)*4)}.sm\:p-6{padding:calc(var(--spacing)*6)}.sm\:p-8{padding:calc(var(--spacing)*8)}.sm\:p-12{padding:calc(var(--spacing)*12)}.sm\:px-6{padding-inline:calc(var(--spacing)*6)}.sm\:px-8{padding-inline:calc(var(--spacing)*8)}.sm\:py-10{padding-block:calc(var(--spacing)*10)}.sm\:py-16{padding-block:calc(var(--spacing)*16)}.sm\:text-4xl{font-size:var(--text-4xl);line-height:var(--tw-leading,var(--text-4xl--line-height))}.sm\:text-5xl{font-size:var(--text-5xl);line-height:var(--tw-leading,var(--text-5xl--line-height))}.sm\:text-base{font-size:var(--text-base);line-height:var(--tw-leading,var(--text-base--line-height))}.sm\:text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.sm\:text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.sm\:text-xl{font-size:var(--text-xl);line-height:var(--tw-leading,var(--text-xl--line-height))}.sm\:text-\[26px\]{font-size:26px}}@media (min-width:48rem){.md\:col-span-3{grid-column:span 3/span 3}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}:where(.md\:space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}.md\:gap-x-12{-moz-column-gap:calc(var(--spacing)*12);column-gap:calc(var(--spacing)*12)}.md\:gap-y-12{row-gap:calc(var(--spacing)*12)}.md\:pt-16{padding-top:calc(var(--spacing)*16)}.md\:pb-28{padding-bottom:calc(var(--spacing)*28)}.md\:pl-6{padding-left:calc(var(--spacing)*6)}}@media (min-width:64rem){.lg\:order-1{order:1}.lg\:order-2{order:2}.lg\:col-span-4{grid-column:span 4/span 4}.lg\:col-span-5{grid-column:span 5/span 5}.lg\:col-span-7{grid-column:span 7/span 7}.lg\:col-span-8{grid-column:span 8/span 8}.lg\:mx-0{margin-inline:calc(var(--spacing)*0)}.lg\:flex{display:flex}.lg\:w-auto{width:auto}.lg\:-translate-y-3{--tw-translate-y:calc(var(--spacing)*-3);translate:var(--tw-translate-x)var(--tw-translate-y)}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.lg\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:items-center{align-items:center}.lg\:justify-start{justify-content:flex-start}.lg\:gap-8{gap:calc(var(--spacing)*8)}.lg\:p-16{padding:calc(var(--spacing)*16)}.lg\:px-8{padding-inline:calc(var(--spacing)*8)}.lg\:px-10{padding-inline:calc(var(--spacing)*10)}.lg\:text-left{text-align:left}.lg\:text-5xl{font-size:var(--text-5xl);line-height:var(--tw-leading,var(--text-5xl--line-height))}.lg\:text-6xl{font-size:var(--text-6xl);line-height:var(--tw-leading,var(--text-6xl--line-height))}.lg\:text-base{font-size:var(--text-base);line-height:var(--tw-leading,var(--text-base--line-height))}.lg\:text-xl{font-size:var(--text-xl);line-height:var(--tw-leading,var(--text-xl--line-height))}.lg\:text-\[30px\]{font-size:30px}}@media (min-width:80rem){.xl\:gap-x-16{-moz-column-gap:calc(var(--spacing)*16);column-gap:calc(var(--spacing)*16)}}}@font-face{font-family:Fredoka;src:url(/assets/custom/holiday_bootcamp/fonts/fredoka-latin-500-normal.woff2)format("woff2");font-weight:500;font-style:normal;font-display:swap}@font-face{font-family:Fredoka;src:url(/assets/custom/holiday_bootcamp/fonts/fredoka-latin-600-normal.woff2)format("woff2");font-weight:600;font-style:normal;font-display:swap}@font-face{font-family:Fredoka;src:url(/assets/custom/holiday_bootcamp/fonts/fredoka-latin-700-normal.woff2)format("woff2");font-weight:700;font-style:normal;font-display:swap}@font-face{font-family:Poppins;src:url(/assets/custom/holiday_bootcamp/fonts/poppins-latin-400-normal.woff2)format("woff2");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:Poppins;src:url(/assets/custom/holiday_bootcamp/fonts/poppins-latin-500-normal.woff2)format("woff2");font-weight:500;font-style:normal;font-display:swap}@font-face{font-family:Poppins;src:url(/assets/custom/holiday_bootcamp/fonts/poppins-latin-600-normal.woff2)format("woff2");font-weight:600;font-style:normal;font-display:swap}@font-face{font-family:Poppins;src:url(/assets/custom/holiday_bootcamp/fonts/poppins-latin-700-normal.woff2)format("woff2");font-weight:700;font-style:normal;font-display:swap}body{color:#1e293b;-webkit-font-smoothing:antialiased;background-color:#fbf4ee;background-image:linear-gradient(#cdbeaf33 1.5px,#0000 1.5px),linear-gradient(90deg,#cdbeaf33 1.5px,#0000 1.5px);background-size:26px 26px;font-family:Poppins,sans-serif;overflow-x:hidden}h1,h2,h3,h4,.font-heading{font-family:Fredoka,cursive,sans-serif}.clay-card{background:#fff;border-radius:28px;transition:all .25s cubic-bezier(.34,1.56,.64,1);box-shadow:0 16px 32px -8px #0000000f,inset 0 3px 6px #fffffff2,inset 0 -3px 6px #00000008}.clay-card:hover{transform:translateY(-4px);box-shadow:0 22px 36px -8px #00000017,inset 0 3px 6px #fffffff2,inset 0 -3px 6px #00000008}.clay-pill{box-shadow:0 4px 10px #0000000d,inset 0 2px 4px #fffc,inset 0 -2px 4px #0000000a}.btn-3d{-webkit-user-select:none;-moz-user-select:none;user-select:none;transition:transform .1s,box-shadow .1s}.btn-3d:active{transform:translateY(4px)}.btn-main{color:#fff;background-color:#00af91;box-shadow:0 5px #008a72}.btn-main:active{box-shadow:0 1px #008a72}.btn-scratch{color:#fff;background-color:#fb4f27;box-shadow:0 5px #cf3a17}.btn-scratch:active{box-shadow:0 1px #cf3a17}.btn-roblox{color:#1e293b;background-color:#ffbd01;box-shadow:0 5px #d99f00}.btn-roblox:active{box-shadow:0 1px #d99f00}.btn-python{color:#fff;background-color:#2d6dd8;box-shadow:0 5px #1f4fb0}.btn-python:active{box-shadow:0 1px #1f4fb0}.btn-white{color:#1e293b;background-color:#fff;border:2px solid #e2e8f0;box-shadow:0 5px #cbd5e1}.btn-white:active{box-shadow:0 1px #cbd5e1}@keyframes gentle-bounce{0%,to{transform:translateY(0)}50%{transform:translateY(-8px)}}.animate-float{animation:3.5s ease-in-out infinite gentle-bounce}.animate-float-delayed{animation:4s ease-in-out 1.5s infinite gentle-bounce}svg[width="1em"][height="1em"]{vertical-align:-.125em;display:inline-block}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-scale-x{syntax:"*";inherits:false;initial-value:1}@property --tw-scale-y{syntax:"*";inherits:false;initial-value:1}@property --tw-scale-z{syntax:"*";inherits:false;initial-value:1}@property --tw-space-y-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-gradient-position{syntax:"*";inherits:false}@property --tw-gradient-from{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-via{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-to{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-stops{syntax:"*";inherits:false}@property --tw-gradient-via-stops{syntax:"*";inherits:false}@property --tw-gradient-from-position{syntax:"<length-percentage>";inherits:false;initial-value:0%}@property --tw-gradient-via-position{syntax:"<length-percentage>";inherits:false;initial-value:50%}@property --tw-gradient-to-position{syntax:"<length-percentage>";inherits:false;initial-value:100%}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-tracking{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}@property --tw-backdrop-blur{syntax:"*";inherits:false}@property --tw-backdrop-brightness{syntax:"*";inherits:false}@property --tw-backdrop-contrast{syntax:"*";inherits:false}@property --tw-backdrop-grayscale{syntax:"*";inherits:false}@property --tw-backdrop-hue-rotate{syntax:"*";inherits:false}@property --tw-backdrop-invert{syntax:"*";inherits:false}@property --tw-backdrop-opacity{syntax:"*";inherits:false}@property --tw-backdrop-saturate{syntax:"*";inherits:false}@property --tw-backdrop-sepia{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-ease{syntax:"*";inherits:false}

        @endverbatim
    </style>
</head>
<body class="bg-canvas text-ink antialiased">

    {{-- SVG sprite: 24 ikon statis, pengganti Iconify CDN --}}
    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="position:absolute;width:0;height:0;overflow:hidden">
        <symbol id="i-lucide-check-circle-2" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m16 9l-5.5 5.5L8 12"/></g></symbol>
        <symbol id="i-lucide-video" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16 13l5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect width="14" height="12" x="2" y="6" rx="2"/></g></symbol>
        <symbol id="i-lucide-chevron-down" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9l6 6l6-6"/></symbol>
        <symbol id="i-lucide-check-circle" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11l3 3L22 4"/></g></symbol>
        <symbol id="i-lucide-trophy" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M10 14.66V17a1 1 0 0 1-1 1a2 2 0 0 0-2 2v2m7-7.34V17a1 1 0 0 0 1 1a2 2 0 0 1 2 2v2m.916-12H19.5A2.5 2.5 0 0 0 22 7.5V5a1 1 0 0 0-1-1h-3M4 22h16"/><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"/><path d="M6.084 10H4.5A2.5 2.5 0 0 1 2 7.5V5a1 1 0 0 1 1-1h3"/></g></symbol>
        <symbol id="i-lucide-external-link" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h6v6m-11 5L21 3m-3 10v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></symbol>
        <symbol id="i-logos-whatsapp-icon" viewBox="0 0 256 258"><defs><linearGradient id="SVGK3KZq49U" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/></linearGradient><linearGradient id="SVGefMkoEOd" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#SVGK3KZq49U)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#SVGefMkoEOd)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></symbol>
        <symbol id="i-lucide-calendar-days" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M8 2v3m8-3v3"/><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M8 13h.01M12 13h.01M16 13h.01M8 17h.01M12 17h.01M16 17h.01"/></g></symbol>
        <symbol id="i-lucide-award" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m15.477 12.89l1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></g></symbol>
        <symbol id="i-lucide-sparkles" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594zM20 2v4m2-2h-4"/><circle cx="4" cy="20" r="2"/></g></symbol>
        <symbol id="i-lucide-gift" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 7v14m8-10v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8m3.5-4a1 1 0 0 1 0-5A4.8 8 0 0 1 12 7a4.8 8 0 0 1 4.5-5a1 1 0 0 1 0 5"/><rect width="18" height="4" x="3" y="7" rx="1"/></g></symbol>
        <symbol id="i-lucide-medal" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7.21 15L2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15M11 12L5.12 2.2M13 12l5.88-9.8M8 7h8"/><circle cx="12" cy="17" r="5"/><path d="M12 18v-2h-.5"/></g></symbol>
        <symbol id="i-lucide-calendar" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M8 2v3m8-3v3"/><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/></g></symbol>
        <symbol id="i-lucide-arrow-right" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"/></symbol>
        <symbol id="i-lucide-ticket" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Zm11-4v2m0 10v2m0-8v2"/></symbol>
        <symbol id="i-lucide-smile" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2s4-2 4-2M9 9h.01M15 9h.01"/></g></symbol>
        <symbol id="i-lucide-rocket" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09"/><path d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05"/></g></symbol>
        <symbol id="i-lucide-info" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4m0-4h.01"/></g></symbol>
        <symbol id="i-lucide-flame" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3q1 4 4 6.5t3 5.5a1 1 0 0 1-14 0a5 5 0 0 1 1-3a1 1 0 0 0 5 0c0-2-1.5-3-1.5-5q0-2 2.5-4"/></symbol>
        <symbol id="i-lucide-users" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M16 3.128a4 4 0 0 1 0 7.744M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></g></symbol>
        <symbol id="i-lucide-clock" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></g></symbol>
        <symbol id="i-lucide-book-open" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v16m8.001-2A2 2 0 0 0 22 17V5a2 2 0 0 0-1.999-2L16 3.002A5 5 0 0 0 12 5a5 5 0 0 0-4-2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 1.999 2H8a5 5 0 0 1 4 2a5 5 0 0 1 4-2z"/></symbol>
        <symbol id="i-lucide-heart-handshake" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.414 14.414C21 12.828 22 11.5 22 9.5a5.5 5.5 0 0 0-9.591-3.676a.6.6 0 0 1-.818.001A5.5 5.5 0 0 0 2 9.5c0 2.3 1.5 4 3 5.5l5.535 5.362a2 2 0 0 0 2.879.052a2.12 2.12 0 0 0-.004-3a2.124 2.124 0 1 0 3-3a2.124 2.124 0 0 0 3.004 0a2 2 0 0 0 0-2.828l-1.881-1.882a2.41 2.41 0 0 0-3.409 0l-1.71 1.71a2 2 0 0 1-2.828 0a2 2 0 0 1 0-2.828l2.823-2.762"/></symbol>
        <symbol id="i-lucide-film" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 3v18M3 7.5h4M3 12h18M3 16.5h4M17 3v18m0-13.5h4m-4 9h4"/></g></symbol>
    </svg>


    <!-- ==================== STICKY NAVIGATION ==================== -->
    <header class="sticky top-0 z-50 bg-[#FBF4EE]/90 backdrop-blur-md border-b-2 border-[#E2E8F0] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('assets/nav-logo-new.webp') }}" alt="Alhazen Academy" class="h-10 sm:h-11 w-auto" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/logo%20update.png'">
            </a>

            <!-- Anchor Nav -->
            <nav class="hidden lg:flex items-center gap-8 font-semibold text-muted text-sm lg:text-base">
                <a href="#tentang" class="hover:text-main transition-colors">Tentang Program</a>
                <a href="#kurikulum" class="hover:text-main transition-colors">Kurikulum 8 Hari</a>
                <a href="#jalur" class="hover:text-main transition-colors">Pilihan Kelas</a>
                <a href="#Mentor" class="hover:text-main transition-colors">Mentor</a>
                <a href="#faq" class="hover:text-main transition-colors">FAQ</a>
            </nav>

            <!-- Quick Action CTA -->
            <div class="flex items-center gap-3">
                <a href="#jalur" class="btn-3d btn-main px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2">
                    <svg width="1em" height="1em" aria-hidden="true" class="text-base"><use href="#i-lucide-sparkles"></use></svg>
                    <span>Pilih Kelas</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative pt-10 pb-20 md:pt-16 md:pb-28 overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">

                <!-- Left Column: Copywriting & CTA -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">

                    <!-- Campaign Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/20 border-2 border-accent text-ink font-bold text-xs sm:text-sm clay-pill">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-base"><use href="#i-lucide-rocket"></use></svg>
                        <span>#HolidayCodingClassProgram 2026</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-ink leading-[1.15] tracking-tight">
                        Liburan Tetap <span class="text-main underline decoration-accent decoration-wavy decoration-2">Produktif</span>, Berkarya & <span class="text-scratch">Raih Hadiah!</span>
                    </h1>

                    <!-- Persuasive Subtitle -->
                    <p class="text-base sm:text-lg lg:text-xl text-muted font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Liburan produktif dengan pengalaman belajar teknologi yang seru! Selama 8 hari, anak mengeksplorasi kreasi dunia 3D, animasi digital, dan pemrograman Python bersama mentor yang ramah anak.
                    </p>

                    <!-- Key Event Pills -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 pt-2">
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-main text-lg"><use href="#i-lucide-calendar"></use></svg>
                            <span>21 Des 2026 – 7 Jan 2027</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg"><use href="#i-lucide-video"></use></svg>
                            <span>Live Online via Zoom</span>
                        </div>
                        <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-2xl border-2 border-[#E2E8F0] shadow-sm text-xs sm:text-sm font-semibold">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-accent text-lg"><use href="#i-lucide-award"></use></svg>
                            <span>Hadiah Menarik Untuk 3 Karya Terbaik</span>
                        </div>
                    </div>

                    <!-- Call To Action Group -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#jalur" class="btn-3d btn-main px-8 py-4 rounded-2xl font-bold text-lg flex items-center justify-center gap-3 w-full sm:w-auto">
                            <span>Daftar Kelas Sekarang</span>
                            <svg width="1em" height="1em" aria-hidden="true" class="text-xl"><use href="#i-lucide-arrow-right"></use></svg>
                        </a>
                        <a href="{{ $waUrl }}" target="_blank" class="btn-3d btn-white px-7 py-4 rounded-2xl font-bold text-base flex items-center justify-center gap-2.5 w-full sm:w-auto text-ink">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-xl"><use href="#i-logos-whatsapp-icon"></use></svg>
                            <span>Konsultasi WhatsApp</span>
                        </a>
                    </div>

                    <!-- Mini Trust Factor -->
                    <div class="pt-2 flex items-center justify-center lg:justify-start gap-3 text-xs sm:text-sm text-muted">
                        <span class="flex text-accent text-sm">★★★★★</span>
                        <span class="font-medium">100% Ramah Pemula & Bebas Pengalaman Coding</span>
                    </div>

                </div>

                <!-- Right Column: Visual Hero with Floating Badges -->
                <div class="lg:col-span-5 relative flex justify-center">

                    <!-- Decorative Mascot/Kids Image Container -->
                    <div class="relative w-full max-w-md">
                        <!-- Backdrop Clay Frame -->
                        <div class="clay-card border-4 border-white p-3 sm:p-4 bg-white relative z-10 overflow-hidden">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/poster.webp') }}" alt="Alhazen Holiday Bootcamp 2026" width="1080" height="1080" fetchpriority="high" decoding="async" class="w-full h-auto rounded-2xl object-cover" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/alhazenacademy/33sfTJUPfIuh4sR3iQGXI'">
                        </div>

                        <!-- Floating Badge 1: Controller (Left Top) -->
                        <div class="absolute -top-6 -left-6 z-20 hidden sm:flex items-center gap-2 bg-white px-4 py-2.5 rounded-2xl border-2 border-scratch shadow-lg clay-pill animate-float">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/controller.webp') }}" alt="Controller" width="128" height="128" loading="lazy" decoding="async" class="w-8 h-8 object-contain">
                            <div class="text-left">
                                <p class="text-[10px] text-muted font-bold uppercase tracking-wider">Hasil Karya</p>
                                <p class="text-xs font-heading font-bold text-scratch">Karya Digital Sendiri!</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2: Prize Money (Bottom Right) -->
                        <div class="absolute -bottom-6 -right-6 z-20 flex items-center gap-2.5 bg-white px-4 py-3 rounded-2xl border-2 border-accent shadow-xl clay-pill animate-float-delayed">
                            <img src="{{ asset('assets/custom/holiday_bootcamp/money.webp') }}" alt="Hadiah" width="160" height="160" loading="lazy" decoding="async" class="w-10 h-10 object-contain">
                            <div class="text-left">
                                <span class="bg-accent/30 text-ink text-[10px] font-bold px-2 py-0.5 rounded-full">Showcase Day</span>
                                <p class="text-xs sm:text-sm font-heading font-bold text-ink">Hadiah Uang Tunai, Voucher kelas, E-sertifikat</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== 4 METRIC HIGHLIGHT PILLS ==================== -->
    <section class="py-6 relative z-20 -mt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                <div class="clay-card p-5 border-2 border-emerald-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-main/15 text-main flex items-center justify-center shrink-0">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl"><use href="#i-lucide-clock"></use></svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">8 Hari Belajar</h4>
                        <p class="text-xs text-muted">Intensif & terarah</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-sky-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-python/15 text-python flex items-center justify-center shrink-0">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl"><use href="#i-lucide-video"></use></svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Online Via Zoom</h4>
                        <p class="text-xs text-muted">Belajar dari rumah</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-amber-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-accent/20 text-ink flex items-center justify-center shrink-0">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl text-accent-dark"><use href="#i-lucide-users"></use></svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Grup Interaktif</h4>
                        <p class="text-xs text-muted">Teman baru & kolaboratif</p>
                    </div>
                </div>

                <div class="clay-card p-5 border-2 border-orange-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-scratch/15 text-scratch flex items-center justify-center shrink-0">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl"><use href="#i-lucide-trophy"></use></svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-ink">Karya Nyata</h4>
                        <p class="text-xs text-muted">Portofolio & reward</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== TENTANG PROGRAM ==================== -->
    <section id="tentang" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card p-8 sm:p-12 lg:p-16 border-2 border-white bg-gradient-to-br from-white to-[#FAF6F0]">
                <div class="grid lg:grid-cols-12 gap-12 items-center">

                    <!-- Left: Illustration Characters -->
                    <div class="lg:col-span-5 relative flex justify-center order-2 lg:order-1">
                        <div class="relative">
                            <div class="w-64 h-64 sm:w-80 sm:h-80 bg-accent/20 rounded-full blur-2xl absolute inset-0 m-auto"></div>
                            <img src="{{ asset('assets/custom/holiday_bootcamp/girl.webp') }}" alt="Siswa Alhazen" width="640" height="640" loading="lazy" decoding="async" class="relative z-10 w-64 sm:w-80 h-auto object-contain drop-shadow-md">
                        </div>
                    </div>

                    <!-- Right: Narrative & Features -->
                    <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-main/15 text-main text-xs sm:text-sm font-bold clay-pill">
                            <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-check-circle-2"></use></svg>
                            <span>Bukan Sekadar Main Gadget</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink leading-tight">
                            Apa itu Alhazen Holiday Bootcamp?
                        </h2>

                        <p class="text-muted text-base sm:text-lg leading-relaxed">
                            <strong>Alhazen Holiday Bootcamp</strong> adalah program liburan sekolah intensif berbasis <em>Project-Based Learning</em> yang dirancang untuk anak jenjang SD hingga SMA agar dapat mengembangkan kreativitas, logika, dan keterampilan teknologi digital melalui pengalaman belajar yang menyenangkan.
                        </p>

                        <p class="text-muted text-base sm:text-lg leading-relaxed">
                            Selama 8 hari pertemuan terstruktur, anak akan didampingi mentor berpengalaman untuk merancang kreasi dunia 3D dengan Roblox Studio, membuat animasi interaktif dengan Scratch, hingga mengolah dan memvisualisasikan data menggunakan Python.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-4 pt-2">
                            <div class="flex items-start gap-3">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-2xl shrink-0 mt-0.5"><use href="#i-lucide-check-circle"></use></svg>
                                <span class="text-sm font-semibold text-ink">Bimbingan intensif 1-on-1 debugging clinic</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-2xl shrink-0 mt-0.5"><use href="#i-lucide-check-circle"></use></svg>
                                <span class="text-sm font-semibold text-ink">Showcase Day melatih kepercayaan diri anak</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-2xl shrink-0 mt-0.5"><use href="#i-lucide-check-circle"></use></svg>
                                <span class="text-sm font-semibold text-ink">Portofolio karya nyata siap dipamerkan</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-2xl shrink-0 mt-0.5"><use href="#i-lucide-check-circle"></use></svg>
                                <span class="text-sm font-semibold text-ink">Mentor sabar & ramah anak terverifikasi</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KURIKULUM 8 HARI (ROADMAP) ==================== -->
    <section id="kurikulum" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                    Roadmap Belajar Terarah
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Detail Program & Jadwal 8 Hari
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Kurikulum bertahap 2 pekan agar anak paham dasar logika sebelum merancang karya mandirinya.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Stage 1 Card -->
                <div class="clay-card p-8 border-2 border-main/30 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-main text-white font-heading font-bold text-sm rounded-2xl shadow-sm">
                            Pekan 1 (Hari 1–4)
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-main bg-main/10 px-3 py-1 rounded-full">
                            Guided Mastery
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold font-heading text-ink mb-4">Fondasi Konsep & Prototype</h3>
                    <p class="text-muted text-sm sm:text-base leading-relaxed mb-6">
                        Siswa mempelajari dasar-dasar logika pemrograman dan mengenal antarmuka software melalui studi kasus dan latihan praktik yang terarah bersama mentor.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">1</span>
                            <span>Pengenalan software & pemahaman antarmuka</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">2</span>
                            <span>Pemahaman alur logika komputasi bertahap</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">3</span>
                            <span>Praktik coding terbimbing bareng mentor</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-main flex items-center justify-center shrink-0 text-xs font-bold">4</span>
                            <span>Penyelesaian purwarupa (prototype) Karya pertama</span>
                        </li>
                    </ul>
                </div>

                <!-- Stage 2 Card -->
                <div class="clay-card p-8 border-2 border-accent/60 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-accent text-ink font-heading font-bold text-sm rounded-2xl shadow-sm">
                            Pekan 2 (Hari 5–8)
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full">
                            Personal Project Incubator
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold font-heading text-ink mb-4">Karya Mandiri & Showcase Day</h3>
                    <p class="text-muted text-sm sm:text-base leading-relaxed mb-6">
                        Siswa mengembangkan karya digital berdasarkan ide dan kreativitas masing-masing, menyempurnakan fitur bersama mentor, lalu mempresentasikan hasil karyanya pada hari terakhir.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">5</span>
                            <span>Mengembangkan ide karya dan memilih aset yang sesuai</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">6</span>
                            <span>Membuat kode dan fitur sesuai kreativitas siswa</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">7</span>
                            <span>Memperbaiki dan menyempurnakan karya bersama mentor</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-ink font-medium">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-900 flex items-center justify-center shrink-0 text-xs font-bold">8</span>
                            <span><strong>Showcase Day</strong>: Presentasi hasil karya dan pengumuman pemenang</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== BENEFIT PESERTA (6 CLAY CARDS) ==================== -->
    <section class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-main/15 text-xs font-bold text-main uppercase tracking-wider clay-pill">
                    Fasilitas Lengkap
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Apa Saja yang Didapatkan Anak?
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Investasi liburan dengan fasilitas belajar komprehensif dari awal hingga akhir.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- 1. Live Zoom — main -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-main/80 hover:bg-gradient-to-br hover:from-white hover:to-main/10">
                    <div class="w-14 h-14 rounded-2xl bg-main/15 text-main flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-video"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Live Zoom Interaktif</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Kelas online tatap muka kelompok interaktif yang dibimbing oleh Mentor ramah anak dan sabar.
                    </p>
                </div>

                <!-- 2. Rekaman — python -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-python/80 hover:bg-gradient-to-br hover:from-white hover:to-python/10">
                    <div class="w-14 h-14 rounded-2xl bg-python/15 text-python flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-film"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Rekaman Kelas Lengkap</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Seluruh sesi direkam dan dapat ditonton kembali jika anak ingin mengulang langkah praktek di rumah.
                    </p>
                </div>

                <!-- 3. Modul — accent -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-accent/80 hover:bg-gradient-to-br hover:from-white hover:to-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/20 text-amber-800 flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-book-open"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Akses Modul Belajar</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Modul panduan langkah-demi-langkah yang mudah dipahami anak pemula untuk materi coding.
                    </p>
                </div>

                <!-- 4. Sertifikat — purple -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-purple-500/80 hover:bg-gradient-to-br hover:from-white hover:to-purple-50">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-award"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">E-Sertifikat</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Sertifikat resmi dari Alhazen Academy sebagai bukti portofolio pencapaian keterampilan anak.
                    </p>
                </div>

                <!-- 5. Voucher — scratch -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-scratch/80 hover:bg-gradient-to-br hover:from-white hover:to-scratch/10">
                    <div class="w-14 h-14 rounded-2xl bg-scratch/15 text-scratch flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-ticket"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Voucher 20% Private Class</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Voucher diskon khusus untuk melanjutkan belajar coding secara intensif di Private Class Alhazen.
                    </p>
                </div>

                <!-- 6. Hadiah Uang Tunai — accent (disamakan gaya tinted dgn kartu lain) -->
                <div class="clay-card p-6 border-2 border-[#E2E8F0] hover:border-accent/80 hover:bg-gradient-to-br hover:from-white hover:to-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/20 text-amber-800 flex items-center justify-center mb-5 text-2xl">
                        <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-gift"></use></svg>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2">Hadiah Uang Tunai!</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Di akhir bootcamp diadakan <strong>Lomba Adu Karya</strong>. 3 karya terbaik berhak mendapatkan hadiah uang tunai!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== LOMBA AKHIR & HADIAH UANG TUNAI ==================== -->
    <section id="lomba" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card border-2 border-accent/40 bg-white p-8 sm:p-12 relative overflow-hidden">

                <div class="text-center max-w-3xl mx-auto mb-10 space-y-4 relative z-10">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                        Puncak Acara: Lomba Adu Karya
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink leading-tight">
                        Tampilkan <span class="text-main">Karyamu</span>, Raih <span class="text-scratch">Hadiahnya</span>!
                    </h2>
                    <p class="text-muted text-base sm:text-lg">
                        Di akhir program, siswa berkesempatan mempresentasikan hasil karyanya dalam <strong>Showcase Day</strong>. Karya terbaik berkesempatan meraih hadiah <strong>uang tunai dan voucher kelas</strong>, sementara seluruh peserta mendapatkan e-sertifikat serta voucher spesial.
                    </p>
                </div>

                <!-- Hadiah Pemenang -->
                <div class="text-center mb-8 relative z-10">
                    <h3 class="inline-flex items-center gap-2 font-heading font-bold text-lg sm:text-xl text-ink uppercase tracking-wide">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-amber-500 text-xl"><use href="#i-lucide-trophy"></use></svg>
                        Hadiah Pemenang
                    </h3>
                </div>

                <div class="grid sm:grid-cols-3 gap-6 max-w-4xl mx-auto relative z-10 items-start">
                    <!-- Juara 1 (featured, tengah) -->
                    <div class="clay-card bg-white border-4 border-accent p-6 text-center relative shadow-xl sm:order-2">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-ink text-xs font-heading font-bold px-4 py-1 rounded-full border-2 border-white shadow clay-pill whitespace-nowrap">Juara 1</div>
                        <div class="text-5xl mb-3 mt-5 text-amber-500"><svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-trophy"></use></svg></div>
                        <p class="font-heading font-extrabold text-3xl sm:text-4xl text-main">Rp200.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                    <!-- Juara 2 -->
                    <div class="clay-card bg-white border-2 border-[#E2E8F0] p-6 text-center sm:order-1 sm:mt-8">
                        <div class="text-4xl mb-2 text-slate-400"><svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-medal"></use></svg></div>
                        <h4 class="font-heading font-bold text-lg text-ink mb-1">Juara 2</h4>
                        <p class="font-heading font-extrabold text-3xl text-main">Rp150.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                    <!-- Juara 3 -->
                    <div class="clay-card bg-white border-2 border-[#E2E8F0] p-6 text-center sm:order-3 sm:mt-8">
                        <div class="text-4xl mb-2 text-orange-500"><svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-medal"></use></svg></div>
                        <h4 class="font-heading font-bold text-lg text-ink mb-1">Juara 3</h4>
                        <p class="font-heading font-extrabold text-3xl text-main">Rp100.000</p>
                        <p class="text-muted text-xs mt-1">Uang Tunai</p>
                        <div class="h-px bg-[#E2E8F0] my-4"></div>
                        <ul class="space-y-2 text-sm text-left text-ink">
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>50%</strong> kelas Coding Private</span></li>
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher <strong>30%</strong> After School Program (ASP) Group</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Hadiah untuk Seluruh Peserta -->
                <div class="mt-10 max-w-4xl mx-auto relative z-10">
                    <div class="clay-card bg-main/5 border-2 border-main/30 p-6 sm:p-8">
                        <h3 class="font-heading font-bold text-lg sm:text-xl text-ink mb-4 flex items-center gap-2">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-main text-xl"><use href="#i-lucide-gift"></use></svg>
                            Hadiah untuk Seluruh Peserta
                        </h3>
                        <ul class="grid sm:grid-cols-2 gap-3 text-sm text-ink">
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>E-sertifikat keikutsertaan</span></li>
                            <li class="flex items-start gap-2"><svg width="1em" height="1em" aria-hidden="true" class="text-main mt-0.5 shrink-0"><use href="#i-lucide-check-circle-2"></use></svg><span>Voucher diskon <strong>20%</strong> kelas Coding Private dan ASP Group bagi peserta di luar Juara 1, 2, dan 3</span></li>
                        </ul>
                        <p class="text-muted text-xs sm:text-sm mt-5 italic">
                            <strong>Kriteria penilaian:</strong> kreativitas, fungsi program, dan kepercayaan diri saat presentasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PILIHAN JALUR & PRICING ==================== -->
    <section id="jalur" class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent text-xs font-bold text-ink uppercase tracking-wider clay-pill">
                    3 Pilihan Jalur Kelas
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Pilih Kelas Sesuai Usia & Minat Anak
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Tersedia 3 jalur coding interaktif. Klik daftar untuk reservasi langsung via GoAkal.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 items-stretch pt-4">

                <!-- Track 1: Scratch -->
                <div class="clay-card p-8 border-2 border-scratch/50 flex flex-col justify-between relative hover:border-scratch" x-data="{ promoCode: '' }">
                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-orange-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-orange-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/scratch_char.webp') }}" alt="Scratch Character" width="400" height="400" loading="lazy" decoding="async" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/7/77/Scratch_logo.svg'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-scratch text-white text-xs font-bold clay-pill">
                                SD / Pemula
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">Coding &amp; Animation <br> with Scratch</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Susun blok visual, ciptakan karya interaktif, animasi seru, dan rilis portofolio digital pertamamu! Cocok untuk anak yang baru pertama kali mengenal coding.
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-orange-50/60 rounded-2xl border border-orange-100 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp499.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-scratch text-white text-[10px] font-bold">HEMAT 70%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-scratch">Rp149.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-scratch text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Promo Code Input -->
                    <div class="mb-4 space-y-2">
                        <p class="text-xs text-muted italic">
                            Masukkan kode promo untuk mendapatkan harga spesial
                        </p>
                        <input
                            type="text"
                            x-model="promoCode"
                            placeholder="Kode Promo (opsional)"
                            class="w-full px-4 py-2.5 rounded-xl border-2 border-[#E2E8F0] focus:border-scratch focus:outline-none text-sm transition-colors"
                        />
                    </div>

                    <a :href="'https://goakal.com/alhazenacademy/holiday-bootcamp-2026/8r9fa/apply?promo=' + (promoCode || '{{$promo}}')" target="_blank" class="btn-3d btn-scratch py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Scratch</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-lg"><use href="#i-lucide-external-link"></use></svg>
                    </a>
                </div>

                <!-- Track 2: Roblox (Featured / Paling Populer) -->
                <div class="clay-card p-8 border-4 border-roblox flex flex-col justify-between relative shadow-xl lg:-translate-y-3 bg-gradient-to-b from-white to-amber-50/40" x-data="{ promoCode: '' }">

                    <!-- Sticker Floating Badge -->
                    <div class="absolute -top-4 -right-2 bg-roblox text-ink font-heading font-bold text-xs sm:text-sm px-4 py-1.5 rounded-full border-2 border-white shadow-md rotate-3 clay-pill inline-flex items-center gap-1.5">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-scratch"><use href="#i-lucide-flame"></use></svg> PALING DIMINATI
                    </div>

                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-amber-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-amber-50 to-amber-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/roblox_char.webp') }}" alt="Roblox Character" width="400" height="400" loading="lazy" decoding="async" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://cdn.iconscout.com/icon/free/png-256/free-roblox-logo-icon-download-in-svg-png-gif-file-formats--social-media-pack-logos-icons-4325251.png'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-roblox text-ink text-xs font-bold clay-pill">
                                SD Lanjutan – SMP
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">3D Creation <br> with Roblox Studio</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Desain map 3D, buat rintangan tantangan seru, dan ciptakan petualangan Roblox Studio yang bisa dimainkan online bersama teman-teman!
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-amber-100/70 rounded-2xl border border-amber-200 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp699.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-roblox text-ink text-[10px] font-bold">HEMAT 72%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-ink">Rp199.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Praktik Roblox Studio 3D</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink font-medium">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-amber-600 text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Promo Code Input -->
                    <div class="mb-4 space-y-2">
                        <p class="text-xs text-muted italic">
                            Masukkan kode promo untuk mendapatkan harga spesial
                        </p>
                        <input
                            type="text"
                            x-model="promoCode"
                            placeholder="Kode Promo (opsional)"
                            class="w-full px-4 py-2.5 rounded-xl border-2 border-[#E2E8F0] focus:border-roblox focus:outline-none text-sm transition-colors"
                        />
                    </div>

                    <a :href="'https://goakal.com/alhazenacademy/holiday-bootcamp-2026/1lze1/apply?promo=' + (promoCode || '{{$promo}}')" target="_blank" class="btn-3d btn-roblox py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Roblox</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-lg"><use href="#i-lucide-external-link"></use></svg>
                    </a>
                </div>

                <!-- Track 3: Python -->
                <div class="clay-card p-8 border-2 border-python/50 flex flex-col justify-between relative hover:border-python" x-data="{ promoCode: '' }">
                    <div>
                        <!-- Large Character Illustration -->
                        <div class="flex justify-center mb-5">
                            <div class="relative w-40 h-40 sm:w-44 sm:h-44 rounded-3xl bg-sky-100 flex items-center justify-center overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-sky-50 to-sky-200/60"></div>
                                <img src="{{ asset('assets/custom/holiday_bootcamp/python_char.webp') }}" alt="Python Character" width="400" height="400" loading="lazy" decoding="async" class="relative z-10 w-full h-full object-contain p-2 drop-shadow-md scale-110" onerror="this.onerror=null; this.src='https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg'">
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="flex justify-center mb-4">
                            <span class="px-4 py-1.5 rounded-full bg-python text-white text-xs font-bold clay-pill">
                                SMP – SMA
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold font-heading text-ink mb-2 text-center">Python Programming</h3>
                        <p class="text-muted text-sm leading-relaxed mb-6">
                            Tulis baris kode Python pertamamu, eksplorasi logika data futuristik, dan kuasai fondasi pemrograman modern persiapan era digital!
                        </p>

                        <!-- Price Tag -->
                        <div class="p-4 bg-sky-50/60 rounded-2xl border border-sky-100 mb-6">
                            <p class="text-xs text-muted mb-1">Biaya Investasi Liburan:</p>
                            <div class="flex items-center gap-3 flex-wrap">
                                <p class="text-lg text-muted line-through">Rp499.000</p>
                                <span class="px-2 py-0.5 rounded-full bg-python text-white text-[10px] font-bold">HEMAT 70%</span>
                            </div>
                            <p class="text-3xl font-extrabold font-heading text-python">Rp149.000</p>
                        </div>

                        <!-- Facilities -->
                        <ul class="space-y-3 mb-8 text-sm">
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>8 Hari Kelas Online via Zoom</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Rekaman kelas & modul materi</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Sertifikat resmi Alhazen</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Voucher 20% Private Class</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg shrink-0"><use href="#i-lucide-check-circle-2"></use></svg>
                                <span>Kesempatan hadiah 3 karya terbaik</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Promo Code Input -->
                    <div class="mb-4 space-y-2">
                        <p class="text-xs text-muted italic">
                            Masukkan kode promo untuk mendapatkan harga spesial
                        </p>
                        <input
                            type="text"
                            x-model="promoCode"
                            placeholder="Kode Promo (opsional)"
                            class="w-full px-4 py-2.5 rounded-xl border-2 border-[#E2E8F0] focus:border-python focus:outline-none text-sm transition-colors"
                        />
                    </div>

                    <a :href="'https://goakal.com/alhazenacademy/holiday-bootcamp-2026/dsdpn/apply?promo=' + (promoCode || '{{$promo}}')" target="_blank" class="btn-3d btn-python py-3.5 px-6 rounded-2xl font-bold text-center text-base flex items-center justify-center gap-2">
                        <span>Daftar Kelas Python</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-lg"><use href="#i-lucide-external-link"></use></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== JADWAL BATCH ==================== -->
    <section id="batch" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-main/15 text-xs font-bold text-main uppercase tracking-wider clay-pill">
                    Jadwal Kelas
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Pilih Batch Sesuai Jadwal Liburan
                </h2>
                <p class="text-muted text-base sm:text-lg">
                    Kelas berlangsung 8 hari via Zoom. Tersedia 3 batch — pilih tanggal yang paling pas dengan jadwal liburan anak.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Batch 1 -->
                <div class="clay-card p-7 border-2 border-main/40 flex flex-col relative overflow-hidden hover:border-main transition-colors">
                    <div class="absolute -top-8 -right-8 w-24 h-24 bg-main/10 rounded-full blur-2xl pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-5 relative z-10">
                        <span class="w-12 h-12 rounded-2xl bg-main/15 text-main flex items-center justify-center text-2xl">
                            <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-calendar-days"></use></svg>
                        </span>
                        <span class="px-3 py-1 rounded-full bg-main text-white text-xs font-bold clay-pill">Batch 1</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2 relative z-10">08 – 16 Desember 2026</h3>
                    <p class="text-muted text-sm leading-relaxed relative z-10">
                        Gelombang pertama — mulai lebih awal sebelum puncak liburan sekolah.
                    </p>
                    <div class="mt-5 pt-4 border-t border-[#E2E8F0] flex items-center gap-2 text-xs sm:text-sm text-ink font-semibold relative z-10">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-main text-lg"><use href="#i-lucide-video"></use></svg>
                        <span>8 Hari Kelas Live via Zoom</span>
                    </div>
                </div>

                <!-- Batch 2 -->
                <div class="clay-card p-7 border-2 border-accent/60 flex flex-col relative overflow-hidden hover:border-accent transition-colors">
                    <div class="absolute -top-8 -right-8 w-24 h-24 bg-accent/15 rounded-full blur-2xl pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-5 relative z-10">
                        <span class="w-12 h-12 rounded-2xl bg-accent/20 text-amber-800 flex items-center justify-center text-2xl">
                            <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-calendar-days"></use></svg>
                        </span>
                        <span class="px-3 py-1 rounded-full bg-accent text-ink text-xs font-bold clay-pill">Batch 2</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2 relative z-10">21 – 31 Desember 2026</h3>
                    <p class="text-muted text-sm leading-relaxed relative z-10">
                        Pilihan di tengah liburan — waktu paling fleksibel untuk sebagian besar keluarga.
                    </p>
                    <div class="mt-5 pt-4 border-t border-[#E2E8F0] flex items-center gap-2 text-xs sm:text-sm text-ink font-semibold relative z-10">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-accent text-lg"><use href="#i-lucide-video"></use></svg>
                        <span>8 Hari Kelas Live via Zoom</span>
                    </div>
                </div>

                <!-- Batch 3 -->
                <div class="clay-card p-7 border-2 border-python/40 flex flex-col relative overflow-hidden hover:border-python transition-colors">
                    <div class="absolute -top-8 -right-8 w-24 h-24 bg-python/10 rounded-full blur-2xl pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-5 relative z-10">
                        <span class="w-12 h-12 rounded-2xl bg-python/15 text-python flex items-center justify-center text-2xl">
                            <svg width="1em" height="1em" aria-hidden="true"><use href="#i-lucide-calendar-days"></use></svg>
                        </span>
                        <span class="px-3 py-1 rounded-full bg-python text-white text-xs font-bold clay-pill">Batch 3</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-ink mb-2 relative z-10">28 Desember 2026 – 07 Januari 2027</h3>
                    <p class="text-muted text-sm leading-relaxed relative z-10">
                        Gelombang terakhir — cocok bagi yang ingin menyelesaikan kelas tepat setelah tahun baru.
                    </p>
                    <div class="mt-5 pt-4 border-t border-[#E2E8F0] flex items-center gap-2 text-xs sm:text-sm text-ink font-semibold relative z-10">
                        <svg width="1em" height="1em" aria-hidden="true" class="text-python text-lg"><use href="#i-lucide-video"></use></svg>
                        <span>8 Hari Kelas Live via Zoom</span>
                    </div>
                </div>

            </div>

            <p class="text-center text-muted text-sm mt-8">
                <svg width="1em" height="1em" aria-hidden="true" class="text-main"><use href="#i-lucide-info"></use></svg>
                Pilih batch saat pendaftaran. Kuota tiap batch terbatas per kelas.
            </p>
        </div>
    </section>

    <!-- ==================== Mentor SECTION ==================== -->
    <section id="Mentor" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="clay-card p-8 sm:p-12 border-2 border-white bg-gradient-to-r from-emerald-50/60 to-white">
                <div class="grid lg:grid-cols-12 gap-8 items-center">

                    <div class="lg:col-span-4 flex justify-center">
                        <div class="relative">
                            <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-full border-4 border-white shadow-xl overflow-hidden bg-main/20 flex items-center justify-center">
                                <img src="{{ asset('assets/custom/holiday_bootcamp/boy.webp') }}" alt="Mentor Alhazen" width="448" height="448" loading="lazy" decoding="async" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='https://akalstorageaccount1.blob.core.windows.net/akalcontainer1/alhazenacademy/G4Ja_8JpWPWtkLZTdQ9p0'">
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-main text-white px-3 py-1 rounded-full text-xs font-bold clay-pill">
                                Verified Mentor
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-8 space-y-4 text-center lg:text-left">
                        <span class="inline-block px-3.5 py-1 rounded-full bg-main/15 text-main text-xs font-bold clay-pill">
                            Pendampingan Penuh
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-ink">
                            Dibimbing Langsung oleh Alhazen Elite Mentor
                        </h2>
                        <p class="text-muted text-base leading-relaxed">
                            Mentor kami adalah instruktur profesional yang tidak hanya menguasai coding teknis, tetapi juga dibekali sertifikasi pedagogi ramah anak. Setiap peserta mendapatkan ruang berpendapat, bertanya, dan bereksperimen dengan santai dan menyenangkan.
                        </p>
                        <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2">
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-xl"><use href="#i-lucide-smile"></use></svg>
                                <span>Komunikatif & Sabar</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-xl"><use href="#i-lucide-heart-handshake"></use></svg>
                                <span>1-on-1 Group Debugging Clinic</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm font-semibold text-ink">
                                <svg width="1em" height="1em" aria-hidden="true" class="text-main text-xl"><use href="#i-lucide-sparkles"></use></svg>
                                <span>Apresiasi Setiap Karya</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ ACCORDION ==================== -->
    <section id="faq" class="py-20 relative" x-data="{ openFaq: 1 }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-14 space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-main/15 text-xs font-bold text-main uppercase tracking-wider clay-pill">
                    Tanya Jawab
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-ink">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-muted text-base">
                    Informasi penting seputar pelaksanaan Alhazen Holiday Bootcamp 2026.
                </p>
            </div>

            <div class="space-y-4">

                <!-- FAQ 1 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 1 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 1 ? null : 1)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Apakah anak yang belum pernah coding sama sekali bisa ikut?</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl transition-transform duration-200" :class="openFaq === 1 ? 'rotate-180 text-main' : 'text-muted'"><use href="#i-lucide-chevron-down"></use></svg>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Tentu bisa! Seluruh jalur (terutama Scratch dan Roblox) dirancang mulai dari nol (beginner-friendly). Mentor akan memandu langkah demi langkah dari pengenalan antarmuka hingga anak bisa membuat Karyanya sendiri.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 2 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 2 ? null : 2)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Perangkat apa saja yang perlu disiapkan?</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl transition-transform duration-200" :class="openFaq === 2 ? 'rotate-180 text-main' : 'text-muted'"><use href="#i-lucide-chevron-down"></use></svg>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Peserta membutuhkan Laptop atau Komputer (PC) dengan sistem operasi Windows atau Mac yang terkoneksi internet lancar, webcam, dan aplikasi Zoom. Mouse eksternal sangat disarankan untuk kemudahan navigasi saat membuat proyek.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 3 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 3 ? null : 3)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Bagaimana jika anak berhalangan hadir di salah satu sesi?</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl transition-transform duration-200" :class="openFaq === 3 ? 'rotate-180 text-main' : 'text-muted'"><use href="#i-lucide-chevron-down"></use></svg>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Setiap sesi kelas Zoom direkam secara penuh. Peserta dapat memutar kembali rekaman kapan saja dan mengajukan pertanyaan perbaikan Karya kepada tim Mentor.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 4 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 4 ? null : 4)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Kapan sertifikat dan hadiah diserahkan?</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl transition-transform duration-200" :class="openFaq === 4 ? 'rotate-180 text-main' : 'text-muted'"><use href="#i-lucide-chevron-down"></use></svg>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Sertifikat digital kelulusan akan dikirimkan maksimal 3–5 hari kerja setelah Showcase Day. Pemenang 3 karya terbaik akan dihubungi langsung oleh admin Alhazen untuk proses pengiriman hadiah uang tunai.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="clay-card border-2 border-[#E2E8F0] overflow-hidden transition-colors" :class="openFaq === 5 ? 'border-main' : ''">
                    <button @click="openFaq = (openFaq === 5 ? null : 5)" class="w-full p-5 sm:p-6 text-left flex justify-between items-center font-heading font-bold text-lg text-ink focus:outline-none">
                        <span>Ada lomba di akhir bootcamp? Siapa yang dapat hadiah?</span>
                        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl transition-transform duration-200" :class="openFaq === 5 ? 'rotate-180 text-main' : 'text-muted'"><use href="#i-lucide-chevron-down"></use></svg>
                    </button>
                    <div x-show="openFaq === 5" x-collapse class="px-5 pb-6 sm:px-6 text-sm text-muted leading-relaxed">
                        Ya. Di akhir program diadakan <strong>Lomba Adu Karya (Showcase Day)</strong> tempat siswa mempresentasikan Karya buatannya. Juara 1, 2, dan 3 (3 karya terbaik pilihan mentor) berhak mendapatkan <strong>hadiah uang tunai</strong>. Penilaian berdasarkan kreativitas, fungsi program, dan kepercayaan diri saat presentasi.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== FINAL CTA BANNER (Alhazen Design, warna Holiday) ==================== -->
    <section class="relative py-10">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
                class="pointer-events-none select-none absolute -left-2 sm:-left-2 -top-6 w-14 sm:w-16 z-50" loading="lazy" />
            <img src="{{ asset('assets/kids/index-cta-whatsapp/icon-star.png') }}" alt=""
                class="pointer-events-none select-none absolute -right-2 sm:-right-1 -bottom-5 w-14 sm:w-16 z-50" loading="lazy" />

            <div class="relative rounded-[28px] px-5 sm:px-8 lg:px-10 py-8 sm:py-10
                bg-gradient-to-b from-main to-[#008A72] text-white shadow-[0_20px_50px_rgba(0,175,145,.25)]">
                <div class="flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-8">
                    <div class="flex-1 text-center lg:text-left">
                        <span class="inline-block px-4 py-1.5 rounded-full bg-white/20 text-white font-bold text-xs uppercase tracking-wider backdrop-blur-md mb-4">
                            Tempat Terbatas Tiap Kelas
                        </span>
                        <h3 class="font-semibold leading-tight text-[22px] sm:text-[26px] lg:text-[30px] font-heading">
                            Jadikan Liburan Ini Titik Awal Anak Menjadi Kreator Teknologi!
                        </h3>
                        <p class="text-white/90 text-sm sm:text-base mt-3 max-w-xl mx-auto lg:mx-0">
                            Amankan slot belajar interaktif bersama Alhazen Academy sekarang juga.
                        </p>
                    </div>
                    <div class="w-full lg:w-auto flex flex-col sm:flex-row items-stretch gap-3">
                        <a href="#jalur" class="w-full sm:w-auto px-6 py-3 inline-flex justify-center items-center rounded-xl font-semibold bg-accent text-ink hover:scale-105 transition-all duration-200 ease-in-out">
                            Pilih Jalur Belajar
                        </a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-3 inline-flex justify-center items-center rounded-xl font-semibold bg-white text-main hover:scale-105 transition-all duration-200 ease-in-out gap-2">
                            <svg width="1em" height="1em" aria-hidden="true" class="text-lg"><use href="#i-logos-whatsapp-icon"></use></svg>
                            Konsultasi WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER (Alhazen Design, warna Holiday) ==================== -->
    <footer class="overflow-hidden relative rounded-t-[56px] inset-0 bg-gradient-to-b from-main to-[#008A72]">
        <!-- Decorative icons background -->
        <img src="{{ asset('assets/kids/image-footer/bg-footer.webp') }}" alt=""
            class="absolute bottom-0 left-0 w-full object-cover object-bottom opacity-95 pointer-events-none select-none"
            loading="lazy" decoding="async" />

        <!-- Footer content -->
        <div class="relative mx-auto max-w-7xl px-5 sm:px-8 py-12 sm:py-16 text-white">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-y-12 md:gap-x-12 xl:gap-x-16">

                <!-- Logo & About -->
                <div class="md:col-span-3 space-y-3 md:space-y-6">
                    <img src="{{ asset('assets/foot-logo-new.webp') }}" alt="Alhazen Academy" class="h-15 w-auto" loading="lazy" decoding="async">
                    <div class="flex items-center gap-3">
                        @foreach ($socials as $s)
                            <a href="{{ $s['href'] }}" target="_blank" rel="noopener"
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition ring-1 ring-white/10 hover:ring-white/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60"
                                aria-label="{{ ucfirst($s['label']) }}">
                                <img src="{{ asset($s['icon_path'] ?? 'assets/kids/index-footer/Alhazen-Logo-white.png') }}" alt="{{ ucfirst($s['label']) }} icon"
                                    class="w-8 h-auto object-contain select-none transition-transform duration-200 will-change-transform hover:scale-[1.05]"
                                    loading="lazy" decoding="async" />
                            </a>
                        @endforeach
                    </div>
                    <p class="text-white/90 text-sm max-w-sm leading-relaxed text-justify">
                        PT. Alhazen Global Teknologi adalah Lembaga Kursus dan Konsultan Pendidikan, terutama di bidang pendidikan teknologi kreatif, solutif, inovatif, dan adaptif.
                    </p>
                </div>

                <!-- Program & Hubungi Kami -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Program</h4>
                    <ul class="space-y-2">
                        @forelse ($programLinks as $ln)
                            <li>
                                <a href="{{ route($ln['url'], ['tab' => $ln['key']], false) . '#program' }}"
                                    class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-white/60 rounded">
                                    {{ $ln['label'] }}
                                </a>
                            </li>
                        @empty
                            <li><a href="{{ route('program') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Program</a></li>
                        @endforelse
                    </ul>

                    <div class="mt-6">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Hubungi Kami</h4>
                        <ul class="space-y-2 text-white/90 text-sm">
                            @if ($contact['phone'])
                                <li><a href="tel:{{ preg_replace('/\s+/', '', $contact['phone']) }}" class="hover:underline hover:text-white">{{ $contact['phone'] }}</a></li>
                            @endif
                            @if ($contact['email'])
                                <li><a href="mailto:{{ $contact['email'] }}" class="hover:underline hover:text-white">{{ $contact['email'] }}</a></li>
                            @endif
                            <li><a href="https://{{ $contact['site'] }}" target="_blank" rel="noopener" class="hover:underline hover:text-white">{{ $contact['site'] }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Lainnya & Tersertifikasi -->
                <div class="md:col-span-3 md:pl-6 space-y-4">
                    <h4 style="font-family: Poppins" class="text-xl font-medium">Lainnya</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Beranda</a></li>
                        <li><a href="{{ route('event') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Event</a></li>
                        <li><a href="{{ route('artikel') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Artikel</a></li>
                        <li><a href="{{ route('about') }}" class="text-sm text-white/90 hover:text-white underline-offset-4 hover:underline">Tentang Kami</a></li>
                    </ul>

                    <div class="pt-4">
                        <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Tersertifikasi</h4>
                        <div class="group relative w-35 rounded-2xl bg-white p-3 shadow-lg shadow-black/10 overflow-hidden transition hover:ring-2 hover:ring-white/20">
                            <a href="https://blockchain.stem.org/9faa3d1f-7825-4b4c-8967-525fa6eb08f0#gs.c2374s" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center">
                                <img alt="Badge Sertifikasi STEM.org" class="ct-image block" width="400" height="400" loading="lazy" decoding="async"
                                    src="https://api.accredible.com/v1/frontend/credential_website_embed_image/badge/108574909"
                                    data-fallback="{{ asset('assets/stem_badge.png') }}"
                                    onerror="this.onerror=null; this.src=this.dataset.fallback;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="md:col-span-3 md:pl-6 space-y-2">
                    <h4 style="font-family: Poppins" class="text-xl font-medium mb-4">Kantor Pusat</h4>
                    <a href="https://maps.google.com/?q={{ urlencode($address) }}" target="_blank" rel="noopener"
                        class="text-sm text-white/90 leading-relaxed underline">{{ $address }}</a>
                </div>
            </div>

            {{-- Copyright --}}
            <div class="relative border-t border-white/20 mt-10">
                <div class="mx-auto max-w-7xl px-5 sm:px-8 py-4 text-center text-xs sm:text-sm text-white/80">
                    © {{ date('Y') }} <strong>PT. Alhazen Global Teknologi</strong>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== FLOATING WHATSAPP BUTTON ==================== -->
    <a href="{{ $waUrl }}" target="_blank" class="fixed bottom-6 right-6 z-50 flex items-center gap-2.5 bg-[#25D366] text-white px-4 py-3 rounded-full shadow-2xl hover:scale-105 active:scale-95 transition-all duration-200">
        <svg width="1em" height="1em" aria-hidden="true" class="text-2xl"><use href="#i-logos-whatsapp-icon"></use></svg>
        <span class="font-bold text-sm hidden sm:inline">Tanya MinZen</span>
    </a>

    <script data-hb="js">
@verbatim
(()=>{var Re=!1,Pe=!1,N=[],je=-1;function Gn(e){Xn(e)}function Xn(e){N.includes(e)||N.push(e),Qn()}function Zn(e){let t=N.indexOf(e);t!==-1&&t>je&&N.splice(t,1)}function Qn(){!Pe&&!Re&&(Re=!0,queueMicrotask(er))}function er(){Re=!1,Pe=!0;for(let e=0;e<N.length;e++)N[e](),je=e;N.length=0,je=-1,Pe=!1}var q,k,W,It,Ne=!0;function tr(e){Ne=!1,e(),Ne=!0}function nr(e){q=e.reactive,W=e.release,k=t=>e.effect(t,{scheduler:n=>{Ne?Gn(n):n()}}),It=e.raw}function xt(e){k=e}function rr(e){let t=()=>{};return[r=>{let i=k(r);return e._x_effects||(e._x_effects=new Set,e._x_runEffects=()=>{e._x_effects.forEach(o=>o())}),e._x_effects.add(i),t=()=>{i!==void 0&&(e._x_effects.delete(i),W(i))},i},()=>{t()}]}function Rt(e,t){let n=!0,r,i=k(()=>{let o=e();JSON.stringify(o),n?r=o:queueMicrotask(()=>{t(o,r),r=o}),n=!1});return()=>W(i)}var Pt=[],jt=[],Nt=[];function ir(e){Nt.push(e)}function Ye(e,t){typeof t=="function"?(e._x_cleanups||(e._x_cleanups=[]),e._x_cleanups.push(t)):(t=e,jt.push(t))}function Lt(e){Pt.push(e)}function Ft(e,t,n){e._x_attributeCleanups||(e._x_attributeCleanups={}),e._x_attributeCleanups[t]||(e._x_attributeCleanups[t]=[]),e._x_attributeCleanups[t].push(n)}function Bt(e,t){e._x_attributeCleanups&&Object.entries(e._x_attributeCleanups).forEach(([n,r])=>{(t===void 0||t.includes(n))&&(r.forEach(i=>i()),delete e._x_attributeCleanups[n])})}function or(e){for(e._x_effects?.forEach(Zn);e._x_cleanups?.length;)e._x_cleanups.pop()()}var Ge=new MutationObserver(et),Xe=!1;function Ze(){Ge.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),Xe=!0}function Dt(){sr(),Ge.disconnect(),Xe=!1}var G=[];function sr(){let e=Ge.takeRecords();G.push(()=>e.length>0&&et(e));let t=G.length;queueMicrotask(()=>{if(G.length===t)for(;G.length>0;)G.shift()()})}function g(e){if(!Xe)return e();Dt();let t=e();return Ze(),t}var Qe=!1,_e=[];function ar(){Qe=!0}function ur(){Qe=!1,et(_e),_e=[]}function et(e){if(Qe){_e=_e.concat(e);return}let t=[],n=new Set,r=new Map,i=new Map;for(let o=0;o<e.length;o++)if(!e[o].target._x_ignoreMutationObserver&&(e[o].type==="childList"&&(e[o].removedNodes.forEach(s=>{s.nodeType===1&&s._x_marker&&n.add(s)}),e[o].addedNodes.forEach(s=>{if(s.nodeType===1){if(n.has(s)){n.delete(s);return}s._x_marker||t.push(s)}})),e[o].type==="attributes")){let s=e[o].target,a=e[o].attributeName,u=e[o].oldValue,c=()=>{r.has(s)||r.set(s,[]),r.get(s).push({name:a,value:s.getAttribute(a)})},l=()=>{i.has(s)||i.set(s,[]),i.get(s).push(a)};s.hasAttribute(a)&&u===null?c():s.hasAttribute(a)?(l(),c()):l()}i.forEach((o,s)=>{Bt(s,o)}),r.forEach((o,s)=>{Pt.forEach(a=>a(s,o))});for(let o of n)t.some(s=>s.contains(o))||jt.forEach(s=>s(o));for(let o of t)o.isConnected&&Nt.forEach(s=>s(o));t=null,n=null,r=null,i=null}function kt(e){return ie(z(e))}function re(e,t,n){return e._x_dataStack=[t,...z(n||e)],()=>{e._x_dataStack=e._x_dataStack.filter(r=>r!==t)}}function z(e){return e._x_dataStack?e._x_dataStack:typeof ShadowRoot=="function"&&e instanceof ShadowRoot?z(e.host):e.parentNode?z(e.parentNode):[]}function ie(e){return new Proxy({objects:e},cr)}var cr={ownKeys({objects:e}){return Array.from(new Set(e.flatMap(t=>Object.keys(t))))},has({objects:e},t){return t==Symbol.unscopables?!1:e.some(n=>Object.prototype.hasOwnProperty.call(n,t)||Reflect.has(n,t))},get({objects:e},t,n){return t=="toJSON"?lr:Reflect.get(e.find(r=>Reflect.has(r,t))||{},t,n)},set({objects:e},t,n,r){let i=e.find(s=>Object.prototype.hasOwnProperty.call(s,t))||e[e.length-1],o=Object.getOwnPropertyDescriptor(i,t);return o?.set&&o?.get?o.set.call(r,n)||!0:Reflect.set(i,t,n)}};function lr(){return Reflect.ownKeys(this).reduce((t,n)=>(t[n]=Reflect.get(this,n),t),{})}function Kt(e){let t=r=>typeof r=="object"&&!Array.isArray(r)&&r!==null,n=(r,i="")=>{Object.entries(Object.getOwnPropertyDescriptors(r)).forEach(([o,{value:s,enumerable:a}])=>{if(a===!1||s===void 0||typeof s=="object"&&s!==null&&s.__v_skip)return;let u=i===""?o:`${i}.${o}`;typeof s=="object"&&s!==null&&s._x_interceptor?r[o]=s.initialize(e,u,o):t(s)&&s!==r&&!(s instanceof Element)&&n(s,u)})};return n(e)}function zt(e,t=()=>{}){let n={initialValue:void 0,_x_interceptor:!0,initialize(r,i,o){return e(this.initialValue,()=>fr(r,i),s=>Le(r,i,s),i,o)}};return t(n),r=>{if(typeof r=="object"&&r!==null&&r._x_interceptor){let i=n.initialize.bind(n);n.initialize=(o,s,a)=>{let u=r.initialize(o,s,a);return n.initialValue=u,i(o,s,a)}}else n.initialValue=r;return n}}function fr(e,t){return t.split(".").reduce((n,r)=>n[r],e)}function Le(e,t,n){if(typeof t=="string"&&(t=t.split(".")),t.length===1)e[t[0]]=n;else{if(t.length===0)throw error;return e[t[0]]||(e[t[0]]={}),Le(e[t[0]],t.slice(1),n)}}var Ht={};function A(e,t){Ht[e]=t}function Fe(e,t){let n=dr(t);return Object.entries(Ht).forEach(([r,i])=>{Object.defineProperty(e,`$${r}`,{get(){return i(t,n)},enumerable:!1})}),e}function dr(e){let[t,n]=Yt(e),r={interceptor:zt,...t};return Ye(e,n),r}function pr(e,t,n,...r){try{return n(...r)}catch(i){ne(i,e,t)}}function ne(e,t,n=void 0){e=Object.assign(e??{message:"No error message given."},{el:t,expression:n}),console.warn(`Alpine Expression Error: ${e.message}

${n?'Expression: "'+n+`"

`:""}`,t),setTimeout(()=>{throw e},0)}var de=!0;function qt(e){let t=de;de=!1;let n=e();return de=t,n}function L(e,t,n={}){let r;return b(e,t)(i=>r=i,n),r}function b(...e){return Wt(...e)}var Wt=Ut;function _r(e){Wt=e}function Ut(e,t){let n={};Fe(n,e);let r=[n,...z(e)],i=typeof t=="function"?hr(r,t):xr(r,t,e);return pr.bind(null,e,t,i)}function hr(e,t){return(n=()=>{},{scope:r={},params:i=[],context:o}={})=>{let s=t.apply(ie([r,...e]),i);he(n,s)}}var Ce={};function gr(e,t){if(Ce[e])return Ce[e];let n=Object.getPrototypeOf(async function(){}).constructor,r=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(async()=>{ ${e} })()`:e,o=(()=>{try{let s=new n(["__self","scope"],`with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`);return Object.defineProperty(s,"name",{value:`[Alpine] ${e}`}),s}catch(s){return ne(s,t,e),Promise.resolve()}})();return Ce[e]=o,o}function xr(e,t,n){let r=gr(t,n);return(i=()=>{},{scope:o={},params:s=[],context:a}={})=>{r.result=void 0,r.finished=!1;let u=ie([o,...e]);if(typeof r=="function"){let c=r.call(a,r,u).catch(l=>ne(l,n,t));r.finished?(he(i,r.result,u,s,n),r.result=void 0):c.then(l=>{he(i,l,u,s,n)}).catch(l=>ne(l,n,t)).finally(()=>r.result=void 0)}}}function he(e,t,n,r,i){if(de&&typeof t=="function"){let o=t.apply(n,r);o instanceof Promise?o.then(s=>he(e,s,n,r)).catch(s=>ne(s,i,t)):e(o)}else typeof t=="object"&&t instanceof Promise?t.then(o=>e(o)):e(t)}var tt="x-";function U(e=""){return tt+e}function yr(e){tt=e}var ge={};function y(e,t){return ge[e]=t,{before(n){if(!ge[n]){console.warn(String.raw`Cannot find directive \`${n}\`. \`${e}\` will use the default order of execution`);return}let r=j.indexOf(n);j.splice(r>=0?r:j.indexOf("DEFAULT"),0,e)}}}function vr(e){return Object.keys(ge).includes(e)}function nt(e,t,n){if(t=Array.from(t),e._x_virtualDirectives){let o=Object.entries(e._x_virtualDirectives).map(([a,u])=>({name:a,value:u})),s=Jt(o);o=o.map(a=>s.find(u=>u.name===a.name)?{name:`x-bind:${a.name}`,value:`"${a.value}"`}:a),t=t.concat(o)}let r={};return t.map(Zt((o,s)=>r[o]=s)).filter(en).map(wr(r,n)).sort(Er).map(o=>br(e,o))}function Jt(e){return Array.from(e).map(Zt()).filter(t=>!en(t))}var Be=!1,Q=new Map,Vt=Symbol();function mr(e){Be=!0;let t=Symbol();Vt=t,Q.set(t,[]);let n=()=>{for(;Q.get(t).length;)Q.get(t).shift()();Q.delete(t)},r=()=>{Be=!1,n()};e(n),r()}function Yt(e){let t=[],n=a=>t.push(a),[r,i]=rr(e);return t.push(i),[{Alpine:oe,effect:r,cleanup:n,evaluateLater:b.bind(b,e),evaluate:L.bind(L,e)},()=>t.forEach(a=>a())]}function br(e,t){let n=()=>{},r=ge[t.type]||n,[i,o]=Yt(e);Ft(e,t.original,o);let s=()=>{e._x_ignore||e._x_ignoreSelf||(r.inline&&r.inline(e,t,i),r=r.bind(r,e,t,i),Be?Q.get(Vt).push(r):r())};return s.runCleanups=o,s}var Gt=(e,t)=>({name:n,value:r})=>(n.startsWith(e)&&(n=n.replace(e,t)),{name:n,value:r}),Xt=e=>e;function Zt(e=()=>{}){return({name:t,value:n})=>{let{name:r,value:i}=Qt.reduce((o,s)=>s(o),{name:t,value:n});return r!==t&&e(r,t),{name:r,value:i}}}var Qt=[];function rt(e){Qt.push(e)}function en({name:e}){return tn().test(e)}var tn=()=>new RegExp(`^${tt}([^:^.]+)\\b`);function wr(e,t){return({name:n,value:r})=>{let i=n.match(tn()),o=n.match(/:([a-zA-Z0-9\-_:]+)/),s=n.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],a=t||e[n]||n;return{type:i?i[1]:null,value:o?o[1]:null,modifiers:s.map(u=>u.replace(".","")),expression:r,original:a}}}var De="DEFAULT",j=["ignore","ref","data","id","anchor","bind","init","for","model","modelable","transition","show","if",De,"teleport"];function Er(e,t){let n=j.indexOf(e.type)===-1?De:e.type,r=j.indexOf(t.type)===-1?De:t.type;return j.indexOf(n)-j.indexOf(r)}function ee(e,t,n={}){e.dispatchEvent(new CustomEvent(t,{detail:n,bubbles:!0,composed:!0,cancelable:!0}))}function D(e,t){if(typeof ShadowRoot=="function"&&e instanceof ShadowRoot){Array.from(e.children).forEach(i=>D(i,t));return}let n=!1;if(t(e,()=>n=!0),n)return;let r=e.firstElementChild;for(;r;)D(r,t,!1),r=r.nextElementSibling}function E(e,...t){console.warn(`Alpine Warning: ${e}`,...t)}var yt=!1;function Sr(){yt&&E("Alpine has already been initialized on this page. Calling Alpine.start() more than once can cause problems."),yt=!0,document.body||E("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"),ee(document,"alpine:init"),ee(document,"alpine:initializing"),Ze(),ir(t=>C(t,D)),Ye(t=>V(t)),Lt((t,n)=>{nt(t,n).forEach(r=>r())});let e=t=>!ye(t.parentElement,!0);Array.from(document.querySelectorAll(on().join(","))).filter(e).forEach(t=>{C(t)}),ee(document,"alpine:initialized"),setTimeout(()=>{Mr()})}var it=[],nn=[];function rn(){return it.map(e=>e())}function on(){return it.concat(nn).map(e=>e())}function sn(e){it.push(e)}function an(e){nn.push(e)}function ye(e,t=!1){return J(e,n=>{if((t?on():rn()).some(i=>n.matches(i)))return!0})}function J(e,t){if(e){if(t(e))return e;if(e._x_teleportBack&&(e=e._x_teleportBack),!!e.parentElement)return J(e.parentElement,t)}}function Ar(e){return rn().some(t=>e.matches(t))}var un=[];function Or(e){un.push(e)}var Cr=1;function C(e,t=D,n=()=>{}){J(e,r=>r._x_ignore)||mr(()=>{t(e,(r,i)=>{r._x_marker||(n(r,i),un.forEach(o=>o(r,i)),nt(r,r.attributes).forEach(o=>o()),r._x_ignore||(r._x_marker=Cr++),r._x_ignore&&i())})})}function V(e,t=D){t(e,n=>{or(n),Bt(n),delete n._x_marker})}function Mr(){[["ui","dialog",["[x-dialog], [x-popover]"]],["anchor","anchor",["[x-anchor]"]],["sort","sort",["[x-sort]"]]].forEach(([t,n,r])=>{vr(n)||r.some(i=>{if(document.querySelector(i))return E(`found "${i}", but missing ${t} plugin`),!0})})}var ke=[],ot=!1;function st(e=()=>{}){return queueMicrotask(()=>{ot||setTimeout(()=>{Ke()})}),new Promise(t=>{ke.push(()=>{e(),t()})})}function Ke(){for(ot=!1;ke.length;)ke.shift()()}function Tr(){ot=!0}function at(e,t){return Array.isArray(t)?vt(e,t.join(" ")):typeof t=="object"&&t!==null?$r(e,t):typeof t=="function"?at(e,t()):vt(e,t)}function vt(e,t){let n=o=>o.split(" ").filter(Boolean),r=o=>o.split(" ").filter(s=>!e.classList.contains(s)).filter(Boolean),i=o=>(e.classList.add(...o),()=>{e.classList.remove(...o)});return t=t===!0?t="":t||"",i(r(t))}function $r(e,t){let n=a=>a.split(" ").filter(Boolean),r=Object.entries(t).flatMap(([a,u])=>u?n(a):!1).filter(Boolean),i=Object.entries(t).flatMap(([a,u])=>u?!1:n(a)).filter(Boolean),o=[],s=[];return i.forEach(a=>{e.classList.contains(a)&&(e.classList.remove(a),s.push(a))}),r.forEach(a=>{e.classList.contains(a)||(e.classList.add(a),o.push(a))}),()=>{s.forEach(a=>e.classList.add(a)),o.forEach(a=>e.classList.remove(a))}}function ve(e,t){return typeof t=="object"&&t!==null?Ir(e,t):Rr(e,t)}function Ir(e,t){let n={};return Object.entries(t).forEach(([r,i])=>{n[r]=e.style[r],r.startsWith("--")||(r=Pr(r)),e.style.setProperty(r,i)}),setTimeout(()=>{e.style.length===0&&e.removeAttribute("style")}),()=>{ve(e,n)}}function Rr(e,t){let n=e.getAttribute("style",t);return e.setAttribute("style",t),()=>{e.setAttribute("style",n||"")}}function Pr(e){return e.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}function ze(e,t=()=>{}){let n=!1;return function(){n?t.apply(this,arguments):(n=!0,e.apply(this,arguments))}}y("transition",(e,{value:t,modifiers:n,expression:r},{evaluate:i})=>{typeof r=="function"&&(r=i(r)),r!==!1&&(!r||typeof r=="boolean"?Nr(e,n,t):jr(e,r,t))});function jr(e,t,n){cn(e,at,""),{enter:i=>{e._x_transition.enter.during=i},"enter-start":i=>{e._x_transition.enter.start=i},"enter-end":i=>{e._x_transition.enter.end=i},leave:i=>{e._x_transition.leave.during=i},"leave-start":i=>{e._x_transition.leave.start=i},"leave-end":i=>{e._x_transition.leave.end=i}}[n](t)}function Nr(e,t,n){cn(e,ve);let r=!t.includes("in")&&!t.includes("out")&&!n,i=r||t.includes("in")||["enter"].includes(n),o=r||t.includes("out")||["leave"].includes(n);t.includes("in")&&!r&&(t=t.filter((h,x)=>x<t.indexOf("out"))),t.includes("out")&&!r&&(t=t.filter((h,x)=>x>t.indexOf("out")));let s=!t.includes("opacity")&&!t.includes("scale"),a=s||t.includes("opacity"),u=s||t.includes("scale"),c=a?0:1,l=u?X(t,"scale",95)/100:1,d=X(t,"delay",0)/1e3,p=X(t,"origin","center"),v="opacity, transform",M=X(t,"duration",150)/1e3,se=X(t,"duration",75)/1e3,f="cubic-bezier(0.4, 0.0, 0.2, 1)";i&&(e._x_transition.enter.during={transformOrigin:p,transitionDelay:`${d}s`,transitionProperty:v,transitionDuration:`${M}s`,transitionTimingFunction:f},e._x_transition.enter.start={opacity:c,transform:`scale(${l})`},e._x_transition.enter.end={opacity:1,transform:"scale(1)"}),o&&(e._x_transition.leave.during={transformOrigin:p,transitionDelay:`${d}s`,transitionProperty:v,transitionDuration:`${se}s`,transitionTimingFunction:f},e._x_transition.leave.start={opacity:1,transform:"scale(1)"},e._x_transition.leave.end={opacity:c,transform:`scale(${l})`})}function cn(e,t,n={}){e._x_transition||(e._x_transition={enter:{during:n,start:n,end:n},leave:{during:n,start:n,end:n},in(r=()=>{},i=()=>{}){He(e,t,{during:this.enter.during,start:this.enter.start,end:this.enter.end},r,i)},out(r=()=>{},i=()=>{}){He(e,t,{during:this.leave.during,start:this.leave.start,end:this.leave.end},r,i)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(e,t,n,r){let i=document.visibilityState==="visible"?requestAnimationFrame:setTimeout,o=()=>i(n);if(t){e._x_transition&&(e._x_transition.enter||e._x_transition.leave)?e._x_transition.enter&&(Object.entries(e._x_transition.enter.during).length||Object.entries(e._x_transition.enter.start).length||Object.entries(e._x_transition.enter.end).length)?e._x_transition.in(n):o():e._x_transition?e._x_transition.in(n):o();return}e._x_hidePromise=e._x_transition?new Promise((s,a)=>{e._x_transition.out(()=>{},()=>s(r)),e._x_transitioning&&e._x_transitioning.beforeCancel(()=>a({isFromCancelledTransition:!0}))}):Promise.resolve(r),queueMicrotask(()=>{let s=ln(e);s?(s._x_hideChildren||(s._x_hideChildren=[]),s._x_hideChildren.push(e)):i(()=>{let a=u=>{let c=Promise.all([u._x_hidePromise,...(u._x_hideChildren||[]).map(a)]).then(([l])=>l?.());return delete u._x_hidePromise,delete u._x_hideChildren,c};a(e).catch(u=>{if(!u.isFromCancelledTransition)throw u})})})};function ln(e){let t=e.parentNode;if(t)return t._x_hidePromise?t:ln(t)}function He(e,t,{during:n,start:r,end:i}={},o=()=>{},s=()=>{}){if(e._x_transitioning&&e._x_transitioning.cancel(),Object.keys(n).length===0&&Object.keys(r).length===0&&Object.keys(i).length===0){o(),s();return}let a,u,c;Lr(e,{start(){a=t(e,r)},during(){u=t(e,n)},before:o,end(){a(),c=t(e,i)},after:s,cleanup(){u(),c()}})}function Lr(e,t){let n,r,i,o=ze(()=>{g(()=>{n=!0,r||t.before(),i||(t.end(),Ke()),t.after(),e.isConnected&&t.cleanup(),delete e._x_transitioning})});e._x_transitioning={beforeCancels:[],beforeCancel(s){this.beforeCancels.push(s)},cancel:ze(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();o()}),finish:o},g(()=>{t.start(),t.during()}),Tr(),requestAnimationFrame(()=>{if(n)return;let s=Number(getComputedStyle(e).transitionDuration.replace(/,.*/,"").replace("s",""))*1e3,a=Number(getComputedStyle(e).transitionDelay.replace(/,.*/,"").replace("s",""))*1e3;s===0&&(s=Number(getComputedStyle(e).animationDuration.replace("s",""))*1e3),g(()=>{t.before()}),r=!0,requestAnimationFrame(()=>{n||(g(()=>{t.end()}),Ke(),setTimeout(e._x_transitioning.finish,s+a),i=!0)})})}function X(e,t,n){if(e.indexOf(t)===-1)return n;let r=e[e.indexOf(t)+1];if(!r||t==="scale"&&isNaN(r))return n;if(t==="duration"||t==="delay"){let i=r.match(/([0-9]+)ms/);if(i)return i[1]}return t==="origin"&&["top","right","left","center","bottom"].includes(e[e.indexOf(t)+2])?[r,e[e.indexOf(t)+2]].join(" "):r}var $=!1;function R(e,t=()=>{}){return(...n)=>$?t(...n):e(...n)}function Fr(e){return(...t)=>$&&e(...t)}var fn=[];function me(e){fn.push(e)}function Br(e,t){fn.forEach(n=>n(e,t)),$=!0,dn(()=>{C(t,(n,r)=>{r(n,()=>{})})}),$=!1}var qe=!1;function Dr(e,t){t._x_dataStack||(t._x_dataStack=e._x_dataStack),$=!0,qe=!0,dn(()=>{kr(t)}),$=!1,qe=!1}function kr(e){let t=!1;C(e,(r,i)=>{D(r,(o,s)=>{if(t&&Ar(o))return s();t=!0,i(o,s)})})}function dn(e){let t=k;xt((n,r)=>{let i=t(n);return W(i),()=>{}}),e(),xt(t)}function pn(e,t,n,r=[]){switch(e._x_bindings||(e._x_bindings=q({})),e._x_bindings[t]=n,t=r.includes("camel")?Vr(t):t,t){case"value":Kr(e,n);break;case"style":Hr(e,n);break;case"class":zr(e,n);break;case"selected":case"checked":qr(e,t,n);break;default:_n(e,t,n);break}}function Kr(e,t){if(xn(e))e.attributes.value===void 0&&(e.value=t),window.fromModel&&(typeof t=="boolean"?e.checked=pe(e.value)===t:e.checked=mt(e.value,t));else if(ut(e))Number.isInteger(t)?e.value=t:!Array.isArray(t)&&typeof t!="boolean"&&![null,void 0].includes(t)?e.value=String(t):Array.isArray(t)?e.checked=t.some(n=>mt(n,e.value)):e.checked=!!t;else if(e.tagName==="SELECT")Jr(e,t);else{if(e.value===t)return;e.value=t===void 0?"":t}}function zr(e,t){e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedClasses=at(e,t)}function Hr(e,t){e._x_undoAddedStyles&&e._x_undoAddedStyles(),e._x_undoAddedStyles=ve(e,t)}function qr(e,t,n){_n(e,t,n),Ur(e,t,n)}function _n(e,t,n){[null,void 0,!1].includes(n)&&Gr(t)?e.removeAttribute(t):(hn(t)&&(n=t),Wr(e,t,n))}function Wr(e,t,n){e.getAttribute(t)!=n&&e.setAttribute(t,n)}function Ur(e,t,n){e[t]!==n&&(e[t]=n)}function Jr(e,t){let n=[].concat(t).map(r=>r+"");Array.from(e.options).forEach(r=>{r.selected=n.includes(r.value)})}function Vr(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function mt(e,t){return e==t}function pe(e){return[1,"1","true","on","yes",!0].includes(e)?!0:[0,"0","false","off","no",!1].includes(e)?!1:e?!!e:null}var Yr=new Set(["allowfullscreen","async","autofocus","autoplay","checked","controls","default","defer","disabled","formnovalidate","inert","ismap","itemscope","loop","multiple","muted","nomodule","novalidate","open","playsinline","readonly","required","reversed","selected","shadowrootclonable","shadowrootdelegatesfocus","shadowrootserializable"]);function hn(e){return Yr.has(e)}function Gr(e){return!["aria-pressed","aria-checked","aria-expanded","aria-selected"].includes(e)}function Xr(e,t,n){return e._x_bindings&&e._x_bindings[t]!==void 0?e._x_bindings[t]:gn(e,t,n)}function Zr(e,t,n,r=!0){if(e._x_bindings&&e._x_bindings[t]!==void 0)return e._x_bindings[t];if(e._x_inlineBindings&&e._x_inlineBindings[t]!==void 0){let i=e._x_inlineBindings[t];return i.extract=r,qt(()=>L(e,i.expression))}return gn(e,t,n)}function gn(e,t,n){let r=e.getAttribute(t);return r===null?typeof n=="function"?n():n:r===""?!0:hn(t)?!![t,"true"].includes(r):r}function ut(e){return e.type==="checkbox"||e.localName==="ui-checkbox"||e.localName==="ui-switch"}function xn(e){return e.type==="radio"||e.localName==="ui-radio"}function yn(e,t){let n;return function(){let r=this,i=arguments,o=function(){n=null,e.apply(r,i)};clearTimeout(n),n=setTimeout(o,t)}}function vn(e,t){let n;return function(){let r=this,i=arguments;n||(e.apply(r,i),n=!0,setTimeout(()=>n=!1,t))}}function mn({get:e,set:t},{get:n,set:r}){let i=!0,o,s,a=k(()=>{let u=e(),c=n();if(i)r(Me(u)),i=!1;else{let l=JSON.stringify(u),d=JSON.stringify(c);l!==o?r(Me(u)):l!==d&&t(Me(c))}o=JSON.stringify(e()),s=JSON.stringify(n())});return()=>{W(a)}}function Me(e){return typeof e=="object"?JSON.parse(JSON.stringify(e)):e}function Qr(e){(Array.isArray(e)?e:[e]).forEach(n=>n(oe))}var P={},bt=!1;function ei(e,t){if(bt||(P=q(P),bt=!0),t===void 0)return P[e];P[e]=t,Kt(P[e]),typeof t=="object"&&t!==null&&t.hasOwnProperty("init")&&typeof t.init=="function"&&P[e].init()}function ti(){return P}var bn={};function ni(e,t){let n=typeof t!="function"?()=>t:t;return e instanceof Element?wn(e,n()):(bn[e]=n,()=>{})}function ri(e){return Object.entries(bn).forEach(([t,n])=>{Object.defineProperty(e,t,{get(){return(...r)=>n(...r)}})}),e}function wn(e,t,n){let r=[];for(;r.length;)r.pop()();let i=Object.entries(t).map(([s,a])=>({name:s,value:a})),o=Jt(i);return i=i.map(s=>o.find(a=>a.name===s.name)?{name:`x-bind:${s.name}`,value:`"${s.value}"`}:s),nt(e,i,n).map(s=>{r.push(s.runCleanups),s()}),()=>{for(;r.length;)r.pop()()}}var En={};function ii(e,t){En[e]=t}function oi(e,t){return Object.entries(En).forEach(([n,r])=>{Object.defineProperty(e,n,{get(){return(...i)=>r.bind(t)(...i)},enumerable:!1})}),e}var si={get reactive(){return q},get release(){return W},get effect(){return k},get raw(){return It},version:"3.15.0",flushAndStopDeferringMutations:ur,dontAutoEvaluateFunctions:qt,disableEffectScheduling:tr,startObservingMutations:Ze,stopObservingMutations:Dt,setReactivityEngine:nr,onAttributeRemoved:Ft,onAttributesAdded:Lt,closestDataStack:z,skipDuringClone:R,onlyDuringClone:Fr,addRootSelector:sn,addInitSelector:an,interceptClone:me,addScopeToNode:re,deferMutations:ar,mapAttributes:rt,evaluateLater:b,interceptInit:Or,setEvaluator:_r,mergeProxies:ie,extractProp:Zr,findClosest:J,onElRemoved:Ye,closestRoot:ye,destroyTree:V,interceptor:zt,transition:He,setStyles:ve,mutateDom:g,directive:y,entangle:mn,throttle:vn,debounce:yn,evaluate:L,initTree:C,nextTick:st,prefixed:U,prefix:yr,plugin:Qr,magic:A,store:ei,start:Sr,clone:Dr,cloneNode:Br,bound:Xr,$data:kt,watch:Rt,walk:D,data:ii,bind:ni},oe=si;function Sn(e,t){let n=Object.create(null),r=e.split(",");for(let i=0;i<r.length;i++)n[r[i]]=!0;return t?i=>!!n[i.toLowerCase()]:i=>!!n[i]}var ai="itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly",uo=Sn(ai+",async,autofocus,autoplay,controls,default,defer,disabled,hidden,loop,open,required,reversed,scoped,seamless,checked,muted,multiple,selected"),ui=Object.freeze({}),co=Object.freeze([]),ci=Object.prototype.hasOwnProperty,be=(e,t)=>ci.call(e,t),F=Array.isArray,te=e=>An(e)==="[object Map]",li=e=>typeof e=="string",ct=e=>typeof e=="symbol",we=e=>e!==null&&typeof e=="object",fi=Object.prototype.toString,An=e=>fi.call(e),On=e=>An(e).slice(8,-1),lt=e=>li(e)&&e!=="NaN"&&e[0]!=="-"&&""+parseInt(e,10)===e,Ee=e=>{let t=Object.create(null);return n=>t[n]||(t[n]=e(n))},di=/-(\w)/g,lo=Ee(e=>e.replace(di,(t,n)=>n?n.toUpperCase():"")),pi=/\B([A-Z])/g,fo=Ee(e=>e.replace(pi,"-$1").toLowerCase()),Cn=Ee(e=>e.charAt(0).toUpperCase()+e.slice(1)),po=Ee(e=>e?`on${Cn(e)}`:""),Mn=(e,t)=>e!==t&&(e===e||t===t),We=new WeakMap,Z=[],O,B=Symbol("iterate"),Ue=Symbol("Map key iterate");function _i(e){return e&&e._isEffect===!0}function hi(e,t=ui){_i(e)&&(e=e.raw);let n=yi(e,t);return t.lazy||n(),n}function gi(e){e.active&&(Tn(e),e.options.onStop&&e.options.onStop(),e.active=!1)}var xi=0;function yi(e,t){let n=function(){if(!n.active)return e();if(!Z.includes(n)){Tn(n);try{return mi(),Z.push(n),O=n,e()}finally{Z.pop(),$n(),O=Z[Z.length-1]}}};return n.id=xi++,n.allowRecurse=!!t.allowRecurse,n._isEffect=!0,n.active=!0,n.raw=e,n.deps=[],n.options=t,n}function Tn(e){let{deps:t}=e;if(t.length){for(let n=0;n<t.length;n++)t[n].delete(e);t.length=0}}var H=!0,ft=[];function vi(){ft.push(H),H=!1}function mi(){ft.push(H),H=!0}function $n(){let e=ft.pop();H=e===void 0?!0:e}function S(e,t,n){if(!H||O===void 0)return;let r=We.get(e);r||We.set(e,r=new Map);let i=r.get(n);i||r.set(n,i=new Set),i.has(O)||(i.add(O),O.deps.push(i),O.options.onTrack&&O.options.onTrack({effect:O,target:e,type:t,key:n}))}function I(e,t,n,r,i,o){let s=We.get(e);if(!s)return;let a=new Set,u=l=>{l&&l.forEach(d=>{(d!==O||d.allowRecurse)&&a.add(d)})};if(t==="clear")s.forEach(u);else if(n==="length"&&F(e))s.forEach((l,d)=>{(d==="length"||d>=r)&&u(l)});else switch(n!==void 0&&u(s.get(n)),t){case"add":F(e)?lt(n)&&u(s.get("length")):(u(s.get(B)),te(e)&&u(s.get(Ue)));break;case"delete":F(e)||(u(s.get(B)),te(e)&&u(s.get(Ue)));break;case"set":te(e)&&u(s.get(B));break}let c=l=>{l.options.onTrigger&&l.options.onTrigger({effect:l,target:e,key:n,type:t,newValue:r,oldValue:i,oldTarget:o}),l.options.scheduler?l.options.scheduler(l):l()};a.forEach(c)}var bi=Sn("__proto__,__v_isRef,__isVue"),In=new Set(Object.getOwnPropertyNames(Symbol).map(e=>Symbol[e]).filter(ct)),wi=Rn(),Ei=Rn(!0),wt=Si();function Si(){let e={};return["includes","indexOf","lastIndexOf"].forEach(t=>{e[t]=function(...n){let r=_(this);for(let o=0,s=this.length;o<s;o++)S(r,"get",o+"");let i=r[t](...n);return i===-1||i===!1?r[t](...n.map(_)):i}}),["push","pop","shift","unshift","splice"].forEach(t=>{e[t]=function(...n){vi();let r=_(this)[t].apply(this,n);return $n(),r}}),e}function Rn(e=!1,t=!1){return function(r,i,o){if(i==="__v_isReactive")return!e;if(i==="__v_isReadonly")return e;if(i==="__v_raw"&&o===(e?t?ki:Ln:t?Di:Nn).get(r))return r;let s=F(r);if(!e&&s&&be(wt,i))return Reflect.get(wt,i,o);let a=Reflect.get(r,i,o);return(ct(i)?In.has(i):bi(i))||(e||S(r,"get",i),t)?a:Je(a)?!s||!lt(i)?a.value:a:we(a)?e?Fn(a):ht(a):a}}var Ai=Oi();function Oi(e=!1){return function(n,r,i,o){let s=n[r];if(!e&&(i=_(i),s=_(s),!F(n)&&Je(s)&&!Je(i)))return s.value=i,!0;let a=F(n)&&lt(r)?Number(r)<n.length:be(n,r),u=Reflect.set(n,r,i,o);return n===_(o)&&(a?Mn(i,s)&&I(n,"set",r,i,s):I(n,"add",r,i)),u}}function Ci(e,t){let n=be(e,t),r=e[t],i=Reflect.deleteProperty(e,t);return i&&n&&I(e,"delete",t,void 0,r),i}function Mi(e,t){let n=Reflect.has(e,t);return(!ct(t)||!In.has(t))&&S(e,"has",t),n}function Ti(e){return S(e,"iterate",F(e)?"length":B),Reflect.ownKeys(e)}var $i={get:wi,set:Ai,deleteProperty:Ci,has:Mi,ownKeys:Ti},Ii={get:Ei,set(e,t){return console.warn(`Set operation on key "${String(t)}" failed: target is readonly.`,e),!0},deleteProperty(e,t){return console.warn(`Delete operation on key "${String(t)}" failed: target is readonly.`,e),!0}},dt=e=>we(e)?ht(e):e,pt=e=>we(e)?Fn(e):e,_t=e=>e,Se=e=>Reflect.getPrototypeOf(e);function ae(e,t,n=!1,r=!1){e=e.__v_raw;let i=_(e),o=_(t);t!==o&&!n&&S(i,"get",t),!n&&S(i,"get",o);let{has:s}=Se(i),a=r?_t:n?pt:dt;if(s.call(i,t))return a(e.get(t));if(s.call(i,o))return a(e.get(o));e!==i&&e.get(t)}function ue(e,t=!1){let n=this.__v_raw,r=_(n),i=_(e);return e!==i&&!t&&S(r,"has",e),!t&&S(r,"has",i),e===i?n.has(e):n.has(e)||n.has(i)}function ce(e,t=!1){return e=e.__v_raw,!t&&S(_(e),"iterate",B),Reflect.get(e,"size",e)}function Et(e){e=_(e);let t=_(this);return Se(t).has.call(t,e)||(t.add(e),I(t,"add",e,e)),this}function St(e,t){t=_(t);let n=_(this),{has:r,get:i}=Se(n),o=r.call(n,e);o?jn(n,r,e):(e=_(e),o=r.call(n,e));let s=i.call(n,e);return n.set(e,t),o?Mn(t,s)&&I(n,"set",e,t,s):I(n,"add",e,t),this}function At(e){let t=_(this),{has:n,get:r}=Se(t),i=n.call(t,e);i?jn(t,n,e):(e=_(e),i=n.call(t,e));let o=r?r.call(t,e):void 0,s=t.delete(e);return i&&I(t,"delete",e,void 0,o),s}function Ot(){let e=_(this),t=e.size!==0,n=te(e)?new Map(e):new Set(e),r=e.clear();return t&&I(e,"clear",void 0,void 0,n),r}function le(e,t){return function(r,i){let o=this,s=o.__v_raw,a=_(s),u=t?_t:e?pt:dt;return!e&&S(a,"iterate",B),s.forEach((c,l)=>r.call(i,u(c),u(l),o))}}function fe(e,t,n){return function(...r){let i=this.__v_raw,o=_(i),s=te(o),a=e==="entries"||e===Symbol.iterator&&s,u=e==="keys"&&s,c=i[e](...r),l=n?_t:t?pt:dt;return!t&&S(o,"iterate",u?Ue:B),{next(){let{value:d,done:p}=c.next();return p?{value:d,done:p}:{value:a?[l(d[0]),l(d[1])]:l(d),done:p}},[Symbol.iterator](){return this}}}}function T(e){return function(...t){{let n=t[0]?`on key "${t[0]}" `:"";console.warn(`${Cn(e)} operation ${n}failed: target is readonly.`,_(this))}return e==="delete"?!1:this}}function Ri(){let e={get(o){return ae(this,o)},get size(){return ce(this)},has:ue,add:Et,set:St,delete:At,clear:Ot,forEach:le(!1,!1)},t={get(o){return ae(this,o,!1,!0)},get size(){return ce(this)},has:ue,add:Et,set:St,delete:At,clear:Ot,forEach:le(!1,!0)},n={get(o){return ae(this,o,!0)},get size(){return ce(this,!0)},has(o){return ue.call(this,o,!0)},add:T("add"),set:T("set"),delete:T("delete"),clear:T("clear"),forEach:le(!0,!1)},r={get(o){return ae(this,o,!0,!0)},get size(){return ce(this,!0)},has(o){return ue.call(this,o,!0)},add:T("add"),set:T("set"),delete:T("delete"),clear:T("clear"),forEach:le(!0,!0)};return["keys","values","entries",Symbol.iterator].forEach(o=>{e[o]=fe(o,!1,!1),n[o]=fe(o,!0,!1),t[o]=fe(o,!1,!0),r[o]=fe(o,!0,!0)}),[e,n,t,r]}var[Pi,ji,Ni,Li]=Ri();function Pn(e,t){let n=t?e?Li:Ni:e?ji:Pi;return(r,i,o)=>i==="__v_isReactive"?!e:i==="__v_isReadonly"?e:i==="__v_raw"?r:Reflect.get(be(n,i)&&i in r?n:r,i,o)}var Fi={get:Pn(!1,!1)},Bi={get:Pn(!0,!1)};function jn(e,t,n){let r=_(n);if(r!==n&&t.call(e,r)){let i=On(e);console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var Nn=new WeakMap,Di=new WeakMap,Ln=new WeakMap,ki=new WeakMap;function Ki(e){switch(e){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}function zi(e){return e.__v_skip||!Object.isExtensible(e)?0:Ki(On(e))}function ht(e){return e&&e.__v_isReadonly?e:Bn(e,!1,$i,Fi,Nn)}function Fn(e){return Bn(e,!0,Ii,Bi,Ln)}function Bn(e,t,n,r,i){if(!we(e))return console.warn(`value cannot be made reactive: ${String(e)}`),e;if(e.__v_raw&&!(t&&e.__v_isReactive))return e;let o=i.get(e);if(o)return o;let s=zi(e);if(s===0)return e;let a=new Proxy(e,s===2?r:n);return i.set(e,a),a}function _(e){return e&&_(e.__v_raw)||e}function Je(e){return!!(e&&e.__v_isRef===!0)}A("nextTick",()=>st);A("dispatch",e=>ee.bind(ee,e));A("watch",(e,{evaluateLater:t,cleanup:n})=>(r,i)=>{let o=t(r),a=Rt(()=>{let u;return o(c=>u=c),u},i);n(a)});A("store",ti);A("data",e=>kt(e));A("root",e=>ye(e));A("refs",e=>(e._x_refs_proxy||(e._x_refs_proxy=ie(Hi(e))),e._x_refs_proxy));function Hi(e){let t=[];return J(e,n=>{n._x_refs&&t.push(n._x_refs)}),t}var Te={};function Dn(e){return Te[e]||(Te[e]=0),++Te[e]}function qi(e,t){return J(e,n=>{if(n._x_ids&&n._x_ids[t])return!0})}function Wi(e,t){e._x_ids||(e._x_ids={}),e._x_ids[t]||(e._x_ids[t]=Dn(t))}A("id",(e,{cleanup:t})=>(n,r=null)=>{let i=`${n}${r?`-${r}`:""}`;return Ui(e,i,t,()=>{let o=qi(e,n),s=o?o._x_ids[n]:Dn(n);return r?`${n}-${s}-${r}`:`${n}-${s}`})});me((e,t)=>{e._x_id&&(t._x_id=e._x_id)});function Ui(e,t,n,r){if(e._x_id||(e._x_id={}),e._x_id[t])return e._x_id[t];let i=r();return e._x_id[t]=i,n(()=>{delete e._x_id[t]}),i}A("el",e=>e);kn("Focus","focus","focus");kn("Persist","persist","persist");function kn(e,t,n){A(t,r=>E(`You can't use [$${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}y("modelable",(e,{expression:t},{effect:n,evaluateLater:r,cleanup:i})=>{let o=r(t),s=()=>{let l;return o(d=>l=d),l},a=r(`${t} = __placeholder`),u=l=>a(()=>{},{scope:{__placeholder:l}}),c=s();u(c),queueMicrotask(()=>{if(!e._x_model)return;e._x_removeModelListeners.default();let l=e._x_model.get,d=e._x_model.set,p=mn({get(){return l()},set(v){d(v)}},{get(){return s()},set(v){u(v)}});i(p)})});y("teleport",(e,{modifiers:t,expression:n},{cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&E("x-teleport can only be used on a <template> tag",e);let i=Ct(n),o=e.content.cloneNode(!0).firstElementChild;e._x_teleport=o,o._x_teleportBack=e,e.setAttribute("data-teleport-template",!0),o.setAttribute("data-teleport-target",!0),e._x_forwardEvents&&e._x_forwardEvents.forEach(a=>{o.addEventListener(a,u=>{u.stopPropagation(),e.dispatchEvent(new u.constructor(u.type,u))})}),re(o,{},e);let s=(a,u,c)=>{c.includes("prepend")?u.parentNode.insertBefore(a,u):c.includes("append")?u.parentNode.insertBefore(a,u.nextSibling):u.appendChild(a)};g(()=>{s(o,i,t),R(()=>{C(o)})()}),e._x_teleportPutBack=()=>{let a=Ct(n);g(()=>{s(e._x_teleport,a,t)})},r(()=>g(()=>{o.remove(),V(o)}))});var Ji=document.createElement("div");function Ct(e){let t=R(()=>document.querySelector(e),()=>Ji)();return t||E(`Cannot find x-teleport element for selector: "${e}"`),t}var Kn=()=>{};Kn.inline=(e,{modifiers:t},{cleanup:n})=>{t.includes("self")?e._x_ignoreSelf=!0:e._x_ignore=!0,n(()=>{t.includes("self")?delete e._x_ignoreSelf:delete e._x_ignore})};y("ignore",Kn);y("effect",R((e,{expression:t},{effect:n})=>{n(b(e,t))}));function Ve(e,t,n,r){let i=e,o=u=>r(u),s={},a=(u,c)=>l=>c(u,l);if(n.includes("dot")&&(t=Vi(t)),n.includes("camel")&&(t=Yi(t)),n.includes("passive")&&(s.passive=!0),n.includes("capture")&&(s.capture=!0),n.includes("window")&&(i=window),n.includes("document")&&(i=document),n.includes("debounce")){let u=n[n.indexOf("debounce")+1]||"invalid-wait",c=xe(u.split("ms")[0])?Number(u.split("ms")[0]):250;o=yn(o,c)}if(n.includes("throttle")){let u=n[n.indexOf("throttle")+1]||"invalid-wait",c=xe(u.split("ms")[0])?Number(u.split("ms")[0]):250;o=vn(o,c)}return n.includes("prevent")&&(o=a(o,(u,c)=>{c.preventDefault(),u(c)})),n.includes("stop")&&(o=a(o,(u,c)=>{c.stopPropagation(),u(c)})),n.includes("once")&&(o=a(o,(u,c)=>{u(c),i.removeEventListener(t,o,s)})),(n.includes("away")||n.includes("outside"))&&(i=document,o=a(o,(u,c)=>{e.contains(c.target)||c.target.isConnected!==!1&&(e.offsetWidth<1&&e.offsetHeight<1||e._x_isShown!==!1&&u(c))})),n.includes("self")&&(o=a(o,(u,c)=>{c.target===e&&u(c)})),(Xi(t)||zn(t))&&(o=a(o,(u,c)=>{Zi(c,n)||u(c)})),i.addEventListener(t,o,s),()=>{i.removeEventListener(t,o,s)}}function Vi(e){return e.replace(/-/g,".")}function Yi(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function xe(e){return!Array.isArray(e)&&!isNaN(e)}function Gi(e){return[" ","_"].includes(e)?e:e.replace(/([a-z])([A-Z])/g,"$1-$2").replace(/[_\s]/,"-").toLowerCase()}function Xi(e){return["keydown","keyup"].includes(e)}function zn(e){return["contextmenu","click","mouse"].some(t=>e.includes(t))}function Zi(e,t){let n=t.filter(o=>!["window","document","prevent","stop","once","capture","self","away","outside","passive","preserve-scroll"].includes(o));if(n.includes("debounce")){let o=n.indexOf("debounce");n.splice(o,xe((n[o+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.includes("throttle")){let o=n.indexOf("throttle");n.splice(o,xe((n[o+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.length===0||n.length===1&&Mt(e.key).includes(n[0]))return!1;let i=["ctrl","shift","alt","meta","cmd","super"].filter(o=>n.includes(o));return n=n.filter(o=>!i.includes(o)),!(i.length>0&&i.filter(s=>((s==="cmd"||s==="super")&&(s="meta"),e[`${s}Key`])).length===i.length&&(zn(e.type)||Mt(e.key).includes(n[0])))}function Mt(e){if(!e)return[];e=Gi(e);let t={ctrl:"control",slash:"/",space:" ",spacebar:" ",cmd:"meta",esc:"escape",up:"arrow-up",down:"arrow-down",left:"arrow-left",right:"arrow-right",period:".",comma:",",equal:"=",minus:"-",underscore:"_"};return t[e]=e,Object.keys(t).map(n=>{if(t[n]===e)return n}).filter(n=>n)}y("model",(e,{modifiers:t,expression:n},{effect:r,cleanup:i})=>{let o=e;t.includes("parent")&&(o=e.parentNode);let s=b(o,n),a;typeof n=="string"?a=b(o,`${n} = __placeholder`):typeof n=="function"&&typeof n()=="string"?a=b(o,`${n()} = __placeholder`):a=()=>{};let u=()=>{let p;return s(v=>p=v),Tt(p)?p.get():p},c=p=>{let v;s(M=>v=M),Tt(v)?v.set(p):a(()=>{},{scope:{__placeholder:p}})};typeof n=="string"&&e.type==="radio"&&g(()=>{e.hasAttribute("name")||e.setAttribute("name",n)});let l=e.tagName.toLowerCase()==="select"||["checkbox","radio"].includes(e.type)||t.includes("lazy")?"change":"input",d=$?()=>{}:Ve(e,l,t,p=>{c($e(e,t,p,u()))});if(t.includes("fill")&&([void 0,null,""].includes(u())||ut(e)&&Array.isArray(u())||e.tagName.toLowerCase()==="select"&&e.multiple)&&c($e(e,t,{target:e},u())),e._x_removeModelListeners||(e._x_removeModelListeners={}),e._x_removeModelListeners.default=d,i(()=>e._x_removeModelListeners.default()),e.form){let p=Ve(e.form,"reset",[],v=>{st(()=>e._x_model&&e._x_model.set($e(e,t,{target:e},u())))});i(()=>p())}e._x_model={get(){return u()},set(p){c(p)}},e._x_forceModelUpdate=p=>{p===void 0&&typeof n=="string"&&n.match(/\./)&&(p=""),window.fromModel=!0,g(()=>pn(e,"value",p)),delete window.fromModel},r(()=>{let p=u();t.includes("unintrusive")&&document.activeElement.isSameNode(e)||e._x_forceModelUpdate(p)})});function $e(e,t,n,r){return g(()=>{if(n instanceof CustomEvent&&n.detail!==void 0)return n.detail!==null&&n.detail!==void 0?n.detail:n.target.value;if(ut(e))if(Array.isArray(r)){let i=null;return t.includes("number")?i=Ie(n.target.value):t.includes("boolean")?i=pe(n.target.value):i=n.target.value,n.target.checked?r.includes(i)?r:r.concat([i]):r.filter(o=>!Qi(o,i))}else return n.target.checked;else{if(e.tagName.toLowerCase()==="select"&&e.multiple)return t.includes("number")?Array.from(n.target.selectedOptions).map(i=>{let o=i.value||i.text;return Ie(o)}):t.includes("boolean")?Array.from(n.target.selectedOptions).map(i=>{let o=i.value||i.text;return pe(o)}):Array.from(n.target.selectedOptions).map(i=>i.value||i.text);{let i;return xn(e)?n.target.checked?i=n.target.value:i=r:i=n.target.value,t.includes("number")?Ie(i):t.includes("boolean")?pe(i):t.includes("trim")?i.trim():i}}})}function Ie(e){let t=e?parseFloat(e):null;return eo(t)?t:e}function Qi(e,t){return e==t}function eo(e){return!Array.isArray(e)&&!isNaN(e)}function Tt(e){return e!==null&&typeof e=="object"&&typeof e.get=="function"&&typeof e.set=="function"}y("cloak",e=>queueMicrotask(()=>g(()=>e.removeAttribute(U("cloak")))));an(()=>`[${U("init")}]`);y("init",R((e,{expression:t},{evaluate:n})=>typeof t=="string"?!!t.trim()&&n(t,{},!1):n(t,{},!1)));y("text",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(o=>{g(()=>{e.textContent=o})})})});y("html",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(o=>{g(()=>{e.innerHTML=o,e._x_ignoreSelf=!0,C(e),delete e._x_ignoreSelf})})})});rt(Gt(":",Xt(U("bind:"))));var Hn=(e,{value:t,modifiers:n,expression:r,original:i},{effect:o,cleanup:s})=>{if(!t){let u={};ri(u),b(e,r)(l=>{wn(e,l,i)},{scope:u});return}if(t==="key")return to(e,r);if(e._x_inlineBindings&&e._x_inlineBindings[t]&&e._x_inlineBindings[t].extract)return;let a=b(e,r);o(()=>a(u=>{u===void 0&&typeof r=="string"&&r.match(/\./)&&(u=""),g(()=>pn(e,t,u,n))})),s(()=>{e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedStyles&&e._x_undoAddedStyles()})};Hn.inline=(e,{value:t,modifiers:n,expression:r})=>{t&&(e._x_inlineBindings||(e._x_inlineBindings={}),e._x_inlineBindings[t]={expression:r,extract:!1})};y("bind",Hn);function to(e,t){e._x_keyExpression=t}sn(()=>`[${U("data")}]`);y("data",(e,{expression:t},{cleanup:n})=>{if(no(e))return;t=t===""?"{}":t;let r={};Fe(r,e);let i={};oi(i,r);let o=L(e,t,{scope:i});(o===void 0||o===!0)&&(o={}),Fe(o,e);let s=q(o);Kt(s);let a=re(e,s);s.init&&L(e,s.init),n(()=>{s.destroy&&L(e,s.destroy),a()})});me((e,t)=>{e._x_dataStack&&(t._x_dataStack=e._x_dataStack,t.setAttribute("data-has-alpine-state",!0))});function no(e){return $?qe?!0:e.hasAttribute("data-has-alpine-state"):!1}y("show",(e,{modifiers:t,expression:n},{effect:r})=>{let i=b(e,n);e._x_doHide||(e._x_doHide=()=>{g(()=>{e.style.setProperty("display","none",t.includes("important")?"important":void 0)})}),e._x_doShow||(e._x_doShow=()=>{g(()=>{e.style.length===1&&e.style.display==="none"?e.removeAttribute("style"):e.style.removeProperty("display")})});let o=()=>{e._x_doHide(),e._x_isShown=!1},s=()=>{e._x_doShow(),e._x_isShown=!0},a=()=>setTimeout(s),u=ze(d=>d?s():o(),d=>{typeof e._x_toggleAndCascadeWithTransitions=="function"?e._x_toggleAndCascadeWithTransitions(e,d,s,o):d?a():o()}),c,l=!0;r(()=>i(d=>{!l&&d===c||(t.includes("immediate")&&(d?a():o()),u(d),c=d,l=!1)}))});y("for",(e,{expression:t},{effect:n,cleanup:r})=>{let i=io(t),o=b(e,i.items),s=b(e,e._x_keyExpression||"index");e._x_prevKeys=[],e._x_lookup={},n(()=>ro(e,i,o,s)),r(()=>{Object.values(e._x_lookup).forEach(a=>g(()=>{V(a),a.remove()})),delete e._x_prevKeys,delete e._x_lookup})});function ro(e,t,n,r){let i=s=>typeof s=="object"&&!Array.isArray(s),o=e;n(s=>{oo(s)&&s>=0&&(s=Array.from(Array(s).keys(),f=>f+1)),s===void 0&&(s=[]);let a=e._x_lookup,u=e._x_prevKeys,c=[],l=[];if(i(s))s=Object.entries(s).map(([f,h])=>{let x=$t(t,h,f,s);r(m=>{l.includes(m)&&E("Duplicate key on x-for",e),l.push(m)},{scope:{index:f,...x}}),c.push(x)});else for(let f=0;f<s.length;f++){let h=$t(t,s[f],f,s);r(x=>{l.includes(x)&&E("Duplicate key on x-for",e),l.push(x)},{scope:{index:f,...h}}),c.push(h)}let d=[],p=[],v=[],M=[];for(let f=0;f<u.length;f++){let h=u[f];l.indexOf(h)===-1&&v.push(h)}u=u.filter(f=>!v.includes(f));let se="template";for(let f=0;f<l.length;f++){let h=l[f],x=u.indexOf(h);if(x===-1)u.splice(f,0,h),d.push([se,f]);else if(x!==f){let m=u.splice(f,1)[0],w=u.splice(x-1,1)[0];u.splice(f,0,w),u.splice(x,0,m),p.push([m,w])}else M.push(h);se=h}for(let f=0;f<v.length;f++){let h=v[f];h in a&&(g(()=>{V(a[h]),a[h].remove()}),delete a[h])}for(let f=0;f<p.length;f++){let[h,x]=p[f],m=a[h],w=a[x],K=document.createElement("div");g(()=>{w||E('x-for ":key" is undefined or invalid',o,x,a),w.after(K),m.after(w),w._x_currentIfEl&&w.after(w._x_currentIfEl),K.before(m),m._x_currentIfEl&&m.after(m._x_currentIfEl),K.remove()}),w._x_refreshXForScope(c[l.indexOf(x)])}for(let f=0;f<d.length;f++){let[h,x]=d[f],m=h==="template"?o:a[h];m._x_currentIfEl&&(m=m._x_currentIfEl);let w=c[x],K=l[x],Y=document.importNode(o.content,!0).firstElementChild,gt=q(w);re(Y,gt,o),Y._x_refreshXForScope=Jn=>{Object.entries(Jn).forEach(([Vn,Yn])=>{gt[Vn]=Yn})},g(()=>{m.after(Y),R(()=>C(Y))()}),typeof K=="object"&&E("x-for key cannot be an object, it must be a string or an integer",o),a[K]=Y}for(let f=0;f<M.length;f++)a[M[f]]._x_refreshXForScope(c[l.indexOf(M[f])]);o._x_prevKeys=l})}function io(e){let t=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,n=/^\s*\(|\)\s*$/g,r=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,i=e.match(r);if(!i)return;let o={};o.items=i[2].trim();let s=i[1].replace(n,"").trim(),a=s.match(t);return a?(o.item=s.replace(t,"").trim(),o.index=a[1].trim(),a[2]&&(o.collection=a[2].trim())):o.item=s,o}function $t(e,t,n,r){let i={};return/^\[.*\]$/.test(e.item)&&Array.isArray(t)?e.item.replace("[","").replace("]","").split(",").map(s=>s.trim()).forEach((s,a)=>{i[s]=t[a]}):/^\{.*\}$/.test(e.item)&&!Array.isArray(t)&&typeof t=="object"?e.item.replace("{","").replace("}","").split(",").map(s=>s.trim()).forEach(s=>{i[s]=t[s]}):i[e.item]=t,e.index&&(i[e.index]=n),e.collection&&(i[e.collection]=r),i}function oo(e){return!Array.isArray(e)&&!isNaN(e)}function qn(){}qn.inline=(e,{expression:t},{cleanup:n})=>{let r=ye(e);r._x_refs||(r._x_refs={}),r._x_refs[t]=e,n(()=>delete r._x_refs[t])};y("ref",qn);y("if",(e,{expression:t},{effect:n,cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&E("x-if can only be used on a <template> tag",e);let i=b(e,t),o=()=>{if(e._x_currentIfEl)return e._x_currentIfEl;let a=e.content.cloneNode(!0).firstElementChild;return re(a,{},e),g(()=>{e.after(a),R(()=>C(a))()}),e._x_currentIfEl=a,e._x_undoIf=()=>{g(()=>{V(a),a.remove()}),delete e._x_currentIfEl},a},s=()=>{e._x_undoIf&&(e._x_undoIf(),delete e._x_undoIf)};n(()=>i(a=>{a?o():s()})),r(()=>e._x_undoIf&&e._x_undoIf())});y("id",(e,{expression:t},{evaluate:n})=>{n(t).forEach(i=>Wi(e,i))});me((e,t)=>{e._x_ids&&(t._x_ids=e._x_ids)});rt(Gt("@",Xt(U("on:"))));y("on",R((e,{value:t,modifiers:n,expression:r},{cleanup:i})=>{let o=r?b(e,r):()=>{};e.tagName.toLowerCase()==="template"&&(e._x_forwardEvents||(e._x_forwardEvents=[]),e._x_forwardEvents.includes(t)||e._x_forwardEvents.push(t));let s=Ve(e,t,n,a=>{o(()=>{},{scope:{$event:a},params:[a]})});i(()=>s())}));Ae("Collapse","collapse","collapse");Ae("Intersect","intersect","intersect");Ae("Focus","trap","focus");Ae("Mask","mask","mask");function Ae(e,t,n){y(t,r=>E(`You can't use [x-${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}oe.setEvaluator(Ut);oe.setReactivityEngine({reactive:ht,effect:hi,release:gi,raw:_});var so=oe,Oe=so;function ao(e){e.directive("collapse",t),t.inline=(n,{modifiers:r})=>{r.includes("min")&&(n._x_doShow=()=>{},n._x_doHide=()=>{})};function t(n,{modifiers:r}){let i=Wn(r,"duration",250)/1e3,o=Wn(r,"min",0),s=!r.includes("min");n._x_isShown||(n.style.height=`${o}px`),!n._x_isShown&&s&&(n.hidden=!0),n._x_isShown||(n.style.overflow="hidden");let a=(c,l)=>{let d=e.setStyles(c,l);return l.height?()=>{}:d},u={transitionProperty:"height",transitionDuration:`${i}s`,transitionTimingFunction:"cubic-bezier(0.4, 0.0, 0.2, 1)"};n._x_transition={in(c=()=>{},l=()=>{}){s&&(n.hidden=!1),s&&(n.style.display=null);let d=n.getBoundingClientRect().height;n.style.height="auto";let p=n.getBoundingClientRect().height;d===p&&(d=o),e.transition(n,e.setStyles,{during:u,start:{height:d+"px"},end:{height:p+"px"}},()=>n._x_isShown=!0,()=>{Math.abs(n.getBoundingClientRect().height-p)<1&&(n.style.overflow=null)})},out(c=()=>{},l=()=>{}){let d=n.getBoundingClientRect().height;e.transition(n,a,{during:u,start:{height:d+"px"},end:{height:o+"px"}},()=>n.style.overflow="hidden",()=>{n._x_isShown=!1,n.style.height==`${o}px`&&s&&(n.style.display="none",n.hidden=!0)})}}}}function Wn(e,t,n){if(e.indexOf(t)===-1)return n;let r=e[e.indexOf(t)+1];if(!r)return n;if(t==="duration"){let i=r.match(/([0-9]+)ms/);if(i)return i[1]}if(t==="min"){let i=r.match(/([0-9]+)px/);if(i)return i[1]}return r}var Un=ao;window.Alpine=Oe;Oe.plugin(Un);Oe.start();})();

@endverbatim
</script>
</body>
</html>
