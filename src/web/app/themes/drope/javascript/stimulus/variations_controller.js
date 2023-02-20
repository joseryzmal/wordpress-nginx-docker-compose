import { Controller } from '@hotwired/stimulus';
import isMatch from 'lodash/isMatch';

export default class extends Controller {
  static values = {
    data: Array,
    matched: Object,
    purchasableText: String,
    soldOutText: String,
    unavailableText: String,
  };

  static targets = ['submit'];

  static outlets = ['price-display'];

  connect() {
    this.selected = {};
    console.log(this.dataValue);
  }

  change(event) {
    const { name, value } = event.currentTarget;
    this.selected[name] = value;

    this.matchedValue = this.dataValue.find((item) => isMatch(this.selected, item.attributes));

    this.updatePriceDisplay();
    this.toggleSubmitButton();
  }

  isPurchasable() {
    return (this.matchedValue && this.matchedValue.is_purchasable && this.matchedValue.is_in_stock && this.matchedValue.variation_is_visible);
  }

  toggleSubmitButton() {
    this.updateSubmitText();

    if (this.isPurchasable()) {
      this.submitTarget.removeAttribute('disabled');
      this.submitTarget.classList.remove('disabled');
    }
    else {
      this.submitTarget.setAttribute('disabled', '');
      this.submitTarget.classList.add('disabled');
    }
  }

  updateSubmitText() {
    let buttonText = this.unavailableTextValue;
    if (this.isPurchasable()) {
      buttonText = this.purchasableTextValue;
    }
    else if (this.matchedValue?.is_in_stock === false) {
      buttonText = this.soldOutTextValue;
    }

    this.submitTarget.textContent = buttonText;
  }

  updatePriceDisplay() {
    // Uses https://codex.wordpress.org/Javascript_Reference/wp.template
    // const templateId = Object.keys(this.matchedValue).length > 0 ? 'variation-template' : 'unavailable-variation-template';
    const wpTemplate = wp.template('variation-template'); // id="tmpl-variation-template"
    this.priceDisplayOutlet.displayTarget.innerHTML = wpTemplate({
      variation: this.matchedValue,
    });
  }
}
