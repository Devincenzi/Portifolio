/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';
const app = createApp({});

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

app.use(openModalMessage, {});
app.use(closeModalMessage, {});
app.use(timestampToDate, {});
app.use(limitText, {});
app.use(sortearNumero, {});

import FlashMessageModal from './components/Modals/FlashMessageModal.vue';
import ClickableImage from './components/Modals/ClickableImage.vue';
import XMark from './components/Buttons/XMark.vue';
import Expand from './components/Buttons/Expand.vue';
import ChevronLeft from './components/Buttons/ChevronLeft.vue';
import ChevronRight from './components/Buttons/ChevronRight.vue';

import Dropdown from './components/Layout/Dropdown.vue';
import DropdownLink from './components/Layout/DropdownLink.vue';
import Separator from './components/Layout/Separator.vue';
import Carousel from './components/Layout/Carousel.vue';
import LazyComponent from 'v-lazy-component';

import campoCobra from './cobra/campoCobra.vue';

import { openModalMessage, closeModalMessage } from './plugins/modalController';
import { timestampToDate, limitText, sortearNumero } from './plugins/utils';

app.component('flash-message-modal', FlashMessageModal);
app.component('clickable-image', ClickableImage);
app.component('x-mark', XMark);
app.component('expand', Expand);
app.component('chevron-left', ChevronLeft);
app.component('chevron-right', ChevronRight);

app.component('dropdown', Dropdown);
app.component('dropdown-link', DropdownLink);
app.component('separator', Separator);
app.component('carousel', Carousel);
app.component('lazy-component', LazyComponent);

app.component('campo-cobra', campoCobra);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');