import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static targets = ['tabpanel', 'tab'];

  connect() {
    this.switchTab(this.tabTargets[0]);
  }

  selectTab(event) {
    this.switchTab(event.currentTarget);
  }

  switchTab(element) {
    const selectedId = element.getAttribute('aria-controls');

    this.tabTargets.forEach((tab) => {
      tab.classList.remove('selected');
      element.setAttribute('aria-selected', false);
    });
    element.classList.add('selected');
    element.setAttribute('aria-selected', true);

    this.tabpanelTargets.forEach((tabpanel) => {
      tabpanel.classList.add('hidden');

      if (tabpanel.id === selectedId) {
        tabpanel.classList.remove('hidden');
      }
    });
  }
};
