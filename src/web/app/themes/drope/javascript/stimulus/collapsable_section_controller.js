import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static values = {
    collapsed: Boolean,
  };

  connect() {
    this.element.classList.add('collapsable-section');
    if (this.collapsedValue) {
      this.element.classList.add('collapsed');
    }
  }

  toggle() {
    this.element.classList.toggle('collapsed');
  }
};
