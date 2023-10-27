import "bootstrap/dist/css/bootstrap.min.css";
import '../css/job-fairs.css';
import '../css/global.css';
import '../css/app.css';
import '@splidejs/vue-splide/css';

import "bootstrap";

import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Link, Head } from "@inertiajs/vue3"
import VueSplide from '@splidejs/vue-splide';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VueSplide)
            .component("Head", Head)
            .component("Link", Link)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
