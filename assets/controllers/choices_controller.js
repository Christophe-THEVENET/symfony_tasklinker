import { Controller } from '@hotwired/stimulus';
import Choices from 'choices.js';

export default class extends Controller {
    static targets = ['select'];

    connect() {
        if (this.hasSelectTarget) {
            this.choices = new Choices(this.selectTarget, {
                removeItemButton: true,
                searchEnabled: true,
                placeholder: true,
                placeholderValue: this.selectTarget.getAttribute('placeholder') || ''
            });
        }
    }

    disconnect() {
        if (this.choices) {
            this.choices.destroy();
        }
    }
}
