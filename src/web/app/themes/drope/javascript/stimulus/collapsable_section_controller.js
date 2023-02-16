import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  connect() {
    this.element.classList.add('collapsable-section');
  }

  toggle() {
    this.element.classList.toggle('collapsed');
  }
};
