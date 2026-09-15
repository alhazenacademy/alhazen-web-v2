<section x-data="codedoc()" :class="isPresentation ? 'fixed inset-0 z-50 bg-background overflow-hidden p-0 flex flex-col' : (isFullscreen ? 'fixed inset-0 z-50 bg-background overflow-y-auto pt-6' : 'min-h-screen pt-6 pb-12 bg-background')" class="transition-all duration-300">
    <div :class="isPresentation ? 'flex-1 flex flex-col min-h-0 max-w-none p-0' : (isFullscreen ? 'max-w-none px-6' : 'max-w-[1600px] mx-auto px-4 sm:px-6')">
        {{-- Custom Popup / Modal --}}
        <div x-show="showPopup" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs">
            <div class="bg-white dark:bg-dark p-6 rounded-2xl shadow-2xl border border-[var(--color-neutral)]/40 max-w-sm w-full text-center transform transition-all">
                <h3 class="font-bold text-lg mb-2 text-text">Informasi</h3>
                <p class="text-text/80 mb-6" x-text="popupMessage"></p>
                <button @click="showPopup = false" class="w-full bg-accent hover:bg-accent/90 text-white px-6 py-3 rounded-xl font-semibold transition cursor-pointer shadow-md">Tutup</button>
            </div>
        </div>

        {{-- Custom Confirm Modal for Clear --}}
        <div x-show="showConfirm" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs">
            <div class="bg-white dark:bg-dark p-6 rounded-2xl shadow-2xl border border-[var(--color-neutral)]/40 max-w-sm w-full text-center transform transition-all">
                <h3 class="font-bold text-lg mb-2 text-text">Konfirmasi Hapus</h3>
                <p class="text-text/80 mb-6">Yakin ingin menghapus semua tulisan di editor?</p>
                <div class="flex gap-3">
                    <button @click="showConfirm = false" class="flex-1 bg-neutral-200 hover:bg-neutral-300 text-text px-4 py-3 rounded-xl font-semibold transition cursor-pointer">Batal</button>
                    <button @click="executeClear()" class="flex-1 bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl font-semibold transition cursor-pointer shadow-md">Ya, Hapus</button>
                </div>
            </div>
        </div>

        {{-- Download Format Popup --}}
        <div x-show="showDownload" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs" @click.self="showDownload = false">
            <div class="bg-white dark:bg-dark p-6 rounded-2xl shadow-2xl border border-[var(--color-neutral)]/40 max-w-sm w-full transform transition-all">
                <h3 class="font-bold text-lg mb-1 text-text text-center">Download Dokumen</h3>
                <p class="text-text/70 text-sm mb-5 text-center">Pilih format file yang ingin diunduh.</p>
                <div class="flex flex-col gap-2">
                    <button @click="downloadFile('md')" class="w-full text-center px-4 py-3 rounded-xl bg-primary hover:bg-primary/90 text-white font-semibold shadow-sm transition cursor-pointer">Markdown (.md)</button>
                    <button @click="downloadFile('html')" class="w-full text-center px-4 py-3 rounded-xl bg-primary hover:bg-primary/90 text-white font-semibold shadow-sm transition cursor-pointer">HTML (.html)</button>
                    <button @click="downloadFile('txt')" class="w-full text-center px-4 py-3 rounded-xl bg-primary hover:bg-primary/90 text-white font-semibold shadow-sm transition cursor-pointer">Plain Text (.txt)</button>
                </div>
                <button @click="showDownload = false" class="w-full mt-4 bg-accent hover:bg-accent/90 text-white px-6 py-3 rounded-xl font-semibold transition cursor-pointer shadow-md">Batal</button>
            </div>
        </div>

        {{-- Toolbar --}}
        <div x-show="!isPresentation" class="mb-4 sm:mb-6 p-3 sm:p-4 bg-white/80 dark:bg-dark/80 rounded-2xl border border-[var(--color-neutral)]/40 backdrop-blur shadow-sm flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:items-center">
            <div class="flex items-center gap-2 w-full sm:w-auto">
                <button @click="mode = 'split'" :class="mode === 'split' ? 'bg-primary text-white shadow-sm' : 'bg-neutral-100 text-text/80 hover:bg-neutral-200'" class="flex-1 sm:flex-none px-4 py-2.5 rounded-xl font-semibold transition cursor-pointer text-sm">Split</button>
                <button @click="mode = 'preview'" :class="mode === 'preview' ? 'bg-primary text-white shadow-sm' : 'bg-neutral-100 text-text/80 hover:bg-neutral-200'" class="flex-1 sm:flex-none px-4 py-2.5 rounded-xl font-semibold transition cursor-pointer text-sm whitespace-nowrap">Preview Only</button>
            </div>
            <div class="hidden sm:block h-6 w-px bg-neutral-300 mx-1"></div>
            <div class="flex items-center gap-2 w-full sm:w-auto overflow-x-auto pb-1 sm:pb-0 -mx-1 px-1">
                <button @click="copyMarkdown()" title="Copy Markdown" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-neutral-100 hover:bg-neutral-200 text-text/80 rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                </button>
                <button @click="showDownload = true" title="Download" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-neutral-100 hover:bg-neutral-200 text-text/80 rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </button>
                <button @click="clearDraft()" title="Clear Editor" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-red-50 hover:bg-red-100 text-red-600 rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                </button>
                <button @click="toggleFullscreen()" title="Toggle Fullscreen" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-neutral-100 hover:bg-neutral-200 text-text/80 rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4m-4 0l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                </button>
                <button @click="togglePresentation()" title="Presentation Mode" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-accent/20 hover:bg-accent/30 text-accent rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </button>
                <button @click="showHelp = !showHelp" title="Markdown Help" class="shrink-0 p-2.5 min-w-[44px] min-h-[44px] bg-neutral-100 hover:bg-neutral-200 text-text/80 rounded-xl transition cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </button>
            </div>

            <div class="w-full sm:w-auto sm:ml-auto pt-2 sm:pt-0 border-t border-neutral-200/70 sm:border-0 text-xs sm:text-small text-text/60 text-right">
                <span x-text="wordCount"></span> kata |
                <span x-text="content.length"></span> karakter
            </div>
        </div>

        {{-- Presentation Exit Button (overlay, tidak makan tinggi layout) --}}
        <div x-show="isPresentation" x-cloak class="fixed top-6 right-6 z-[60] pointer-events-none">
            <button @click="exitPresentation()" title="Exit Presentation" class="pointer-events-auto bg-neutral-500/30 hover:bg-neutral-500/60 text-white p-3 rounded-full backdrop-blur-sm transition cursor-pointer flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- Markdown Help Card --}}
        <div x-show="showHelp && !isPresentation" x-cloak x-transition class="mb-4 p-4 bg-white/90 dark:bg-dark/90 rounded-2xl border border-[var(--color-neutral)]/40 shadow-sm">
            <div class="flex items-center justify-between gap-3 mb-3">
                <h3 class="font-bold text-text text-sm">Panduan Syntax Markdown</h3>
                <button @click="showHelp = false" class="p-2 bg-neutral-100 hover:bg-neutral-200 dark:bg-white/10 rounded-lg transition cursor-pointer" title="Tutup panduan">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 text-xs text-text/80">
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Heading</p>
                    <code class="font-mono"># H1, ## H2, ### H3</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Format</p>
                    <code class="font-mono">**tebal** *miring* ~~coret~~</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">List</p>
                    <code class="font-mono">- item, 1. nomor, - [x]</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Link & Gambar</p>
                    <code class="font-mono">[teks](url) ![alt](img)</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Kode</p>
                    <code class="font-mono">`inline` ```python</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Tabel</p>
                    <code class="font-mono">| A | B | --- |</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Quote</p>
                    <code class="font-mono">&gt; kutipan, --- garis</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Alert</p>
                    <code class="font-mono">:::success Judul ... :::</code>
                </div>
                <div class="p-2 rounded-lg bg-neutral-50 dark:bg-white/5 border border-neutral-200/70 dark:border-white/10">
                    <p class="font-semibold text-text mb-0.5">Diagram & Rumus</p>
                    <code class="font-mono">```mermaid, $x^2$</code>
                </div>
            </div>
        </div>

        {{-- Workspace --}}
        <div :class="isPresentation ? 'flex-1 flex flex-col min-h-0' : (mode === 'split' ? 'grid lg:grid-cols-2 gap-4 sm:gap-6' : 'block')">
            {{-- Editor (Textarea) --}}
            <div x-show="mode === 'split' && !isPresentation" class="h-[45vh] sm:h-[55vh] lg:h-[75vh]">
                <textarea x-model="content" x-ref="editor" class="w-full h-full p-4 sm:p-6 rounded-2xl border border-[var(--color-neutral)]/40 bg-white dark:bg-dark font-mono text-text text-sm sm:text-base resize-none focus:ring-2 focus:ring-primary outline-none shadow-sm" placeholder="Tulis Markdown di sini..."></textarea>
            </div>

            {{-- Preview Pane --}}
            <div x-ref="preview" @click="handlePreviewClick($event)" :class="isPresentation ? 'flex-1 min-h-0 w-full max-w-5xl mx-auto h-full overflow-y-auto px-5 py-8 sm:px-6 sm:py-10 md:p-12 bg-white/50 dark:bg-dark/50 markdown-preview border-0 rounded-none shadow-none' : (mode === 'preview' ? 'max-w-4xl mx-auto h-[60vh] sm:h-[70vh] lg:h-[75vh] overflow-y-auto p-4 sm:p-6 md:p-8 rounded-2xl border border-[var(--color-neutral)]/40 bg-white/50 dark:bg-dark/50 shadow-sm markdown-preview' : 'h-[45vh] sm:h-[55vh] lg:h-[75vh] overflow-y-auto p-4 sm:p-6 md:p-8 rounded-2xl border border-[var(--color-neutral)]/40 bg-white/50 dark:bg-dark/50 max-w-none shadow-sm markdown-preview')" id="preview-pane">
                <div x-html="renderedHtml"></div>
            </div>
        </div>
    </div>

    <script>
        window.codedoc = function() {
            // Configure Marked
            marked.setOptions({
                gfm: true,
                breaks: true,
                headerIds: true,
                mangle: false
            });

            return {
                mode: 'split',
                showPopup: false,
                showConfirm: false,
                showDownload: false,
                isFullscreen: false,
                isPresentation: false,
                showHelp: false,
                popupMessage: '',
                content: localStorage.getItem('alhazen-codedoc:draft') || '# Alhazen CodeDoc\n\nSelamat datang di **Alhazen CodeDoc**!\n\nTulis dokumentasi, catatan belajar, atau kode Markdown Anda dengan live preview.\n\n## Contoh Fitur:\n- **Teks tebal** dan *miring*\n- List item terstruktur\n- Tabel Markdown\n\n| Fitur | Status |\n| :--- | :--- |\n| Live Preview | Aktif |\n| Mermaid | Aktif |\n\n```python\n# Contoh Code Block\nprint("Halo Alhazen!")\n```\n\n```html\n<div>Halo Alhazen</div>\n```\n',
                renderedHtml: '',
                toggleFullscreen() {
                    this.isFullscreen = !this.isFullscreen;
                },
                togglePresentation() {
                    this.isPresentation = true;
                    this.isFullscreen = true;
                    this.mode = 'preview';
                },
                exitPresentation() {
                    this.isPresentation = false;
                    this.isFullscreen = false;
                    this.mode = 'split';
                },
                showNotification(msg) {
                    this.popupMessage = msg;
                    this.showPopup = true;
                },
                get wordCount() {
                    return this.content.trim() === '' ? 0 : this.content.trim().split(/\s+/).length;
                },
                init() {
                    this.render();
                    this.$watch('content', () => {
                        localStorage.setItem('alhazen-codedoc:draft', this.content);
                        this.render();
                    });
                },
                parseAdmonitions(text) {
                    return text.replace(/^[ \t]*:::[ \t]*(success|danger|info|warning)[ \t]*(.*)?\n([\s\S]*?)\n[ \t]*:::[ \t]*$/gm, (match, type, title, body) => {
                        const rawTitle = (title || '').trim();
                        const hasTitle = rawTitle.length > 0;
                        const label = hasTitle ? (typeof marked.parseInline === 'function' ? marked.parseInline(rawTitle) : marked.parse(rawTitle)) : '';
                        const inner = marked.parse((body || '').trim());

                        if (hasTitle) {
                            return `<div class="md-alert md-alert-${type}"><div class="md-alert-title">${label}</div><div class="md-alert-body">${inner}</div></div>`;
                        } else {
                            return `<div class="md-alert md-alert-${type}"><div class="md-alert-body">${inner}</div></div>`;
                        }
                    });
                },
                slugifyHeading(text) {
                    const plain = (text || '')
                        .replace(/!\[([^\]]*)\]\([^)]*\)/g, '$1')
                        .replace(/\[([^\]]*)\]\([^)]*\)/g, '$1')
                        .replace(/[`*_~#]/g, '')
                        .trim()
                        .toLowerCase()
                        .replace(/[^\w\s-]+/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-')
                        .replace(/^-+|-+$/g, '');
                    return plain;
                },
                parseTOC(text) {
                    const toc = [];
                    const seen = {};
                    const lines = text.split('\n');
                    let inFence = false;
                    lines.forEach(line => {
                        if (/^\s*(```|~~~)/.test(line)) {
                            inFence = !inFence;
                            return;
                        }
                        if (inFence) return;
                        const match = line.match(/^(#{1,6})\s+(.*)/);
                        if (match) {
                            const level = match[1].length;
                            const title = match[2].trim();
                            let slug = this.slugifyHeading(title) || 'section';
                            if (seen[slug] !== undefined) {
                                seen[slug] += 1;
                                slug = `${slug}-${seen[slug]}`;
                            } else {
                                seen[slug] = 0;
                            }
                            toc.push({ level, title, slug });
                        }
                    });

                    let tocHtml = '<div class="md-toc p-4 bg-neutral-50 dark:bg-white/5 rounded-xl border border-neutral-200/70 mb-6"><h4 class="font-bold mb-2">Daftar Isi</h4><ul>';
                    toc.forEach(item => {
                        const indent = (item.level - 1) * 1.5;
                        const label = typeof marked.parseInline === 'function' ? marked.parseInline(item.title) : item.title;
                        tocHtml += `<li style="margin-left: ${indent}rem"><a href="#${item.slug}" data-toc-link class="text-primary hover:underline">${label}</a></li>`;
                    });
                    tocHtml += '</ul></div>';

                    return text.replace(/\[TOC\]/gi, tocHtml);
                },
                assignHeadingIds() {
                    const preview = this.$refs.preview;
                    if (!preview) return;
                    const seen = {};
                    preview.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach((heading) => {
                        if (heading.closest('.md-toc')) return;
                        let slug = this.slugifyHeading(heading.textContent) || 'section';
                        if (seen[slug] !== undefined) {
                            seen[slug] += 1;
                            slug = `${slug}-${seen[slug]}`;
                        } else {
                            seen[slug] = 0;
                        }
                        heading.id = slug;
                    });
                },
                handlePreviewClick(event) {
                    const link = event.target.closest('a[href^="#"]');
                    if (!link) return;
                    const hash = link.getAttribute('href');
                    if (!hash || hash.length < 2) return;
                    const preview = this.$refs.preview;
                    if (!preview) return;
                    let id = '';
                    try {
                        id = decodeURIComponent(hash.slice(1));
                    } catch (e) {
                        id = hash.slice(1);
                    }
                    if (!id) return;
                    const target = preview.querySelector('#' + CSS.escape(id));
                    if (!target) return;
                    event.preventDefault();
                    const paneRect = preview.getBoundingClientRect();
                    const targetRect = target.getBoundingClientRect();
                    preview.scrollTo({
                        top: preview.scrollTop + targetRect.top - paneRect.top - 16,
                        behavior: 'smooth'
                    });
                },
                render() {
                    try {
                        const contentWithAdmonitions = this.parseAdmonitions(this.content);
                        const contentWithTOC = this.parseTOC(contentWithAdmonitions);
                        const rawHtml = marked.parse(contentWithTOC);
                        this.renderedHtml = DOMPurify.sanitize(rawHtml);
                    } catch (e) {
                        this.renderedHtml = '<p class="text-red-500">Error parsing markdown</p>';
                    }
                    this.$nextTick(() => {
                        this.assignHeadingIds();
                        document.querySelectorAll('#preview-pane pre code').forEach((block) => {
                            hljs.highlightElement(block);
                        });
                        try {
                            mermaid.run({ querySelector: '#preview-pane .mermaid' });
                        } catch (e) {}
                    });
                },
                copyMarkdown() {
                    navigator.clipboard.writeText(this.content);
                    this.showNotification('Markdown berhasil disalin ke clipboard!');
                },
                downloadFile(format = 'md') {
                    let blob;
                    let filename = 'alhazen-codedoc';
                    if (format === 'html') {
                        const body = this.renderedHtml || '';
                        const html = `<!DOCTYPE html>\n<html lang="id">\n<head>\n<meta charset="utf-8">\n<meta name="viewport" content="width=device-width, initial-scale=1">\n<title>Alhazen CodeDoc Export</title>\n<style>\nbody{font-family:system-ui,-apple-system,'Segoe UI',Roboto,sans-serif;line-height:1.6;color:#111827;max-width:800px;margin:0 auto;padding:2rem 1.25rem}\nh1{font-size:2rem}h2{font-size:1.5rem}h3{font-size:1.25rem}\ntable{border-collapse:collapse;width:100%}th,td{border:1px solid #ddd;padding:.5rem .75rem;text-align:left}\npre{background:#f6f8fa;padding:1rem;border-radius:.75rem;overflow-x:auto}\ncode{font-family:ui-monospace,Menlo,Consolas,monospace}\nimg{max-width:100%;height:auto}\n</style>\n</head>\n<body>\n${body}\n</body>\n</html>`;
                        blob = new Blob([html], { type: 'text/html;charset=utf-8' });
                        filename += '.html';
                    } else if (format === 'txt') {
                        blob = new Blob([this.content], { type: 'text/plain;charset=utf-8' });
                        filename += '.txt';
                    } else {
                        blob = new Blob([this.content], { type: 'text/markdown;charset=utf-8' });
                        filename += '.md';
                    }
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = filename;
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    URL.revokeObjectURL(url);
                    this.showDownload = false;
                },
                clearDraft() {
                    this.showConfirm = true;
                },
                executeClear() {
                    this.content = '';
                    localStorage.removeItem('alhazen-codedoc:draft');
                    this.showConfirm = false;
                    this.showNotification('Editor telah dibersihkan!');
                }
            }
        }
    </script>
    <style>
        .markdown-preview h1 { font-size: 2rem; font-weight: bold; margin-bottom: 1rem; margin-top: 1.5rem; }
        .markdown-preview h2 { font-size: 1.5rem; font-weight: bold; margin-bottom: 0.75rem; margin-top: 1.25rem; }
        .markdown-preview h3 { font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem; margin-top: 1rem; }
        .markdown-preview p { margin-bottom: 1rem; line-height: 1.6; }
        .markdown-preview ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
        .markdown-preview ol { list-style-type: decimal; padding-left: 1.5rem; margin-bottom: 1rem; }
        .markdown-preview li { margin-bottom: 0.25rem; }
        .markdown-preview blockquote { border-left: 4px solid #059669; padding-left: 1rem; margin-left: 0; margin-right: 0; color: inherit; opacity: 0.8; font-style: italic; }
        .markdown-preview { overflow-wrap: anywhere; word-break: break-word; }
        .markdown-preview table { display: block; width: max-content; max-width: 100%; overflow-x: auto; border-collapse: collapse; margin-bottom: 1rem; }
        .markdown-preview th, .markdown-preview td { border: 1px solid rgba(0, 0, 0, 0.1); padding: 0.4rem 0.6rem; text-align: left; white-space: nowrap; }
        .markdown-preview img { max-width: 100%; height: auto; border-radius: 0.75rem; }
        .markdown-preview pre { max-width: 100%; }
        .markdown-preview th { background-color: rgba(0, 0, 0, 0.05); }
        .markdown-preview hr { border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1); margin: 1.5rem 0; }
        .markdown-preview code { font-family: monospace; background: rgba(0, 0, 0, 0.06); padding: 0.2rem 0.4rem; border-radius: 0.25rem; font-size: 0.9em; color: #24292f; }
        .markdown-preview pre { background: #f6f8fa; padding: 1rem; border-radius: 0.75rem; overflow-x: auto; border: 1px solid rgba(0, 0, 0, 0.08); margin-bottom: 1rem; }
        .markdown-preview pre code { background: transparent; padding: 0; color: #24292f; }
        .markdown-preview pre code.hljs { background: transparent; }
        .markdown-preview .md-alert { border-radius: 0.75rem; padding: 1rem 1.25rem; margin-bottom: 1rem; border: 1px solid; }
        .markdown-preview .md-alert-title { font-weight: bold; text-transform: capitalize; margin-bottom: 0.5rem; }
        .markdown-preview .md-alert-body p:last-child { margin-bottom: 0; }
        .markdown-preview .md-alert-success { background: #ecfdf5; border-color: #059669; color: #065f46; }
        .markdown-preview .md-alert-danger { background: #fef2f2; border-color: #ef4444; color: #991b1b; }
        .markdown-preview .md-alert-info { background: #eff6ff; border-color: #3b82f6; color: #1e40af; }
        .markdown-preview .md-alert-warning { background: #fffbeb; border-color: #f59e0b; color: #92400e; }
    </style>
</section>
