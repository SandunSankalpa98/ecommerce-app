import './bootstrap';

import Alpine from 'alpinejs';
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';


window.Alpine = Alpine;

Alpine.start();


// Initialize Splide carousels
window.addEventListener('DOMContentLoaded', function () {
    const elements = document.getElementsByClassName('splide');
    for (let i = 0; i < elements.length; i++) {
        new Splide(elements[i], {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: 3000,
        }).mount();
    }
});