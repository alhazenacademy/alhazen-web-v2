import Alpine from 'alpinejs'
window.Alpine = Alpine

import './landing/swiper-init'
import './landing/theme'

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