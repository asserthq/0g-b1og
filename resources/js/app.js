import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import './prism'

import.meta.glob([
    '../images/**',
    '../favicons/**'
]);