import "../css/app.css";

import { ZiggyVue } from "ziggy-js";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";

// import "vuetify/styles";
// import { createVuetify } from "vuetify";
// import * as components from "vuetify/components";
// import * as directives from "vuetify/directives";

// const vuetify = createVuetify({
//     ssr: true,
//     components,
//     directives,
// });

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => (title ? `${title}` : appName),
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            // .use(vuetify)
            .mount(el);
    },
    progress: {
        // delay: 250,
        color: "#00b3ff",
        includeCSS: true,
        showSpinner: true,
    },
});
