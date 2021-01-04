document.addEventListener('DOMContentLoaded', () => {
  window.$slider.panels = document.querySelectorAll('.slide-panel');
  window.$slider.render();
  setInterval(() => window.$slider.next(), 2000);
});

window.$slider = {
  index: 0,
  panels: [],

  next(amount = 1) {
    this.index += amount;
    if (this.index >= this.panels.length) {
      this.index = 0;
    }
    this.render();
  },

  back(amount = 1) {
    this.index = Math.max(this.index - amount, 0);
    this.render();
  },

  render() {
    for (let i = 0; i < this.panels.length; i++) {
      const panel = this.panels[i];
      if (!panel.classList.contains('slide-panel')) {
        continue;
      }
      panel.style.display = this.index === i ? 'block' : 'none';
    }
  },
};