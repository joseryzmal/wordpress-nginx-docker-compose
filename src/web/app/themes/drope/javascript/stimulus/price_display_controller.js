import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static targets = ['display']; // Used in variations#updatePriceDisplay
}
