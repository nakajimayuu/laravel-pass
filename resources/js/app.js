import './bootstrap';
import '../bootstrap-5.0.2/js/bootstrap.bundle';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
