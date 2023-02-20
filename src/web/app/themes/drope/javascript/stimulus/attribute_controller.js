import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static targets = ['label'];

  // Pre-selects the first attribute on page load
  // This will trigger variations#change
  connect() {
    this.labelTargets[0].click();
  }
}
