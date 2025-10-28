import Alpine from 'alpinejs'
window.Alpine = Alpine

import './landing/swiper-init'
import './landing/theme'
import './landing/booking.js';

import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import { Indonesian } from "flatpickr/dist/l10n/id.js";


function initDatepickers(root = document) {
  root.querySelectorAll("[data-datepicker]").forEach((el) => {
    if (el._flatpickr) return; 
    const opts = {
      dateFormat: "Y-m-d",
      altInput: true,
      altFormat: "d F Y",
      allowInput: true,
      locale: Indonesian,
      ...JSON.parse(el.dataset.options || "{}"),
    };
    flatpickr(el, opts);
  });
}
document.addEventListener("DOMContentLoaded", () => initDatepickers());
document.addEventListener("alpine:init", () => {
  initDatepickers();
  const mo = new MutationObserver((muts) => {
    for (const m of muts) {
      m.addedNodes.forEach((node) => {
        if (node.nodeType === 1) initDatepickers(node);
      });
    }
  });
  mo.observe(document.documentElement, { childList: true, subtree: true });
});

window.reviewVideoModal = function (type, url) {
  return {
    open: false,
    isYoutube: type === 'youtube',
    isMp4: type === 'mp4',
    rawUrl: url,
    iframeSrc: '',

    openModal() {
      this.open = true;
      document.documentElement.classList.add('overflow-hidden');

      if (this.isYoutube) {
        const sep = this.rawUrl.includes('?') ? '&' : '?';
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        this.iframeSrc = `${this.rawUrl}${sep}autoplay=${prefersReduced ? 0 : 1}&rel=0&modestbranding=1`;
      } else if (this.isMp4) {
        if (this.$refs.mp4) {
          this.$refs.mp4.src = this.rawUrl;
          this.$refs.mp4.currentTime = 0;
          this.$refs.mp4.play().catch(() => {});
        }
      }
    },

    closeModal() {
      this.open = false;
      document.documentElement.classList.remove('overflow-hidden');

      if (this.isYoutube) {
        this.iframeSrc = '';
      } else if (this.isMp4 && this.$refs.mp4) {
        this.$refs.mp4.pause();
        this.$refs.mp4.removeAttribute('src');
        this.$refs.mp4.load();
      }
    }
  };
};

Alpine.start()